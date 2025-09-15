<?php

use App\Http\Controllers\Controller;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('SPH', [Controller::class, 'Store_SPH'])->name('Lenses.SPH');
Route::get('Store_1_56_UC_70_65mm_Degree', [Controller::class, 'Store_1_56_UC_70_65mm_Degree'])->name('Lenses.Store_1_56_UC_70_65mm_Degree');
Route::get('Store_1_56_UC_70_65mm_SPH', [Controller::class, 'Store_1_56_UC_70_65mm_SPH'])->name('Lenses.Store_1_56_UC_70_65mm_SPH');
Route::get('Store_1_56_UC_70_65mm_CYL_0_25_2_00', [Controller::class, 'Store_1_56_UC_70_65mm_CYL_0_25_2_00'])->name('Lenses.Store_1_56_UC_70_65mm_CYL_0_25_2_00');
Route::get('Store_1_56_UC_70_65mm_CYL_2_25_3_00', [Controller::class, 'Store_1_56_UC_70_65mm_CYL_2_25_3_00'])->name('Lenses.Store_1_56_UC_70_65mm_CYL_2_25_3_00');
Route::get('Store_1_56_UC_70_65mm_CYL_3_25_4_00', [Controller::class, 'Store_1_56_UC_70_65mm_CYL_3_25_4_00'])->name('Lenses.Store_1_56_UC_70_65mm_CYL_3_25_4_00');
Route::get('Store_1_56_UC_70_65mm_CYL_4_25_6_00', [Controller::class, 'Store_1_56_UC_70_65mm_CYL_4_25_6_00'])->name('Lenses.Store_1_56_UC_70_65mm_CYL_4_25_6_00');


