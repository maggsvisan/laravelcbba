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
use Response;

Route::get('/test2', function () {
	$mat = 'a0133455';
	$rows = DB::raw('SELECT id, fName, lName, passwrd, accessType FROM Users WHERE matricula = "$mat"');

	return Response::json($rows);
});
