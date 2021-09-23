<?php
use App\Http\Controllers\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group([],function(){
    
    Route::get('/authors',[ProjectController::class,'authorslist']);
    Route::get('/authors/{author}',[ProjectController::class,'authorshow']);
    
    Route::get('/books',[ProjectController::class,'bookslist']);
    
    Route::get('/books/{book}',[ProjectController::class,'book_show']);
    
    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });
    
});

 


