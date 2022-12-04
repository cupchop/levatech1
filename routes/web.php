<?php
use Illuminate\Support\Facades\Route;
<<<<<<< Updated upstream
use App\Http\Controllers\PostController;      //追加
=======
use App\Http\Controllers\PostController;

>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
Route::get('/', [PostController::class, 'index']);
?>
=======

Route::get('/', [PostController::class, 'index']);
>>>>>>> Stashed changes
