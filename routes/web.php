<?php

use App\Http\Controllers\ArticleController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('welcome');
});


/*Route::get('/helloword', function () {
    return 'hello word';
});

*/
Route::get('/helloword/{gabriel?}', 
function (Request $request,$gabriel='gabucho') {
    return 'hello  como estas '.$gabriel.' '.$request->ip();

});

/*Route::get('articles', function() {
    return Article::all();

});


Route::get('articles/{id?}', function(Request $request,$id=null) {
    return Article::find($id);

});
*/
Route::get('articles', [ArticleController::class,'index'] );

Route::get('articles/{id}', [ArticleController::class,'show'] );





