<?php

use App\Http\Livewire\Notes\ShowNote;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Notes\StudyMode;
use App\Http\Livewire\Notes\CreateNote;
use App\Http\Livewire\Notes\IndexNotes;
use App\Http\Livewire\Notes\NoteEditor;
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
    Route::get('notes/create', NoteEditor::class)->name('notes.create');
    Route::get('notes/{uuid}/edit', NoteEditor::class)->name('notes.edit');
    Route::get('notes/{uuid}', ShowNote::class)->name('notes.show');
    Route::get('notes/{uuid}/study', StudyMode::class)->name('notes.study');


});
