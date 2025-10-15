<?php

use App\Http\Controllers\JalaseController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Middleware\Authenticate;
use Cryptommer\Smsir\Objects\VerifyResponse;
use Illuminate\Support\Facades\Route;
use Cryptommer\Smsir\Smsir;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('logout', [LogoutController::class, 'logout'])->name('logout');
//Route::get('sms', function (){




Route::get('sms',function (){
    $to = array('09128522679');


//$userName=$_POST ['userName'];
//$password=$_POST ['password'];
//$lineNumber=$_POST ['lineNumber'];
//$to=$_POST ['Receiver'];
//$text=$_POST ['messageBody'];

    date_default_timezone_set('Asia/Tehran');
    $client= new SoapClient('http://ip.sms.ir/ws/SendReceive.asmx?wsdl');

    $parameters['userName'] = "9128522679";
    $parameters['password'] = "zzzz1372";
    $parameters['mobileNos'] = array(doubleval($to));
    $parameters['messages'] = array("php");
    $parameters['lineNumber'] = '30007732909416';
//$parameters['sendDateTime'] = date("Y-m-d")."T".date("H:i:s");
    print_r($client->SendMessageWithLineNumber($parameters));

});

Route::group(['middleware' => 'logPageView'], function () {
    
    
 
    
    
    
    Route::get('/', [LoginController::class, 'login'])->name('login');
Route::view('forms', 'admin.pages.forms2')->name('forms');

Route::view('/aboutUs', 'admin.pages.about')->name('aboutUs');
    Route::group(['prefix' => 'admin', 'middleware' => [Authenticate::class]], function () {
        Route::view('/contact', 'admin.pages.contact')->name('contact');
        Route::view('/help', 'admin.pages.help')->name('help');
    
        Route::get('/', [LoginController::class, 'checkLogin']);
        Route::view('dashboard', 'admin.pages.dashboard')->name('dashboard');
        Route::view('projects', 'admin.pages.projects.project-list')->name('projects');
        
            Route::view('projects/chats', 'admin.pages.projects.chats.chat')->name('projectsChats');
    
        Route::view('projects/edit/{id}', 'admin.pages.projects.edit-project')->name('editProject');
        Route::view('projects/tasks/{id}', 'admin.pages.projects.tasks.tasks-list')->name('projectTaskList');
        Route::view('projects/chats/{id}', 'admin.pages.projects.chats.chats-list')->name('projectChatList');
        Route::view('reports', 'admin.pages.reports.reports-list')->name('reports');
        Route::view('report/edit/{id}', 'admin.pages.reports.edit-report')->name('editReport');
        Route::view('reportDownload', 'admin.pages.reports.reportDownload-list')->name('reportDownload');
        Route::view('meetings', 'admin.pages.jalase.jalase-list')->name('meetings');
        Route::view('meetings/edit/{id}', 'admin.pages.jalase.edit-jalase')->name('editMeeting');
        Route::get('meetings/details/{id}', [JalaseController::class,'details'])->name('meetingDetails');
        Route::view('tasks', 'admin.pages.task.task-list')->name('tasks');
        Route::view('profile/{id}', 'admin.pages.user.edit-profile')->name('profile');
        Route::view('mosavabat/{jalaseId}', 'admin.pages.mosavabe.mosavabe-list')->name('mosavabat');
        Route::view('categories', 'admin.pages.categories.category-list')->name('categories');
        Route::view('chats', 'admin.pages.chats.chat-list')->name('chats');
        Route::view('chat/details/{id}', 'admin.pages.chats.chat-details')->name('chatDetails');
        Route::view('contactUs', 'admin.pages.contact.contact-list')->name('contactUs');
    
        Route::view('details/{jalaseId}', 'admin.pages.jalase.jalase-details')->name('details');
        
        Route::group(['prefix' => 'users'], function () {
            Route::view('list', 'admin.pages.user.users-list')->name('users');
            Route::view('edit/{id}', 'admin.pages.user.edit-user')->name('editUser');
            Route::view('create', 'admin.pages.user.create-user')->name('createUser');
            Route::view('access/{id}', 'admin.pages.user.users-access-manager')->name('userAccess');
        });

        Route::view('news', 'admin.pages.news.news-list')->name('news');
        Route::view('news/review', 'admin.pages.news.review.review-news-list')->name('newsReview');
    });
});






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


