<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::middleware(['auth'])->group(function () {

    Route::middleware(['adminCheck'])->group(function (){
        
        Route::get('/members', [AdminController::class, 'setViewMembers'])->name('members');
        Route::delete('/members/{id}', [AdminController::class, 'destroyUser'])->name('deleteUser');
    
        Route::get('/speakers', [AdminController::class, 'setViewSpeakers'])->name('speakers');
        Route::post('/speakers', [AdminController::class, 'addSpeakers'])->name('addSpeakers');
        
        Route::get('/edit-speaker', [AdminController::class, 'setViewEditSpeaker'])->name('edit-speaker');
        
        Route::put('/edit-speaker/{id}', [AdminController::class, 'updateSpeaker'])->name('editSpeaker');
        Route::delete('/delete-speaker/{id}', [AdminController::class, 'destroySpeaker'])->name('deleteSpeaker');
        
        Route::get('/events', [AdminController::class, 'setViewEvents'])->name('events');
        Route::post('/events', [AdminController::class, 'addEvent'])->name('addEvent');
        
        Route::get('/edit-event', [AdminController::class, 'setViewEditEvent'])->name('editEventView');
    
        Route::put('/edit-event/{id}', [AdminController::class, 'editEvent'])->name('editEvent');
        Route::delete('/edit-event/{id}', [AdminController::class, 'destroyEvent'])->name('deleteEvent');

    });

    Route::get('/dashboard', [AdminController::class, 'setViewDashboard'])->name('dashboard');
    
    Route::get('/edit-profile', [AdminController::class, 'setViewEditProfile'])->name('editProfile');
    Route::post('/edit-profile', [AdminController::class, 'editProfile'])->name('editProfile');

    Route::get('/change-password', [AdminController::class, 'setViewChangePass'])->name('changePass');
    Route::post('/change-password', [AdminController::class, 'changePass'])->name('changePass');
    
    Route::get('/profile', [AdminController::class, 'setViewProfile'])->name('profile');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});


Route::middleware(['guest'])->group(function () {

    Route::get('/login', [AuthController::class, 'setViewLogin'])->name('login');
    Route::get('/register', [AuthController::class, 'setViewRegister'])->name('register');

    Route::post('/register', [AuthController::class, 'register'])->name('register');

    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

    Route::get('/auth/google',[AuthController::class, 'redirectToGoogle'])->name('google.redirect');
    Route::get('/auth/google/callback',[AuthController::class, 'handleGoogleCallback']);

    Route::get('/otp', [AuthController::class, 'showOtpForm'])->name('otp.form');
    Route::post('/otp', [AuthController::class, 'verifyOtp'])->name('otp.verify');




});



Route::get('/', function () {

    return redirect(route('home'));

});

Route::get('/home', [HomeController::class, 'setViewHome'])->name('home');
Route::get('/become-our-sponsor', [HomeController::class, 'setViewBecomeSponsor'])->name('becomeSponsor');
Route::get('/event', [HomeController::class, 'setViewEventSlug'])->name('detailEvent');

Route::post('/send-mail', [HomeController::class, 'sendMail'])->name('sendMail');








