<?php

use App\Http\Controllers\Inicios;
use App\Http\Controllers\Nosotros;
use App\Http\Controllers\Noticias;
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

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {

    ////
    ///
    // VISTAS DE LOS 3 PAGINAS DEL MENU (RUTA DASHBOARD ESTA INACTIVA, SIN USO)

    Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard');

    Route::get('/livewire/inicio', [Inicios::class, 'inicio'])->name('livewire.inicio');

    Route::get('/livewire/nosotros', [Nosotros::class, 'nosotros'])->name('livewire.nosotros');

    Route::get('/livewire/noticias', [Noticias::class, 'noticias'])->name('livewire.noticias');


    ////
    ///
    // VISTAS DENTRO DE PAGINA NOTICIAS

    Route::get('/noticiaslivewire/noticia1', [Noticias::class, 'noticia1'])->name('noticiaslivewire.noticia1');

    Route::get('/noticiaslivewire/noticia2', [Noticias::class, 'noticia2'])->name('noticiaslivewire.noticia2');

    Route::get('/noticiaslivewire/noticia3', [Noticias::class, 'noticia3'])->name('noticiaslivewire.noticia3');

    Route::get('/noticiaslivewire/noticia4', [Noticias::class, 'noticia4'])->name('noticiaslivewire.noticia4');

    Route::get('/noticiaslivewire/noticia5', [Noticias::class, 'noticia5'])->name('noticiaslivewire.noticia5');

    Route::get('/noticiaslivewire/noticia6', [Noticias::class, 'noticia6'])->name('noticiaslivewire.noticia6');

    Route::get('/noticiaslivewire/noticia7', [Noticias::class, 'noticia7'])->name('noticiaslivewire.noticia7');

    Route::get('/noticiaslivewire/noticia8', [Noticias::class, 'noticia8'])->name('noticiaslivewire.noticia8');

    Route::get('/noticiaslivewire/noticia9', [Noticias::class, 'noticia9'])->name('noticiaslivewire.noticia9');


    ////
    ///
    // VISTAS DENTRO DE PAGINA INICIO, EN BLOQUES SEGUN EL AREA

    Route::get('/iniciobloques/finanzas', [Inicios::class, 'finanzas'])->name('iniciobloques.finanzas');

    Route::get('/iniciobloques/farmacia', [Inicios::class, 'farmacia'])->name('iniciobloques.farmacia');

    Route::get('/iniciobloques/corporativo', [Inicios::class, 'corporativo'])->name('iniciobloques.corporativo');

    Route::get('/iniciobloques/centros', [Inicios::class, 'centros'])->name('iniciobloques.centros');

    Route::get('/iniciobloques/finanzas', [Inicios::class, 'finanzas'])->name('iniciobloques.finanzas');

    Route::get('/iniciobloques/vivienda', [Inicios::class, 'viviendas'])->name('iniciobloques.vivienda');

    Route::get('/iniciobloques/convenios', [Inicios::class, 'convenios'])->name('iniciobloques.convenios');

    Route::get('/iniciobloques/club', [Inicios::class, 'club'])->name('iniciobloques.club');

    Route::get('/iniciobloques/socios', [Inicios::class, 'socios'])->name('iniciobloques.socios');

    Route::get('/iniciobloques/estetica', [Inicios::class, 'estetica'])->name('iniciobloques.estetica');

    Route::get('/iniciobloques/valegas', [Inicios::class, 'valegas'])->name('iniciobloques.valegas');

    Route::get('/iniciobloques/anexos', [Inicios::class, 'anexos'])->name('iniciobloques.anexos');

    Route::get('/iniciobloques/documentos', [Inicios::class, 'documentos'])->name('iniciobloques.documentos');


    ////
    ///
    // VISTAS DENTRO DE PAGINA CENTROS RECREACIONALES, EN EL DETALLE SEGUN EL CENTRO RECREACIONAL

    Route::get('iniciobloques.insidebloques.centros.tongoy', [Inicios::class, 'tongoy'])->name('centros.tongoy');

    Route::get('iniciobloques.insidebloques.centros.cascabeles', [Inicios::class, 'cascabeles'])->name('centros.cascabeles');

    Route::get('iniciobloques.insidebloques.centros.casona', [Inicios::class, 'casona'])->name('centros.casona');

    Route::get('iniciobloques.insidebloques.centros.walung', [Inicios::class, 'walung'])->name('centros.walung');

    Route::get('iniciobloques.insidebloques.centros.mirador', [Inicios::class, 'mirador'])->name('centros.mirador');

    Route::get('iniciobloques.insidebloques.centros.pelancura', [Inicios::class, 'pelancura'])->name('centros.pelancura');

    Route::get('iniciobloques.insidebloques.centros.olmue', [Inicios::class, 'olmue'])->name('centros.olmue');

    Route::get('iniciobloques.insidebloques.centros.sansebastian', [Inicios::class, 'sansebastian'])->name('centros.sansebastian');

    Route::get('iniciobloques.insidebloques.centros.clubcampo', [Inicios::class, 'clubcampo'])->name('centros.clubcampo');

    Route::get('iniciobloques.insidebloques.centros.baita', [Inicios::class, 'baita'])->name('centros.baita');

    Route::get('iniciobloques.insidebloques.centros.peumayen', [Inicios::class, 'peumayen'])->name('centros.peumayen');

    Route::get('iniciobloques.insidebloques.centros.licanray', [Inicios::class, 'licanray'])->name('centros.licanray');

    Route::get('iniciobloques.insidebloques.centros.nevados', [Inicios::class, 'nevados'])->name('centros.nevados');


    ////
    ///
    // VISTAS DENTRO DE PAGINA CENTROS RECREACIONALES, EN EL DETALLE SEGUN EL CONVENIO

    Route::get('iniciobloques.insidebloques.convenios.salud', [Inicios::class, 'salud'])->name('convenios.salud');

    Route::get('iniciobloques.insidebloques.convenios.hogar', [Inicios::class, 'hogar'])->name('convenios.hogar');

    Route::get('iniciobloques.insidebloques.convenios.vestuario', [Inicios::class, 'vestuario'])->name('convenios.vestuario');

    Route::get('iniciobloques.insidebloques.convenios.deporte', [Inicios::class, 'deporte'])->name('convenios.deporte');

    Route::get('iniciobloques.insidebloques.convenios.turismo', [Inicios::class, 'turismo'])->name('convenios.turismo');

    Route::get('iniciobloques.insidebloques.convenios.finanzas', [Inicios::class, 'finanza'])->name('convenios.finanzas');

    Route::get('iniciobloques.insidebloques.convenios.educacion', [Inicios::class, 'educacion'])->name('convenios.educacion');

    Route::get('iniciobloques.insidebloques.convenios.automotriz', [Inicios::class, 'automotriz'])->name('convenios.automotriz');

    Route::get('iniciobloques.insidebloques.convenios.funerarias', [Inicios::class, 'funerarias'])->name('convenios.funerarias');

    Route::get('iniciobloques.insidebloques.convenios.perfumeria', [Inicios::class, 'perfumeria'])->name('convenios.perfumeria');

    Route::get('iniciobloques.insidebloques.convenios.servicios', [Inicios::class, 'servicios'])->name('convenios.servicios');

    Route::get('iniciobloques.insidebloques.convenios.entretencion', [Inicios::class, 'entretencion'])->name('convenios.entretencion');


    // RETORNO DEL DETALLE DE PRECIOS EN BLOQUE CENTRO DE ESTETICA
    Route::get('iniciobloques.insidebloques.estetica.precios', [Inicios::class, 'esteticas'])->name('estetica.precios');


});

