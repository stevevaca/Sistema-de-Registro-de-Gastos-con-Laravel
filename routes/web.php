<?php

use App\Http\Controllers\HomeController;
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
Route::get('/','App\Http\Controllers\HomeController@index');
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');
Route::resource('/expense_reports', 'App\Http\Controllers\ExpenseReportController');
Route::get('/expense_reports/{id}/confirmDelete','App\Http\Controllers\ExpenseReportController@confirmDelete');
Route::get('/expense_reports/{expense_report}/expenses/create','App\Http\Controllers\ExpenseController@create');
Route::post('/expense_reports/{expense_report}/expenses','App\Http\Controllers\ExpenseController@store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
