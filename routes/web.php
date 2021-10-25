<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\EbookDownloadController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [BlogController::class, 'index']);

Route::get('/sobre-emili', function () {
    return view('blog.sobre-emili.sobre-emili', [
        'titlePageNavigator' => 'Sobre Emili | ' . env('APP_NAME'),
    ]);
});

Route::get('/fazer-encomenda', function () {
    return view('blog.fazer-encomenda.fazer-encomenda', [
        'titlePageNavigator' => 'Fazer encomenda | ' . env('APP_NAME'),
    ]);
});

Route::get('/aprenda-com-a-emili', function () {
    return view('blog.aprenda-com-a-emili.aprenda-com-a-emili', [
        'titlePageNavigator' => 'Aprenda com a Emili | ' . env('APP_NAME'),
    ]);
});

Route::post('/enviar-pedido', [BlogController::class, 'sendEncomendaEmili'])->name('enviar-pedido-encomenda');

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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        $countPostsActives = Post::getCountPostsActives();

        return view('dashboard', [
            'countPostsActives' => $countPostsActives,
        ]);
    })->name('dashboard');

    Route::prefix('postagens')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('post-index');
        Route::get('/create', [PostController::class, 'create'])->name('post-create');
        Route::get('/edit/{postId}', [PostController::class, 'edit'])->name('post-edit');
        Route::post('/store', [PostController::class, 'store'])->name('post-store');
        Route::put('/update/{postId}', [PostController::class, 'update'])->name('post-update');
        Route::get('/desativar', [PostController::class, 'desativarPostagem'])->name('post-desativar');
    });
});

Route::get('/{slug}', [BlogController::class, 'getPostagem']);

require __DIR__ . '/auth.php';
