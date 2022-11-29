<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return redirect()->route('app.home');
})->name('home');


Route::group(['prefix' => 'dashboard', 'as' => 'app.', 'middleware' => ['web','auth']], function () {

    Route::get('home', function () {
        return view('pages.dashboard');
    })->name('home');

    Route::get('user', function () {
        return view('pages.user');
    })->name('user');
});


Route::group(['prefix' => 'authentication', 'as' => 'auth.', 'middleware' => 'web'], function () {

    Route::post('logout', function () {
        Illuminate\Support\Facades\Auth::logout();
        return redirect()->route('login');
    })->name('logout');
});

Route::group(['prefix' => 'authentication','middleware' => 'guest'], function () {

  Route::get('login', App\Http\Livewire\Authentication\Login\SimpleLoginComponent::class)->name('login');

});
