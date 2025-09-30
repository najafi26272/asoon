<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{User,UserAccess};
use Illuminate\Http\JsonResponse;

use Iamfarhad\Validation\Rules\Mobile;
use Iamfarhad\Validation\Rules\NationalCode;
use Iamfarhad\Validation\Rules\PersianAlpha;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function list(Request $request): JsonResponse{
        try {
            $paginateNum = $request->input('paginateNum', 10);
            $searchTerm = '%'.$request->search.'%';
            $items = User::where(function($query) use ($searchTerm) {
                    $query->whereRaw("CONCAT(name, ' ', family) LIKE ?", ['%'.$searchTerm.'%'])
                          ->orWhere('username', 'LIKE', '%'.$searchTerm.'%')
                          ->orWhere('description', 'LIKE', '%'.$searchTerm.'%');
                })
                ->paginate($paginateNum);

            $sortedValues = $items->sortByDesc('id')->values();
            $pagination = [
                'total' => $items->total(),
                'per_page' => $items->perPage(),
                'current_page' => $items->currentPage(),
                'last_page' => $items->lastPage(),
                'from' => $items->firstItem(),
                'to' => $items->lastItem(),
            ];
            return $this->_response('Success', 200,  ['items' => $sortedValues , 'pagination' => $pagination] );
        } catch (\Exception $e) {
            \Log::error('Error: ' . $e->getMessage());
            return $this->_response('Error', 500, ['error' => 'An error occurred while fetching data.']);
        }
    }

    public function changeStatus($id){
        try{
            $user = User::find($id);
            if($user->status == "active"){
                $user->status = 'passive';
            }else{
                $user->status = 'active';
            }
            $user->save();
            return $this->_response('Success', 200, []);
        } catch (\Exception $e) {
            \Log::error('Error: ' . $e->getMessage());
            return $this->_response('Error', 500, ['error' => 'An error occurred.']);
        }
    }

    public function delete(Request $request){
        try{
            $user = User::find($request->userId);
            $user->delete();
            return $this->_response('Success', 200, []);
        } catch (\Exception $e) {
            \Log::error('Error: ' . $e->getMessage());
            return $this->_response('Error', 500, ['error' => 'An error occurred.']);
        }
    }

    public function userAccess(Request $request){
        try{
            $access = UserAccess::where('user_id', $request->userId)->first();
            return $this->_response('Success', 200, ['item' => $access]);
        } catch (\Exception $e) {
            \Log::error('Error: ' . $e->getMessage());
            return $this->_response('Error', 500, ['error' => 'An error occurred.']);
        }
    }

    public function updateUserAccess(Request $request){
        try{
            $access = UserAccess::where('user_id', $request->userId)->first();
            $access->user_access = $request->userAccess;
            $access->task_access = $request->taskAccess;
            $access->meetings_access = $request->meetingsAccess;
            $access->project_access = $request->projectAccess;
            $access->report_access = $request->reportAccess;
            $access->save();
            return $this->_response('Success', 200, []);
        } catch (\Exception $e) {
            \Log::error('Error: ' . $e->getMessage());
            return $this->_response('Error', 500, ['error' => 'An error occurred.']);
        }
    }

    public function userProfile(Request $request){
        try{
            $user = User::find($request->userId);            
            return $this->_response('Success', 200, ['item' => $user]);
        } catch (\Exception $e) {
            \Log::error('Error: ' . $e->getMessage());
            return $this->_response('Error', 500, ['error' => 'An error occurred.']);
        }
    }

    public function updateUserProfile(Request $request){
        $validationErrors = $this->validateUserProfile($request);
        if ($validationErrors) {
            return $this->_response('Validation error', 422, ['errors' => $validationErrors]);
        }
    
        try {
            $user = User::findOrFail($request->userId);
            $this->updateUserData($user, $request);
    
            if ($request->hasFile('newImage')) {
                $this->handleUserImage($user, $request->newImage);
            }
            $user->save();
            return $this->_response('Success', 200, ['item' => $user]);
        } catch (\Exception $e) {
            \Log::error('Error: ' . $e->getMessage());
            return $this->_response('Error', 500, ['error' => 'An error occurred.']);
        }
    }
    
    private function validateUserProfile(Request $request){
        $rules = [
            'name' => ['required', 'max:40', new PersianAlpha()],
            'family' => ['required', 'max:40', new PersianAlpha()],
            'username' => 'required|max:40|unique:users,username,' . $request->userId,
            'mobile' => ['nullable', new Mobile()],
            'nationalCode' => ['nullable', new NationalCode()],
        ];
    
        if ($request->hasFile('newImage')) {
            $rules['newImage'] = "image|max:2000";
        }
    
        if ($request->filled('password')) {
            $rules['password'] = "max:255|min:6|same:rePassword";
            $rules['rePassword'] = "required|max:255|min:6|same:password";
        }
    
        $validator = \Validator::make($request->all(), $rules);
    
        if ($validator->fails()) {
            return $validator->errors()->toArray(); // Convert to a simple array
        }
        return null; // No validation errors
    }

    private function updateUserData(User $user, Request $request){
        $user->name = $request->name;
        $user->family = $request->family;
        $user->mobile = $request->mobile;
        $user->username = $request->username;
        $user->national_code = $request->nationalCode;
        $user->email = $request->email;
        $user->description = $request->description;
        $user->level = $request->level;
        $user->status = $request->status;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
    }

    private function handleUserImage(User $user, $newImage){
        if ($user->avatar) {
            Storage::disk('public')->delete("public/images/users/avatar/" . $user->avatar);
        }

        $imageName = time() . '_' . $newImage->getClientOriginalName();
        $newImage->storeAs('public/images/users/avatar', $imageName);
        $user->avatar = $imageName;
    }

    private function _response(string $message, int $statusCode, array $data): JsonResponse
    {
        return response()->json([
            'message' => $message,
            'statusCode' => $statusCode,
            'responseData' => $data,
        ], $statusCode, [
            'Content-Type' => 'application/json;charset=UTF-8',
            'Charset' => 'utf-8',
        ]);
    }
}
