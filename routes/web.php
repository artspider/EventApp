<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Event\Show;
use App\Http\Livewire\Event\Showone;
use App\Http\Livewire\Event\Create;
use App\Http\Livewire\Event\Registrar;
use App\Http\Livewire\Panelista\Panelistashow;
use App\Http\Livewire\Panelista\Panelistascreate;
use App\Http\Livewire\Panelista\PanelistasEdit;
use App\Http\Livewire\Presentacion\PresentacionesCreate;
use App\Http\Livewire\Presentacion\Pdashboard;
use App\Http\Livewire\Presentacion\Checkin;
use App\Http\Livewire\Firebase\UsersGet;

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

Route::get('/home', function () {
    return redirect()->away('https://dsc.itiguala.edu.mx/cat/');
})->middleware(['auth'])->name('home');

Route::get('/dashboard', function () {
    return view('app-dashboard');
})->middleware(['auth'])->name('app-dashboard');

Route::get('/eventos', Show::class)
->middleware(['auth'])->name('eventos');

Route::get('/create-event', Create::class)
->middleware(['auth'])->name('eventos-create');

Route::get('/eventos/{id}', Showone::class)
->middleware(['auth'])->name('eventos-showone');

Route::get('/evento-registrar/{id}', Registrar::class)
->middleware(['auth'])->name('evento-registrar');
/* 
Route::get('/presentaciones', function () {
    return view('presentaciones.presentaciones-main');
})->middleware(['auth'])->name('presentaciones'); */

Route::get('/presentaciones', Pdashboard::class)
->middleware(['auth'])->name('presentaciones');

Route::get('/presentacion-checkin/{id}', Checkin::class)
->middleware(['auth'])->name('presentacion-checkin');

Route::get('/presentaciones-create', Presentacionescreate::class)
->middleware(['auth'])->name('presentaciones-create');


Route::get('/panelistas', function () {
    return view('panelistas.panelistas-main');
})->middleware(['auth'])->name('panelistas');

Route::get('/panelistas/show', Panelistashow::class)
->middleware(['auth'])->name('panelistas-show');

Route::get('/panelistas/create', Panelistascreate::class)
->middleware(['auth'])->name('panelistas-create');

Route::get('/panelistas-edit', PanelistasEdit::class)
->middleware(['auth'])->name('panelistas-edit');

Route::get('/firestore-get', UsersGet::class)
->middleware(['auth'])->name('firestore-get');



require __DIR__.'/auth.php';
