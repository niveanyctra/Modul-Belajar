<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;

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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Post
    Route::get('/post', [PostController::class, 'index'])->name('post');
    Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
    Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
    Route::put('/post/{id}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('post.destroy');
});

require __DIR__.'/auth.php';

// Route::resource('guru', GuruController::class)->only([
//     'index', 'create', 'store', 'edit', 'update', 'destroy'
// ]);

//Route Belajar HTML
Route::get('/belajar/html',function(){
    return view('belajar.html.index');
});
Route::get('/belajar/html/dasar',function(){
    return view('belajar.html.html-dasar');
});
Route::get('/belajar/html/element',function(){
    return view('belajar.html.html-element');
});
Route::get('/belajar/html/styling',function(){
    return view('belajar.html.html-styling');
});

//Route Belajar CSS
Route::get('/belajar/css',function(){
    return view('belajar.css.index');
});

//Route Belajar PHP
Route::get('/belajar/php',function(){
    return view('belajar.php.index');
});
Route::get('/belajar/php/dasar',function(){
    return view('belajar.php.php-dasar');
});

//Route Belajar JS
Route::get('/belajar/js',function(){
    return view('belajar.js.index');
});
Route::get('belajar/js/dasar',function(){
    return view('belajar.js.js-dasar');
});

//Route Belajar SQL
Route::get('/belajar/sql',function(){
    return view('belajar.sql.index');
});
Route::get('belajar/sql/dasar',function(){
    return view('belajar.sql.sql-dasar');
});

//Route Alur Belajar
Route::get('/alur-belajar/front-end', function(){
    return view('alur-belajar.front-end.index');
});
Route::get('/alur-belajar/back-end', function(){
    return view('alur-belajar.back-end.index');
});
Route::get('/alur-belajar/mobile-app-dev', function(){
    return view('alur-belajar.mobile-app-dev.index');
});

//Route Latihan HTML
Route::get('/latihan/html',function(){
    return view('latihan.html.index');
});

//Route Latihan CSS
Route::get('/latihan/css',function(){
    return view('latihan.css.index');
});

//Route Latihan SQL
Route::get('/latihan/sql',function(){
    return view('latihan.sql.index');
});

//Route Latihan JS
Route::get('/latihan/js',function(){
    return view('latihan.js.index');
});

//Route Latihan PHP
Route::get('/latihan/php',function(){
    return view('latihan.php.index');
});

//Route Kelas Mentor HTML
Route::get('/kelas-mentor/html',[PostController::class,"indexHTML"])->name('indexHTML');
Route::get('/kelas-mentor/html/{post:id}',[PostController::class,"detailHTML"])->name('detailHTML');

//Route Kelas Mentor CSS
Route::get('/kelas-mentor/css',[PostController::class,"indexCSS"])->name('indexCSS');
Route::get('/kelas-mentor/css/{post:id}',[PostController::class,"detailCSS"])->name('detailCSS');

//Route Kelas Mentor PHP
Route::get('/kelas-mentor/php',[PostController::class,"indexPHP"])->name('indexPHP');
Route::get('/kelas-mentor/php/{post:id}',[PostController::class,"detailPHP"])->name('detailPHP');

//Route Kelas Mentor JS
Route::get('/kelas-mentor/js',[PostController::class,"indexJS"])->name('indexJS');
Route::get('/kelas-mentor/js/{post:id}',[PostController::class,"detailJS"])->name('detailJS');

//Route Kelas Mentor SQL
Route::get('/kelas-mentor/sql',[PostController::class,"indexSQL"])->name('indexSQL');
Route::get('/kelas-mentor/sql/{post:id}',[PostController::class,"detailSQL"])->name('detailSQL');
