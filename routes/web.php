<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Notes\CreateNote;
use App\Http\Livewire\Notes\IndexNotes;
use App\Http\Controllers\HomeController;
use Stancl\Tenancy\Middleware\InitializeTenancyByPath;

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



Route::group(['middleware' => [ 'auth:sanctum', config('jetstream.auth_session'), 'verified']], function(){


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('notes', IndexNotes::class)->name('notes.index');
    Route::get('notes/create', CreateNote::class)->name('notes.create');


});
