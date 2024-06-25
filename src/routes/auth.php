<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\ConfirmablePasswordController;
use Laravel\Fortify\Http\Controllers\EmailVerificationNotificationController;
use Laravel\Fortify\Http\Controllers\EmailVerificationPromptController;
use Laravel\Fortify\Http\Controllers\NewPasswordController;
use Laravel\Fortify\Http\Controllers\PasswordResetLinkController;

use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use Laravel\Fortify\Http\Controllers\VerifyEmailController;

Route::group(['middleware' => ['guest']], function () {
	Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
	// 	// ログインフォームを表示するためのメソッドです。
	Route::post('login', [AuthenticatedSessionController::class, 'store']);
	// LoginRequestによるリクエストのバリデーションを行います。
	// 認証を試みます。認証が成功すると、ユーザーセッションが再生成され、ユーザーが保護されたリソースにリダイレクトされます。
	// 失敗した場合は、バリデーションエラーが発生し、ログインページに戻ります。
	Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
	Route::post('register', [RegisteredUserController::class, 'store'])->name('register');

	Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
	Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
	Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
	Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.update');
});

Route::group(['middleware' => ['auth']], function () {
	Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])->name('verification.notice');
	Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])->middleware(['signed', 'throttle:6,1'])->name('verification.verify');
	Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])->middleware(['throttle:6,1'])->name('verification.send');
	Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
	Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

	Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
	// 現在のユーザーをログアウトします。セッションを無効化し、セッショントークンを再生成します。
	// ログアウト後はホームページ（'/'）にリダイレクトされます。
});
