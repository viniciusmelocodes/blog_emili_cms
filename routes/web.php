<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\EbookDownloadController;
use App\Http\Controllers\LeadController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', [BlogController::class, 'index']);
Route::get('/operacao_cakes', function () {
    return redirect()->away('https://lp.egoi.page/1e2e5aCS/OperacaoCakes');
});

Route::get('/curso_bolo_gelado', function () {
    return view('pagina-vendas.index');
});

Route::prefix('receitas-doces')->group(function () {
    Route::get('/', [LeadController::class, 'index']);
    Route::post('/liberarebook', [LeadController::class, 'liberarEbook'])->name('lead_liberar_ebook');
    Route::post('/liberarebooknovamente', [LeadController::class, 'liberarEbookNovamente'])->name('lead_liberar_ebook_novamente');
    Route::get('/meuebook/{email}', [EbookDownloadController::class, 'fazerDownload'])->name('lead_fazer_download_meu_ebook');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

require __DIR__.'/auth.php';