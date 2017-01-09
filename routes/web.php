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

Route::get('/', 'pagesController@index');
Route::get('profile' , 'pagesController@profile');
Route::get('blade' , 'pagesController@blade');
Route::get('settings' , 'pagesController@settings');

Route::get('users' ,'usersController@index');

Route::get('users/create' ,['uses' => 'usersController@create']);
Route::post('users' ,['uses' => 'usersController@store']);
/*
Route::get('users',function(){
    
    $users = [
        '0' => [
            'first_name' => 'Renato',
            'last_name' => 'Hysa' ,
            'location' => 'Albania'
        ] ,
       
    ];
    return $users;
    
});


/*
Route::get('about' , function (){
 
    return 'About Page';
});
 * 
 */
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::group(['middleware' =>'authenticated' ],function(){
    
Route::get('profile' , 'pagesController@profile');
Route::get('settings' , 'pagesController@settings');

Route::get('users' ,'usersController@index');
    
    
});


