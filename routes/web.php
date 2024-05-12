<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});




use App\Http\Controllers\AuthController;
 
Route::get('/signup', [AuthController::class, 'signUp']);
Route::get('/signin', [AuthController::class, 'signIn']);
Route::get('/password-reset-option', [AuthController::class, 'passwordResetOption']);
Route::get('/password-reset-mobile', [AuthController::class, 'passwordResetMobile']);
Route::get('/password-reset-email', [AuthController::class, 'passwordResetEmail']);
Route::get('/otp-mobile', [AuthController::class, 'otpMobile']);
Route::get('/otp-email', [AuthController::class, 'otpEmail']);
Route::get('/password-change', [AuthController::class, 'passwordChange']);
Route::get('/success-message', [AuthController::class, 'successMessage']);
Route::get('/screenLock', [AuthController::class, 'screenLock']);
Route::get('/logout', [AuthController::class, 'logout']);





use App\Http\Controllers\ProfileController;
use App\Http\Middleware\TokenVerificationMiddleware;
Route::get('/profile', [ProfileController::class, 'profile']);
Route::get('/edit-profile', [ProfileController::class, 'editProfile']);











//User Authentication API Route
Route::post('/user-registration', [AuthController::class,'UserRegistration']);
Route::post('/user-login', [AuthController::class,'UserLogin']);
Route::get('/user-logout', [AuthController::class,'UserLogout'])->middleware(TokenVerificationMiddleware::class);
Route::post('/send-OTP', [AuthController::class,'SendOTPCode']);
Route::post('/verify-OTP', [AuthController::class,'VerifyOTP']);
Route::post('/reset-password', [AuthController::class,'ResetPassword'])->middleware(TokenVerificationMiddleware::class);

//user profile and profile update API Route
Route::get('/user-profile', [AuthController::class,'UserProfile'])->middleware(TokenVerificationMiddleware::class);
Route::post('/update-profile', [AuthController::class,'UpdateProfile'])->middleware(TokenVerificationMiddleware::class);
