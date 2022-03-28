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
    return redirect('/login');
});

Route::group(['prefix' => 'contact'], function(){
    Route::get('/', \App\Http\Livewire\Contact\Index::class)->name('contact.index');
    Route::get('create', \App\Http\Livewire\Contact\Create::class)->name('contact.create');
    Route::get('edit/{contact}', \App\Http\Livewire\Contact\Edit::class)->name('contact.edit');
    Route::get('show/{contact}', \App\Http\Livewire\Contact\Detail::class)->name('contact.detail');

});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
