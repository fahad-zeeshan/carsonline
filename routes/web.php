<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\TextController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AddController;
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

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

// Start USERS Portion //

Route::prefix('user')->group(function(){

    Route::get('/' , [UserController::class , 'index'])->name('users');

    Route::get('/create', [UserController::class, 'create'])->name('user.add');

    Route::post('/store',[UserController::class, 'store'])->name('user.store');

    Route::get('/edit/{id}' , [UserController::class , 'edit'])->name('user.edit');

    Route::post('/update',[UserController::class, 'update'])->name('user.update');

    Route::delete('/delete/{id}' , [UserController::class , 'delete'])->name('user.delete');
});
// END USERS Portion //

//Start Add Text Portion//

Route::get('/add-text' , [TextController::class, 'text'])->name('add.text');

Route::post('/Store' , [TextController::class, 'store'])->name('text.store');


//End Add Text Portion//

Route::get('/images', [ImageController::class, 'image'])->name('add.images');

Route::get('/videos', [VideoController::class , 'video'])->name('add.videos');


Route::prefix('ads')->group(function(){

    Route::get('/create-ad' , [AddController::class,'index'])->name('create.ads');

});
