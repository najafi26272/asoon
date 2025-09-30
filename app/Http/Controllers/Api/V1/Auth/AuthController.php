<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;
use Iamfarhad\Validation\Rules\Mobile;
use Iamfarhad\Validation\Rules\NationalCode;
use Iamfarhad\Validation\Rules\PersianAlpha;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    /**
     * Handle user login.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function login(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'username' => 'required|string',
                'password' => 'required|string|regex:/^[a-zA-Z0-9@$#^%&*!]+$/u',
            ]);
        
            if ($validator->fails()) {
                return $this->_response('Validation Failed', 422, ['error' => $validator->errors()]);
            }
        
            $credentials = $request->only('username', 'password');
        
            if (Auth::attempt($credentials)) {
                $user = Auth::user();
        
                if ($user->status === 'active') {
                    $token = $user->createToken('LaravelAuthApp')->accessToken;
        
                    $userData = User::select('id', 'username', 'name', 'family', 'description', 'mobile', 'level', 'avatar', 'status')
                        ->where('username', $request->username)
                        ->first();
        
                    $userData->avatar = $userData->avatar ? 'images/users/' . $userData->avatar : null;
        
                    $data = [
                        'token' => $token,
                        'user' => $userData
                    ];
                    return $this->_response('Success', 200, ['item' => $data]);
                } else {
                    Auth::logout();
                    return $this->_response('Error', 403, ['حساب کاربری غیرفعال است.']);
                }
            }
            return $this->_response('Unauthorized', 401, ['نام کاربری یا رمزعبور نامعتبر است.']);
        } catch (\Exception $e) {
            \Log::error('Error: ' . $e->getMessage());
            return $this->_response('Error', 500, ['error' => 'An error occurred.']);
        }
    }

    /**
     * Handle user logout.
     *
     * @return JsonResponse
     */
    public function logout()
    {
        try {
            $user = Auth::user();
            $user->token()->revoke();
            return $this->response('Success', 200, []);
        } catch (\Exception $e) {
            \Log::error('Error: ' . $e->getMessage());
            return $this->_response('Error', 500, ['error' => 'An error occurred.']);
        }
    }

    public function myProfile(Request $request){
        try{
            $user = Auth::user();
            return $this->_response('Success', 200, ['item' => $user]);
        } catch (\Exception $e) {
            \Log::error('Error: ' . $e->getMessage());
            return $this->_response('Error', 500, ['error' => 'An error occurred.']);
        }
    }

    public function updateMyProfile(Request $request){
        $validationErrors = $this->validateUserProfile($request);
        if ($validationErrors) {
            return $this->_response('Validation error', 422, ['errors' => $validationErrors]);
        }
    
        try {
            $user = Auth::user();
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
            'username' => 'required|max:40|unique:users,username,' . Auth::user()->id,
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