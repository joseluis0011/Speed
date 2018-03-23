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

Route::get('/', 'PagesController@home');

Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']],function() {
    Route::get('posts', 'PostsController@index')->name('admin.posts.index');
    Route::get('notificaciones/password', 'PasswordController@index')->name('admin.notificaciones.password.index');
    Route::get('notificaciones/reclamos', 'ReclamosController@index')->name('admin.notificaciones.reclamos.index');
    Route::get('notificaciones/buzon', 'BuzonController@index')->name('admin.notificaciones.buzon.index');
    Route::get('notificaciones/portal', 'PortalController@index')->name('admin.notificaciones.portal.index');
    Route::get('clientes', 'RegClientController@index')->name('admin.clientes.index');
   Route::get('clientes/create', 'RegClientController@create')->name('admin.clientes.create');
    Route::get('administrador', 'RegAdminController@index')->name('admin.administrador.index');
    Route::get('administrador/create', 'RegAdminController@create')->name('admin.administrador.create');
    Route::get('pagos', 'PagosController@index')->name('admin.pagos.index');
    Route::get('pagos/create', 'PagosController@create')->name('admin.pagos.create');
    Route::get('perfil', 'PerfilController@index')->name('admin.perfil.index');
    Route::get('/', 'AdminController@index')->name('admin');

    Route::post('newCliente', 'RegClientController@newuser')->name('newuser');
    Route::post('newPago', 'PagosController@newPago')->name('newpago');

    // notifi
    Route::get('getnewnotify', 'PagosController@getNotifynewall')->name('getnewnotify');
    Route::get('getBuzon', 'PagosController@getBuzon')->name('getBuzon');
    Route::get('updateview','PasswordController@updateview')->name('updateview');
    Route::post('changePassword','PortalController@changePassword')->name('changePassword');
    Route::post('saveData','PostsController@saveData')->name('saveData');

    // ajax routes
    Route::get('setConfigUser','AdminController@setConfigUser')->name('setConfigUser');
    Route::get('getPersona','AdminController@getPersona')->name('getPerson');
    Route::get('delPersona','AdminController@delPersona')->name('delPersona');
    Route::post('restore','AdminController@restoreDel')->name('restore');

});
Route::post('newCliente','Admin\BuzonController@newCliente')->name('newCliente');
//-------------------------- routes user cliente auth-------------------------------------
Route::group(['prefix'=>'user','namespace'=>'User','middleware'=>['auth']],function(){
    // route user here
    Route::get('/','UserController@index');
    Route::get('perfil', 'PerfilController@index')->name('user.perfil.index');
    Route::get('pagos', 'PagosController@index')->name('user.pagos.index');
    Route::get('password', 'PasswordController@index')->name('user.password.index');
    Route::get('reclamos', 'ReclamosController@index')->name('user.reclamos.index');
    Route::get('portal', 'PortalController@index')->name('user.portal.index');
});











// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

/*
Route::get('update',function (){
   $user = \App\User::where('idusuario','2')->first();
    $user->password = bcrypt('123456');
    $user->save();
    return $user;
});

*/


Route::get('test','Admin\AdminController@test');

