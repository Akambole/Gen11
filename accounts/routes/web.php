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
use App\Account;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware'=>'auth'],function(){
	   Route::get('/home', 'HomeController@index')->name('home');

       Route::get('/accounts','AccountsController@showAccounts')->name('accounts.show');
       Route::get('/add-account','AccountsController@showAddAccountForm')->name('addAccount.show');
       Route::post('/add','AccountsController@addAccount')->name('accounts.add');
       Route::delete('/accounts/{id}','AccountsController@destroy')->name('accounts.delete');
       Route::get('/accounts/edit/{id}','AccountsController@showEditForm')->name('accounts.edit');
       Route::put('accounts/update/{id}','AccountsController@updateAccount')->name('accounts.update');
});

