<?php

use App\Models\Post;
use App\Models\User;
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
    Route::resource('post', PostController::class)->only([
    'index', 'create','show', 'store', 'edit', 'update', 'destroy'
    ]);
    // Route::get('/post', [PostController::class, 'index'])->name('post');
    // Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
    // Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
    // Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
    // Route::put('/post/update/{id}', [PostController::class, 'update'])->name('post.update');
    // Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('post.destroy');
});

require __DIR__.'/auth.php';

//Route Community
Route::get('/community', function(){
    return view('community');
});

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
Route::get('/belajar/html/atribut',function(){
    return view('belajar.html.html-atribut');
});
Route::get('/belajar/html/heading',function(){
    return view('belajar.html.html-heading');
});
Route::get('/belajar/html/paragraf',function(){
    return view('belajar.html.html-paragraf');
});
Route::get('/belajar/html/styling',function(){
    return view('belajar.html.html-styling');
});
Route::get('/belajar/html/formatting',function(){
    return view('belajar.html.html-formatting');
});
Route::get('/belajar/html/quotation',function(){
    return view('belajar.html.html-quotation');
});
Route::get('/belajar/html/comment',function(){
    return view('belajar.html.html-comment');
});
Route::get('/belajar/html/color',function(){
    return view('belajar.html.html-color');
});
Route::get('/belajar/html/css',function(){
    return view('belajar.html.html-css');
});
Route::get('/belajar/html/link',function(){
    return view('belajar.html.html-link');
});
Route::get('/belajar/html/image',function(){
    return view('belajar.html.html-image');
});
Route::get('/belajar/html/favicon',function(){
    return view('belajar.html.html-favicon');
});
Route::get('/belajar/html/page-title',function(){
    return view('belajar.html.html-page-title');
});
Route::get('/belajar/html/block-inline',function(){
    return view('belajar.html.html-block-inline');
});
Route::get('/belajar/html/class',function(){
    return view('belajar.html.html-class');
});
Route::get('/belajar/html/id',function(){
    return view('belajar.html.html-id');
});
Route::get('/belajar/html/table',function(){
    return view('belajar.html.html-table');
});
Route::get('/belajar/html/table-border',function(){
    return view('belajar.html.html-table-border');
});
Route::get('/belajar/html/table-size',function(){
    return view('belajar.html.html-table-size');
});
Route::get('/belajar/html/table-header',function(){
    return view('belajar.html.html-table-header');
});
Route::get('/belajar/html/table-padding-spacing',function(){
    return view('belajar.html.html-table-padding-spacing');
});
Route::get('/belajar/html/table-colspan-rowspan',function(){
    return view('belajar.html.html-table-colspan-rowspan');
});
Route::get('/belajar/html/table-styling',function(){
    return view('belajar.html.html-table-styling');
});
Route::get('/belajar/html/table-colgroup',function(){
    return view('belajar.html.html-table-colgroup');
});
Route::get('/belajar/html/list',function(){
    return view('belajar.html.html-list');
});
Route::get('/belajar/html/unordered-list',function(){
    return view('belajar.html.html-unordered-list');
});
Route::get('/belajar/html/ordered-list',function(){
    return view('belajar.html.html-ordered-list');
});
Route::get('/belajar/html/other-list',function(){
    return view('belajar.html.html-other-list');
});
Route::get('/belajar/html/form',function(){
    return view('belajar.html.html-form');
});
Route::get('/belajar/html/form-atribut',function(){
    return view('belajar.html.html-form-atribut');
});
Route::get('/belajar/html/form-element',function(){
    return view('belajar.html.html-form-element');
});
Route::get('/belajar/html/input-type',function(){
    return view('belajar.html.html-input-type');
});
Route::get('/belajar/html/input-atribut',function(){
    return view('belajar.html.html-input-atribut');
});
Route::get('/belajar/html/input-form-atribut',function(){
    return view('belajar.html.html-input-form-atribut');
});

//Route Belajar CSS
Route::get('/belajar/css',function(){
    return view('belajar.css.index');
});
Route::get('/belajar/css/syntax',function(){
    return view('belajar.css.css-syntax');
});
Route::get('/belajar/css/selector',function(){
    return view('belajar.css.css-selector');
});
Route::get('/belajar/css/how-to',function(){
    return view('belajar.css.css-how-to');
});
Route::get('/belajar/css/comment',function(){
    return view('belajar.css.css-comment');
});
Route::get('/belajar/css/color',function(){
    return view('belajar.css.css-color');
});
Route::get('/belajar/css/margin',function(){
    return view('belajar.css.css-margin');
});
Route::get('/belajar/css/padding',function(){
    return view('belajar.css.css-padding');
});
Route::get('/belajar/css/dimensi',function(){
    return view('belajar.css.css-dimensi');
});
Route::get('/belajar/css/background-color',function(){
    return view('belajar.css.css-background-color');
});
Route::get('/belajar/css/background-image',function(){
    return view('belajar.css.css-background-image');
});
Route::get('/belajar/css/background-repeat',function(){
    return view('belajar.css.css-background-repeat');
});
Route::get('/belajar/css/background-attachment',function(){
    return view('belajar.css.css-background-attachment');
});
Route::get('/belajar/css/background-shorthand',function(){
    return view('belajar.css.css-background-shorthand');
});
Route::get('/belajar/css/border',function(){
    return view('belajar.css.css-border');
});
Route::get('/belajar/css/border-width',function(){
    return view('belajar.css.css-border-width');
});
Route::get('/belajar/css/border-color',function(){
    return view('belajar.css.css-border-color');
});
Route::get('/belajar/css/border-side',function(){
    return view('belajar.css.css-border-side');
});
Route::get('/belajar/css/border-shorthand',function(){
    return view('belajar.css.css-border-shorthand');
});
Route::get('/belajar/css/border-rounded',function(){
    return view('belajar.css.css-border-rounded');
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
Route::get('/kelas-mentor/html',[PostController::class,"indexUmum"])->name('indexUmum');
Route::get('/kelas-mentor/html/{post:id}',[PostController::class,"detailUmum"])->name('detailUmum');

//Route Kelas Mentor CSS
Route::get('/kelas-mentor/css',[PostController::class,"indexUmum"])->name('indexUmum');
Route::get('/kelas-mentor/css/{post:id}',[PostController::class,"detailUmum"])->name('detailUmum');

//Route Kelas Mentor PHP
Route::get('/kelas-mentor/php',[PostController::class,"indexUmum"])->name('indexUmum');
Route::get('/kelas-mentor/php/{post:id}',[PostController::class,"detailUmum"])->name('detailUmum');

//Route Kelas Mentor JS
Route::get('/kelas-mentor/js',[PostController::class,"indexUmum"])->name('indexUmum');
Route::get('/kelas-mentor/js/{post:id}',[PostController::class,"detailUmum"])->name('detailUmum');

//Route Kelas Mentor SQL
Route::get('/kelas-mentor/sql',[PostController::class,"indexUmum"])->name('indexUmum');
Route::get('/kelas-mentor/sql/{post:id}',[PostController::class,"detailUmum"])->name('detailUmum');

//Route Profile Mentor
Route::get('/mentor/{post:id_user}',[PostController::class,"profileMentor"])->name('profileMentor');
// Route::get('/mentor/{user:name}',function(User $user,Post $post){

// });
