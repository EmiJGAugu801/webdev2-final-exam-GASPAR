<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Bible_StudyController;

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

Route::get('/bible_study_request', [Bible_StudyController::class, 'index']);

Route::get('/bible_study_request_form', [Bible_StudyController::class, 'bStudy']);

Route::get('/bs_thankU_page', [Bible_StudyController::class, 'thanks']);
