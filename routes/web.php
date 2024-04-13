<?php
use \App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class, 'main'])->name('main');
Route::get('/login',[PageController::class, 'loginForm'])->name('login');
Route::post('/login',[PageController::class, 'login']);
Route::get('/logout', [ PageController::class, 'logout' ])->name('logout');
Route::post('/registration',[PageController::class, 'registration']);
Route::get('/registration',[PageController::class, 'registrationForm'])->name('registration');
Route::middleware('auth')
    ->get('/admin', [PageController::class, 'admin'])
    ->name('admin');
