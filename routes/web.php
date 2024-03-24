<?php

use App\Http\Controllers\AssetController;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [TemplateController::class, 'templateList']);
Route::get('/build/{id}', [TemplateController::class, 'buildTemplate']);
Route::get('/add-template', [TemplateController::class, 'addTemplate']);
Route::post('/save-template', [TemplateController::class, 'saveTemplate']);

// Route::get('/build', function () {
//     return view('build');
// });
// Route::get('/build2', function () {
//     return view('build2');
// });


Route::post('/uploadasset', [AssetController::class, 'upload'])->name('uploadasset');
Route::post('/store/save-design', [TemplateController::class, 'saveDesign']);
Route::post('/store/get-design', [TemplateController::class, 'getDesign']);
Route::post('/sendTestEmail', [TemplateController::class, 'sendTestMail']);
