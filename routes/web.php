<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LatihanController;
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
Route::get('/belajar/html/styling',function(){
    return view('belajar.html.html-styling');
});
Route::get('/belajar/html/formatting',function(){
    return view('belajar.html.html-formatting');
});
Route::get('/belajar/html/comment',function(){
    return view('belajar.html.html-comment');
});
Route::get('/belajar/html/favicon',function(){
    return view('belajar.html.html-favicon');
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
Route::get('/belajar/html/table-padding-spacing',function(){
    return view('belajar.html.html-table-padding-spacing');
});
Route::get('/belajar/html/table-colspan-rowspan',function(){
    return view('belajar.html.html-table-colspan-rowspan');
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
Route::get('/belajar/html/form',function(){
    return view('belajar.html.html-form');
});
Route::get('/belajar/html/form-atribut',function(){
    return view('belajar.html.html-form-atribut');
});
Route::get('/belajar/html/input-type',function(){
    return view('belajar.html.html-input-type');
});
Route::get('/belajar/html/input-atribut',function(){
    return view('belajar.html.html-input-atribut');
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
Route::get('/belajar/css/flexbox',function(){
    return view('belajar.css.css-flexbox');
});
Route::get('/belajar/css/grid',function(){
    return view('belajar.css.css-grid');
});
Route::get('/belajar/css/display',function(){
    return view('belajar.css.css-display');
});
Route::get('/belajar/css/media-query',function(){
    return view('belajar.css.css-media-query');
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
Route::get('/belajar/php/session',function(){
    return view('belajar.php.php-session');
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
Route::get('/belajar/php/form-handling',function(){
    return view('belajar.php.php-form-handling');
});
Route::get('/belajar/php/form-require',function(){
    return view('belajar.php.php-form-require');
});
Route::get('/belajar/php/database',function(){
    return view('belajar.php.php-database');
});
Route::get('/belajar/php/database-connect',function(){
    return view('belajar.php.php-database-connect');
});
Route::get('/belajar/php/database-view',function(){
    return view('belajar.php.php-database-view');
});
Route::get('/belajar/php/database-create',function(){
    return view('belajar.php.php-database-create');
});
Route::get('/belajar/php/database-update',function(){
    return view('belajar.php.php-database-update');
});
Route::get('/belajar/php/database-delete',function(){
    return view('belajar.php.php-database-delete');
});
//End Route Belajar PHP

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
Route::get('belajar/js/object',function(){
    return view('belajar.js.js-object');
});
Route::get('belajar/js/event',function(){
    return view('belajar.js.js-event');
});
Route::get('belajar/js/string-method',function(){
    return view('belajar.js.js-string-method');
});
Route::get('belajar/js/if-else',function(){
    return view('belajar.js.js-if-else');
});
Route::get('belajar/js/switch',function(){
    return view('belajar.js.js-switch');
});
Route::get('belajar/js/loop',function(){
    return view('belajar.js.js-loop');
});
//End Route Belajar JS

//Route Belajar SQL
Route::get('/belajar/sql',function(){
    return view('belajar.sql.index');
});
Route::get('belajar/sql/syntax',function(){
    return view('belajar.sql.sql-syntax');
});
Route::get('belajar/sql/select',function(){
    return view('belajar.sql.sql-select');
});
Route::get('belajar/sql/where',function(){
    return view('belajar.sql.sql-where');
});
Route::get('belajar/sql/order-by',function(){
    return view('belajar.sql.sql-order-by');
});
Route::get('belajar/sql/operator',function(){
    return view('belajar.sql.sql-operator');
});
Route::get('belajar/sql/insert',function(){
    return view('belajar.sql.sql-insert');
});
Route::get('belajar/sql/update',function(){
    return view('belajar.sql.sql-update');
});
Route::get('belajar/sql/delete',function(){
    return view('belajar.sql.sql-delete');
});
Route::get('belajar/sql/select-top',function(){
    return view('belajar.sql.sql-select-top');
});
Route::get('belajar/sql/min-max',function(){
    return view('belajar.sql.sql-min-max');
});
Route::get('belajar/sql/count-sum-avg',function(){
    return view('belajar.sql.sql-count-sum-avg');
});
Route::get('belajar/sql/alias',function(){
    return view('belajar.sql.sql-alias');
});
Route::get('belajar/sql/join',function(){
    return view('belajar.sql.sql-join');
});
Route::get('belajar/sql/group-by',function(){
    return view('belajar.sql.sql-group-by');
});
Route::get('belajar/sql/having',function(){
    return view('belajar.sql.sql-having');
});
Route::get('belajar/sql/exists',function(){
    return view('belajar.sql.sql-exists');
});
Route::get('belajar/sql/comment',function(){
    return view('belajar.sql.sql-comment');
});
Route::get('belajar/sql/stored-procedure',function(){
    return view('belajar.sql.sql-stored-procedure');
});
Route::get('belajar/sql/db-create-db',function(){
    return view('belajar.sql.sql-db-create-db');
});
Route::get('belajar/sql/db-drop-db',function(){
    return view('belajar.sql.sql-db-drop-db');
});
Route::get('belajar/sql/db-backup-db',function(){
    return view('belajar.sql.sql-db-backup-db');
});
Route::get('belajar/sql/db-create-table',function(){
    return view('belajar.sql.sql-db-create-table');
});
Route::get('belajar/sql/db-drop-table',function(){
    return view('belajar.sql.sql-db-drop-table');
});
Route::get('belajar/sql/db-alter-table',function(){
    return view('belajar.sql.sql-db-alter-table');
});
Route::get('belajar/sql/db-constraint',function(){
    return view('belajar.sql.sql-db-constraint');
});
Route::get('belajar/sql/db-pk',function(){
    return view('belajar.sql.sql-db-pk');
});
Route::get('belajar/sql/db-fk',function(){
    return view('belajar.sql.sql-db-fk');
});
Route::get('belajar/sql/db-default',function(){
    return view('belajar.sql.sql-db-default');
});
Route::get('belajar/sql/db-ai',function(){
    return view('belajar.sql.sql-db-ai');
});
Route::get('belajar/sql/db-view',function(){
    return view('belajar.sql.sql-db-view');
});
//End Route Belajar SQL

//Route Alur Belajar
Route::get('/alur-belajar/front-end', function(){
    return view('alur-belajar.front-end.index');
});
Route::get('/alur-belajar/back-end', function(){
    return view('alur-belajar.back-end.index');
});
Route::get('/alur-belajar/ux-designer', function(){
    return view('alur-belajar.ux-designer.index');
});

//Route Latihan HTML
Route::get('/latihan/html/basic',function(){
    return view('latihan.html.html-basic');
});
Route::get('/latihan/html/menengah',function(){
    return view('latihan.html.html-menengah');
});
Route::get('/latihan/html/lanjutan',function(){
    return view('latihan.html.html-lanjutan');
});
Route::post('/hasil/html/basic',[LatihanController::class,"cekBasic"])->name('cekBasic');
Route::post('/hasil/html/menengah',[LatihanController::class,"cekMenengah"])->name('cekMenengah');
Route::post('/hasil/html/lanjutan',[LatihanController::class,"cekLanjutan"])->name('cekLanjutan');

//Route Latihan CSS
Route::get('/latihan/css',function(){
    return view('latihan.css.index');
});
Route::get('/latihan/css/selector-1',function(){
    return view('latihan.css.index');
});

//Route Latihan SQL
Route::get('/latihan/sql',function(){
    return view('latihan.sql.index');
});
Route::get('/latihan/sql/select-1',function(){
    return view('latihan.sql.index');
});

//Route Latihan JS
Route::get('/latihan/js',function(){
    return view('latihan.js.index');
});
Route::get('/latihan/js/variable-1',function(){
    return view('latihan.js.index');
});

//Route Latihan PHP
Route::get('/latihan/php',function(){
    return view('latihan.php.index');
});
Route::get('/latihan/php/syntax-1',function(){
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
Route::get('/mentor/{username}',[PostController::class,"profileMentor"])->name('profileMentor');
// Route::get('/mentor/{user:name}',function(User $user,Post $post){
// Route::get('/latihan/html', [LatihanController::class,"cekJawaban"])->name('cekJawaban');
// });
