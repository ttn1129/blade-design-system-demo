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

Route::get('/organisms', 'DesignGuideController@showOrganisms');
Route::get('/atoms', 'DesignGuideController@showAtoms');
Route::get('/molecules', 'DesignGuideController@showMolecules');
Route::get('/278', 'DesignGuideController@show278_ナビゲーションのデザインを変えたい_flexbox版');
