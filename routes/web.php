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

Route::get('/', 'H_controller@show');
Route::get('/harold', 'H_controller@test');
Route::get('/myview', 'H_controller@viewharold');

//basis formular
Route::get('users', 'UsersController@getInfos');
Route::post('users', 'UsersController@postInfos');

//contact formular, und email
Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');

//storage
Route::get('photo', 'ImagesController@getForm');
Route::post('photo', 'ImagesController@postForm');

//route test 1, momentan for user
Route::get('test', function() {
   return view('views_users/test_view');
});

//route test 2, allgemein
Route::get('test0', function() {
    return view('views_users/ttt');
});
/*Route::post('photo', function(Request $request){
    //$path = $request -> file ('image') ->store('uploads');
    //-!d($path -> request);
    Storage::disk('image_uploads') -> put();

});*/

//migration mit email table
Route::get('email', 'EmailController@getForm');
Route::post('email', ['uses' =>'EmailController@postForm' , 'as' => 'storeEmail']);

//migration mit user table
Route::resource('user', 'UserController')->middleware('auth');

Route::get('artikel/{n}', 'artikelController@showArtikel')->where('n', '[0-9]+');
Route::get('rechnung/{n}', function($n) {
    return view('rechnung')->with('number', $n);
})->where('n', '[0-9]+');





Route::get('/{id}', function ($id){
    return response('your number is ' . $id, 200);
})-> where('id', '[0-9]+');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
