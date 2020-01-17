<?php

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

Route::get('/', 'HomeController@show');
Route::get('/harold', 'HomeController@test');
Route::get('/myview', 'HomeController@viewharold');

Route::get('users', 'UsersController@getInfos');
Route::post('users', 'UsersController@postInfos');

Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');

Route::get('photo', 'ImagesController@getForm');
Route::post('photo', 'ImagesController@postForm');
/*Route::post('photo', function(Request $request){
    //$path = $request -> file ('image') ->store('uploads');
    //-!d($path -> request);
    Storage::disk('image_uploads') -> put();

});*/



Route::get('artikel/{n}', 'artikelController@showArtikel')->where('n', '[0-9]+');
Route::get('rechnung/{n}', function($n) {
    return view('rechnung')->with('number', $n);
})->where('n', '[0-9]+');





Route::get('/{id}', function ($id){
    return response('your number is ' . $id, 200);
})-> where('id', '[0-9]+');




