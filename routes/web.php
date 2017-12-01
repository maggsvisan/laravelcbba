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
use DB;
use Request;
use Response;

Route::get('/Login', function () {
	$mat = Request::get('matricula', 'a0133455');
	$db_response = DB::raw('SELECT id, fName, lName, passwrd, accessType FROM Users WHERE matricula = "$mat"');

	return Response::json($db_response);
});
