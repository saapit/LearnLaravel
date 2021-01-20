<?php

use Illuminate\Support\Facades\Route;

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

// //root
// Route::get('/', function () {
//     return view('index');
// });


// //about
// Route::get('/about', function () {
//     $nama = 'Muhammad Syafiq';
//     return view('about', ['nama' => $nama]);
// });


// Route::get('/', 'PagesController@home');
// Route::get('/about', 'PagesController@about');
// Route::get('/mahasiswa', 'MahasiswaController@index');

// //Students
// Route::get('/students', 'StudentsController@index');

// Route::get('/students/create', 'StudentsController@create');

// Route::get('/students/{student}', 'StudentsController@show');

// // kalau method post, pergi ke /students, methodnya store
// Route::post('/students', 'StudentsController@store');

// // route for delete
// Route::delete('/students/{student}', 'StudentsController@destroy');

// // get = maksudnya pindah halaman
// Route::get('/students/{student}/edit', 'StudentsController@edit');

// Route::patch('/students/{student}', 'StudentsController@update');

//code below simplify all route above
Route::resource('students', 'StudentsController');
