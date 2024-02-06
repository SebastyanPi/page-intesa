<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;  

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

Route::get('/', [PageController::class, 'Welcome'])->name('pages.welcome');
Route::get('/quienes-somos', [PageController::class, 'Quienes_Somos'])->name('pages.quienes_somos');
Route::get('/mision-vision', [PageController::class, 'Mision_Vision'])->name('pages.mision_vision');
Route::get('/legalidad', [PageController::class, 'Legalidad'])->name('pages.legalidad');
Route::get('/convenios', [PageController::class, 'Convenios'])->name('pages.convenios');
Route::get('/contactos', [PageController::class, 'Contactos'])->name('pages.contactos');
Route::get('/historia', [PageController::class, 'Historia'])->name('pages.historia');
Route::get('/programa-presencial/tecnicos-laborales', [PageController::class, 'Tecnico_Presencial'])->name('pages.presencial.tecnico');
Route::get('/programa-presencial/certficaciones', [PageController::class, 'Curso_Presencial'])->name('pages.presencial.curso');
Route::get('/programa-presencial/diplomados', [PageController::class, 'Diplomados'])->name('pages.presencial.diplomados');
Route::get('/programa-presencial/seminarios', [PageController::class, 'Seminarios'])->name('pages.presencial.seminarios');
Route::get('/programa-presencial/cursos-cortos', [PageController::class, 'Cursos_Cortos'])->name('pages.presencial.cortos');
Route::get('/programa-presencial/tecnicos-laborales/aux-admin', [PageController::class, 'AuxAdmin'])->name('pages.presencial.tecnico.auxadmin');
Route::get('/programa-presencial/tecnicos-laborales/aux-infancia', [PageController::class, 'AuxInfancia'])->name('pages.presencial.tecnico.auxinfancia');
Route::get('/programa-presencial/tecnicos-laborales/seguridad', [PageController::class, 'Seguridad'])->name('pages.presencial.tecnico.seguridad');
Route::get('/programa-presencial/tecnicos-laborales/mecanica', [PageController::class, 'Mecanica'])->name('pages.presencial.tecnico.mecanica');
Route::get('/programa-presencial/tecnicos-laborales/operador', [PageController::class, 'Operador'])->name('pages.presencial.tecnico.operador');


Route::get('/modalidad-virtual', [PageController::class, 'Virtual'])->name('pages.virtual');
Route::get('/modalidad-virtual/aux-admin', [PageController::class, 'Virtual_auxadmin'])->name('pages.virtual.auxadmin');
Route::get('/modalidad-virtual/aux-infancia', [PageController::class, 'Virtual_auxinfancia'])->name('pages.virtual.auxinfancia');
Route::get('/modalidad-virtual/seguridad', [PageController::class, 'Virtual_seguridad'])->name('pages.virtual.seguridad');