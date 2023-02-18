<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard\IndexDashboardController;
use App\Http\Controllers\Dashboard\UserDashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Dashboard\BlogDashboardController;
use App\Http\Controllers\Dashboard\VideoDashboardController;
use App\Http\Controllers\Dashboard\PodcastDashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix'=>'login'],function (){

    Route::get('/',[AuthController::class,"getLoginView"])->name('login');
    Route::post('/',[AuthController::class,"doLogin"]);
});

Route::group(['prefix'=>'/admin_login'],function (){
    Route::get('/',[IndexDashboardController::class,"admin_getLoginView"])->name('admin_login');
    Route::post('/',[IndexDashboardController::class,"admin_doLogin"]);
});

Route::group(['prefix'=>'register'],function (){

    Route::get('/',[AuthController::class,"getRegisterView"]);
    Route::post('/',[AuthController::class,"doRegister"])->name('users');
});

Route::get('logout',[AuthController::class,"doLogout"]);

Route::group(['prefix'=>'profile','middleware'=>'auth','middleware'=>'isUser'],function (){
    Route::get('/',[ProfileController::class,"getprofileView"]);
    Route::post('/update', [ProfileController::class,'update'])->name('profile.update');
});



Route::group(['prefix'=>'/admin','middleware'=>'isAdmin'],function (){
    Route::get('/editadmins',[UserDashboardController::class,"index"])->name('editadmins');
    Route::get('/edit_admin//{id}',[IndexDashboardController::class,"admin_editview"])->name('edit_admin');
    Route::post('/edit_admin/{id}',[IndexDashboardController::class,"admin_update"])->name('edit_admin');
    Route::delete('delete_admin/{id}', [IndexDashboardController::class, 'delete_admin'])->name('delete_admin');
    Route::get('/addadmin',[IndexDashboardController::class,"addadminview"])->name('addadmin');
    Route::post('/addadmin',[IndexDashboardController::class,"DoAdd_admin"])->name('addadmin');

    Route::get('/dashboard',[IndexDashboardController::class,"index"])->name('dashboard');
    Route::get('/logout',[IndexDashboardController::class,"doLogout"])->name('logout');
});
Route::group(['prefix'=>'/admin','middleware'=>'isAdmin'],function (){
    Route::get('/editblogs',[BlogDashboardController::class,"viewblogs"])->name('editblogs');
    Route::get('/edit_blog/{id}', [BlogDashboardController::class, 'editblog'])->name('edit_blog');
    Route::post('/edit_blog/{id}',[BlogDashboardController::class,"blog_update"])->name('edit_blog');
    Route::delete('delete_blog/{id}', [BlogDashboardController::class, 'delete_blog'])->name('delete_blog');
    Route::get('/addblog',[BlogDashboardController::class,"addblogview"])->name('blogs');
    Route::post('/addblog',[BlogDashboardController::class,"DoAdd_blog"])->name('blogs');
});
Route::group(['prefix'=>'/admin','middleware'=>'isAdmin'],function (){
    Route::get('/editpodcasts',[PodcastDashboardController::class,"viewpodcasts"])->name('editpodcasts');
    Route::get('/edit_podcast/{id}', [PodcastDashboardController::class, 'editpodcast'])->name('edit_podcast');
    Route::post('/edit_podcast/{id}',[PodcastDashboardController::class,"podcast_update"])->name('edit_podcast');
    Route::delete('delete_podcast/{id}', [PodcastDashboardController::class, 'delete_podcast'])->name('delete_podcast');
    Route::get('/addpodcast',[PodcastDashboardController::class,"addpodcastview"])->name('podcasts');
    Route::post('/addpodcast',[PodcastDashboardController::class,"DoAdd_podcast"])->name('podcasts');
});

Route::group(['prefix'=>'/admin','middleware'=>'isAdmin'],function (){
    Route::get('/editvideos',[VideoDashboardController::class,"viewvideos"])->name('editvideos');
    Route::get('/edit_video/{id}', [VideoDashboardController::class, 'editvideo'])->name('edit_video');
    Route::post('/edit_video/{id}',[VideoDashboardController::class,"video_update"])->name('edit_video');
    Route::post('/edit_video',[VideoDashboardController::class,"editvideoview"])->name('edit_video');
    Route::delete('delete_video/{id}', [VideoDashboardController::class, 'delete_video'])->name('delete_video');
    Route::get('/addvideo',[VideoDashboardController::class,"addvideoview"])->name('videos');
    Route::post('/addvideo',[VideoDashboardController::class,"DoAdd_video"])->name('videos');
});

Route::group(['prefix'=>'/users','middleware'=>'isAdmin'],function (){
    Route::get('/',[UserDashboardController::class,"index"]);

});

Route::group(['prefix'=>'/index','middleware'=>'isAdmin'],function (){
    Route::get('/',[UserDashboardController::class,"index"]);

});

Route::group(['prefix'=>'home','middleware'=>'auth','middleware'=>'isUser'],function (){
    Route::get('/',[HomeController::class,"HomeView"]);
});


Route::group(['prefix'=>'video','middleware'=>'auth','middleware'=>'isUser'],function (){
    Route::get('/',[VideoController::class,"VideoView"]);
});

Route::group(['prefix'=>'podcast','middleware'=>'auth','middleware'=>'isUser'],function (){
    Route::get('/',[PodcastController::class,"PodcastView"]);
});
Route::group(['prefix'=>'blog','middleware'=>'auth','middleware'=>'isUser'],function (){
    Route::get('/',[BlogController::class,"BlogView"]);
});
