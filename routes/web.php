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
//End Route Belajar HTML

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
//End Route Belajar CSS

//Route Belajar PHP
Route::get('/belajar/php',function(){
    return view('belajar.php.index');
});
Route::get('/belajar/php/syntax',function(){
    return view('belajar.php.php-syntax');
});
Route::get('/belajar/php/comment',function(){
    return view('belajar.php.php-comment');
});
Route::get('/belajar/php/variable',function(){
    return view('belajar.php.php-variable');
});
Route::get('/belajar/php/echo-print',function(){
    return view('belajar.php.php-echo-print');
});
Route::get('/belajar/php/data-type',function(){
    return view('belajar.php.php-data-type');
});
Route::get('/belajar/php/string',function(){
    return view('belajar.php.php-string');
});
Route::get('/belajar/php/number',function(){
    return view('belajar.php.php-number');
});
Route::get('/belajar/php/math',function(){
    return view('belajar.php.php-math');
});
Route::get('/belajar/php/constant',function(){
    return view('belajar.php.php-constant');
});
Route::get('/belajar/php/operator',function(){
    return view('belajar.php.php-operator');
});
Route::get('/belajar/php/if-else',function(){
    return view('belajar.php.php-if-else');
});
Route::get('/belajar/php/switch',function(){
    return view('belajar.php.php-switch');
});
Route::get('/belajar/php/function',function(){
    return view('belajar.php.php-function');
});
Route::get('/belajar/php/loop',function(){
    return view('belajar.php.php-loop');
});
Route::get('/belajar/php/while-loop',function(){
    return view('belajar.php.php-while-loop');
});
Route::get('/belajar/php/do-while-loop',function(){
    return view('belajar.php.php-do-while-loop');
});
Route::get('/belajar/php/for-loop',function(){
    return view('belajar.php.php-for-loop');
});
Route::get('/belajar/php/foreach-loop',function(){
    return view('belajar.php.php-foreach-loop');
});
Route::get('/belajar/php/break-continue',function(){
    return view('belajar.php.php-break-continue');
});

//Route Belajar JS
Route::get('/belajar/js',function(){
    return view('belajar.js.index');
});
Route::get('belajar/js/where-to',function(){
    return view('belajar.js.js-where-to');
});
Route::get('belajar/js/output',function(){
    return view('belajar.js.js-output');
});
Route::get('belajar/js/statement',function(){
    return view('belajar.js.js-statement');
});
Route::get('belajar/js/syntax',function(){
    return view('belajar.js.js-syntax');
});
Route::get('belajar/js/comment',function(){
    return view('belajar.js.js-comment');
});
Route::get('belajar/js/variable',function(){
    return view('belajar.js.js-variable');
});
Route::get('belajar/js/let',function(){
    return view('belajar.js.js-let');
});
Route::get('belajar/js/const',function(){
    return view('belajar.js.js-const');
});
Route::get('belajar/js/operator',function(){
    return view('belajar.js.js-operator');
});
Route::get('belajar/js/arithmetic',function(){
    return view('belajar.js.js-arithmetic');
});
Route::get('belajar/js/assignment',function(){
    return view('belajar.js.js-assignment');
});
Route::get('belajar/js/data-type',function(){
    return view('belajar.js.js-data-type');
});
Route::get('belajar/js/function',function(){
    return view('belajar.js.js-function');
});
Route::get('belajar/js/objec',function(){
    return view('belajar.js.js-objec');
});
Route::get('belajar/js/event',function(){
    return view('belajar.js.js-event');
});

//Route Belajar SQL
Route::get('/belajar/sql',function(){
    return view('belajar.sql.index');
});
Route::get('belajar/sql/syntax',function(){
    return view('belajar.sql.sql-syntax');
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
Route::get('/kelas-mentor/html/{post:slug}',[PostController::class,"detailUmum"])->name('detailUmum');

//Route Kelas Mentor CSS
Route::get('/kelas-mentor/css',[PostController::class,"indexUmum"])->name('indexUmum');
Route::get('/kelas-mentor/css/{post:slug}',[PostController::class,"detailUmum"])->name('detailUmum');

//Route Kelas Mentor PHP
Route::get('/kelas-mentor/php',[PostController::class,"indexUmum"])->name('indexUmum');
Route::get('/kelas-mentor/php/{post:slug}',[PostController::class,"detailUmum"])->name('detailUmum');

//Route Kelas Mentor JS
Route::get('/kelas-mentor/js',[PostController::class,"indexUmum"])->name('indexUmum');
Route::get('/kelas-mentor/js/{post:slug}',[PostController::class,"detailUmum"])->name('detailUmum');

//Route Kelas Mentor SQL
Route::get('/kelas-mentor/sql',[PostController::class,"indexUmum"])->name('indexUmum');
Route::get('/kelas-mentor/sql/{post:slug}',[PostController::class,"detailUmum"])->name('detailUmum');

//Route Profile Mentor
// Route::get('/mentor/{post:id_user}',[PostController::class,"profileMentor"])->name('profileMentor');
Route::get('/mentor/{name}',[PostController::class,"profileMentor"])->name('profileMentor');
// Route::get('/mentor/{user:name}',function(User $user,Post $post){

// });
