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
Route::get('Store_Main', [Controller::class, 'Store_Main'])->name('Store_Main');
/////////////////////////////
Route::get('SPH', [Controller::class, 'Store_SPH'])->name('Lenses.SPH');
Route::get('Store_1_56_UC_70_65mm_Degree', [Controller::class, 'Store_1_56_UC_70_65mm_Degree'])->name('Lenses.Store_1_56_UC_70_65mm_Degree');
Route::get('Store_1_56_UC_70_65mm_SPH', [Controller::class, 'Store_1_56_UC_70_65mm_SPH'])->name('Lenses.Store_1_56_UC_70_65mm_SPH');
Route::get('Store_1_56_UC_70_65mm_CYL_0_25_2_00', [Controller::class, 'Store_1_56_UC_70_65mm_CYL_0_25_2_00'])->name('Lenses.Store_1_56_UC_70_65mm_CYL_0_25_2_00');
Route::get('Store_1_56_UC_70_65mm_CYL_2_25_3_00', [Controller::class, 'Store_1_56_UC_70_65mm_CYL_2_25_3_00'])->name('Lenses.Store_1_56_UC_70_65mm_CYL_2_25_3_00');
Route::get('Store_1_56_UC_70_65mm_CYL_3_25_4_00', [Controller::class, 'Store_1_56_UC_70_65mm_CYL_3_25_4_00'])->name('Lenses.Store_1_56_UC_70_65mm_CYL_3_25_4_00');
Route::get('Store_1_56_UC_70_65mm_CYL_4_25_6_00', [Controller::class, 'Store_1_56_UC_70_65mm_CYL_4_25_6_00'])->name('Lenses.Store_1_56_UC_70_65mm_CYL_4_25_6_00');
//////////////////////////////
Route::get('Store_1_56_HMC_70_65mm_Degree', [Controller::class, 'Store_1_56_HMC_70_65mm_Degree'])->name('Lenses.Store_1_56_HMC_70_65mm_Degree');
Route::get('Store_1_56_HMC_70_65mm_SPH', [Controller::class, 'Store_1_56_HMC_70_65mm_SPH'])->name('Lenses.Store_1_56_HMC_70_65mm_SPH');
Route::get('Store_1_56_HMC_70_65mm_CYL_0_25_2_00', [Controller::class, 'Store_1_56_HMC_70_65mm_CYL_0_25_2_00'])->name('Lenses.Store_1_56_HMC_70_65mm_CYL_0_25_2_00');
Route::get('Store_1_56_HMC_70_65mm_CYL_2_25_3_00', [Controller::class, 'Store_1_56_HMC_70_65mm_CYL_2_25_3_00'])->name('Lenses.Store_1_56_HMC_70_65mm_CYL_2_25_3_00');
Route::get('Store_1_56_HMC_70_65mm_CYL_3_25_4_00', [Controller::class, 'Store_1_56_HMC_70_65mm_CYL_3_25_4_00'])->name('Lenses.Store_1_56_HMC_70_65mm_CYL_3_25_4_00');
Route::get('Store_1_56_HMC_70_65mm_CYL_4_25_6_00', [Controller::class, 'Store_1_56_HMC_70_65mm_CYL_4_25_6_00'])->name('Lenses.Store_1_56_HMC_70_65mm_CYL_4_25_6_00');
/////////////////////////////
Route::get('Store_1_56_BCC_70_65mm_Degree', [Controller::class, 'Store_1_56_BCC_70_65mm_Degree'])->name('Lenses.Store_1_56_BCC_70_65mm_Degree');
Route::get('Store_1_56_BCC_70_65mm_SPH', [Controller::class, 'Store_1_56_BCC_70_65mm_SPH'])->name('Lenses.Store_1_56_BCC_70_65mm_SPH');
Route::get('Store_1_56_BCC_70_65mm_CYL_0_25_2_00', [Controller::class, 'Store_1_56_BCC_70_65mm_CYL_0_25_2_00'])->name('Lenses.Store_1_56_BCC_70_65mm_CYL_0_25_2_00');
Route::get('Store_1_56_BCC_70_65mm_CYL_2_25_3_00', [Controller::class, 'Store_1_56_BCC_70_65mm_CYL_2_25_3_00'])->name('Lenses.Store_1_56_BCC_70_65mm_CYL_2_25_3_00');
Route::get('Store_1_56_BCC_70_65mm_CYL_3_25_4_00', [Controller::class, 'Store_1_56_BCC_70_65mm_CYL_3_25_4_00'])->name('Lenses.Store_1_56_BCC_70_65mm_CYL_3_25_4_00');
Route::get('Store_1_56_BCC_70_65mm_CYL_4_25_6_00', [Controller::class, 'Store_1_56_BCC_70_65mm_CYL_4_25_6_00'])->name('Lenses.Store_1_56_BCC_70_65mm_CYL_4_25_6_00');
/////////////////////////////
Route::get('Store_1_56_UC_55mm_Degree', [Controller::class, 'Store_1_56_UC_55mm_Degree'])->name('Lenses.Store_1_56_UC_55mm_Degree');
Route::get('Store_1_56_UC_55mm_SPH', [Controller::class, 'Store_1_56_UC_55mm_SPH'])->name('Lenses.Store_1_56_UC_55mm_SPH');
Route::get('Store_1_56_UC_55mm_CYL_0_25_2_00', [Controller::class, 'Store_1_56_UC_55mm_CYL_0_25_2_00'])->name('Lenses.Store_1_56_UC_55mm_CYL_0_25_2_00');
Route::get('Store_1_56_UC_55mm_CYL_2_25_3_00', [Controller::class, 'Store_1_56_UC_55mm_CYL_2_25_3_00'])->name('Lenses.Store_1_56_UC_55mm_CYL_2_25_3_00');
Route::get('Store_1_56_UC_55mm_CYL_3_25_4_00', [Controller::class, 'Store_1_56_UC_55mm_CYL_3_25_4_00'])->name('Lenses.Store_1_56_UC_55mm_CYL_3_25_4_00');
Route::get('Store_1_56_UC_55mm_CYL_4_25_6_00', [Controller::class, 'Store_1_56_UC_55mm_CYL_4_25_6_00'])->name('Lenses.Store_1_56_UC_55mm_CYL_4_25_6_00');
//////////////////////////////
Route::get('Store_1_56_HMC_55mm_Degree', [Controller::class, 'Store_1_56_HMC_55mm_Degree'])->name('Lenses.Store_1_56_HMC_55mm_Degree');
Route::get('Store_1_56_HMC_55mm_SPH', [Controller::class, 'Store_1_56_HMC_55mm_SPH'])->name('Lenses.Store_1_56_HMC_55mm_SPH');
Route::get('Store_1_56_HMC_55mm_CYL_0_25_2_00', [Controller::class, 'Store_1_56_HMC_55mm_CYL_0_25_2_00'])->name('Lenses.Store_1_56_HMC_55mm_CYL_0_25_2_00');
Route::get('Store_1_56_HMC_55mm_CYL_2_25_3_00', [Controller::class, 'Store_1_56_HMC_55mm_CYL_2_25_3_00'])->name('Lenses.Store_1_56_HMC_55mm_CYL_2_25_3_00');
Route::get('Store_1_56_HMC_55mm_CYL_3_25_4_00', [Controller::class, 'Store_1_56_HMC_55mm_CYL_3_25_4_00'])->name('Lenses.Store_1_56_HMC_55mm_CYL_3_25_4_00');
Route::get('Store_1_56_HMC_55mm_CYL_4_25_6_00', [Controller::class, 'Store_1_56_HMC_55mm_CYL_4_25_6_00'])->name('Lenses.Store_1_56_HMC_55mm_CYL_4_25_6_00');
//////////////////////////////
Route::get('Store_1_56_BC_HMC_60mm_Degree', [Controller::class, 'Store_1_56_BC_HMC_60mm_Degree'])->name('Lenses.Store_1_56_BC_HMC_60mm_Degree');
Route::get('Store_1_56_BC_HMC_60mm_SPH', [Controller::class, 'Store_1_56_BC_HMC_60mm_SPH'])->name('Lenses.Store_1_56_BC_HMC_60mm_SPH');
Route::get('Store_1_56_BC_HMC_60mm_CYL_0_25_2_00', [Controller::class, 'Store_1_56_BC_HMC_60mm_CYL_0_25_2_00'])->name('Lenses.Store_1_56_BC_HMC_60mm_CYL_0_25_2_00');
Route::get('Store_1_56_BC_HMC_60mm_CYL_2_25_3_00', [Controller::class, 'Store_1_56_BC_HMC_60mm_CYL_2_25_3_00'])->name('Lenses.Store_1_56_BC_HMC_60mm_CYL_2_25_3_00');
Route::get('Store_1_56_BC_HMC_60mm_CYL_3_25_4_00', [Controller::class, 'Store_1_56_BC_HMC_60mm_CYL_3_25_4_00'])->name('Lenses.Store_1_56_BC_HMC_60mm_CYL_3_25_4_00');
Route::get('Store_1_56_BC_HMC_60mm_CYL_4_25_6_00', [Controller::class, 'Store_1_56_BC_HMC_60mm_CYL_4_25_6_00'])->name('Lenses.Store_1_56_BC_HMC_60mm_CYL_4_25_6_00');
//////////////////////////////
Route::get('Store_1_59_PC_HMC_70_65mm_Degree', [Controller::class, 'Store_1_59_PC_HMC_70_65mm_Degree'])->name('Lenses.Store_1_59_PC_HMC_70_65mm_Degree');
Route::get('Store_1_59_PC_HMC_70_65mm_SPH', [Controller::class, 'Store_1_59_PC_HMC_70_65mm_SPH'])->name('Lenses.Store_1_59_PC_HMC_70_65mm_SPH');
Route::get('Store_1_59_PC_HMC_70_65mm_CYL_0_25_2_00', [Controller::class, 'Store_1_59_PC_HMC_70_65mm_CYL_0_25_2_00'])->name('Lenses.Store_1_59_PC_HMC_70_65mm_CYL_0_25_2_00');
Route::get('Store_1_59_PC_HMC_70_65mm_CYL_2_25_3_00', [Controller::class, 'Store_1_59_PC_HMC_70_65mm_CYL_2_25_3_00'])->name('Lenses.Store_1_59_PC_HMC_70_65mm_CYL_2_25_3_00');
Route::get('Store_1_59_PC_HMC_70_65mm_CYL_3_25_4_00', [Controller::class, 'Store_1_59_PC_HMC_70_65mm_CYL_3_25_4_00'])->name('Lenses.Store_1_59_PC_HMC_70_65mm_CYL_3_25_4_00');
Route::get('Store_1_59_PC_HMC_70_65mm_CYL_4_25_6_00', [Controller::class, 'Store_1_59_PC_HMC_70_65mm_CYL_4_25_6_00'])->name('Lenses.Store_1_59_PC_HMC_70_65mm_CYL_4_25_6_00');
//////////////////////////////
Route::get('Store_1_56_CM_HMC_70_65mm_Degree', [Controller::class, 'Store_1_56_CM_HMC_70_65mm_Degree'])->name('Lenses.Store_1_56_CM_HMC_70_65mm_Degree');
Route::get('Store_1_56_CM_HMC_70_65mm_SPH', [Controller::class, 'Store_1_56_CM_HMC_70_65mm_SPH'])->name('Lenses.Store_1_56_CM_HMC_70_65mm_SPH');
Route::get('Store_1_56_CM_HMC_70_65mm_CYL_0_25_2_00', [Controller::class, 'Store_1_56_CM_HMC_70_65mm_CYL_0_25_2_00'])->name('Lenses.Store_1_56_CM_HMC_70_65mm_CYL_0_25_2_00');
Route::get('Store_1_56_CM_HMC_70_65mm_CYL_2_25_3_00', [Controller::class, 'Store_1_56_CM_HMC_70_65mm_CYL_2_25_3_00'])->name('Lenses.Store_1_56_CM_HMC_70_65mm_CYL_2_25_3_00');
Route::get('Store_1_56_CM_HMC_70_65mm_CYL_3_25_4_00', [Controller::class, 'Store_1_56_CM_HMC_70_65mm_CYL_3_25_4_00'])->name('Lenses.Store_1_56_CM_HMC_70_65mm_CYL_3_25_4_00');
Route::get('Store_1_56_CM_HMC_70_65mm_CYL_4_25_6_00', [Controller::class, 'Store_1_56_CM_HMC_70_65mm_CYL_4_25_6_00'])->name('Lenses.Store_1_56_CM_HMC_70_65mm_CYL_4_25_6_00');
//////////////////////////////
Route::get('Store_1_67_HMC_70_75mm_Degree', [Controller::class, 'Store_1_67_HMC_70_75mm_Degree'])->name('Lenses.Store_1_67_HMC_70_75mm_Degree');
Route::get('Store_1_67_HMC_70_75mm_SPH', [Controller::class, 'Store_1_67_HMC_70_75mm_SPH'])->name('Lenses.Store_1_67_HMC_70_75mm_SPH');
Route::get('Store_1_67_HMC_70_75mm_CYL_0_25_2_00', [Controller::class, 'Store_1_67_HMC_70_75mm_CYL_0_25_2_00'])->name('Lenses.Store_1_67_HMC_70_75mm_CYL_0_25_2_00');
Route::get('Store_1_67_HMC_70_75mm_CYL_2_25_3_00', [Controller::class, 'Store_1_67_HMC_70_75mm_CYL_2_25_3_00'])->name('Lenses.Store_1_67_HMC_70_75mm_CYL_2_25_3_00');
Route::get('Store_1_67_HMC_70_75mm_CYL_3_25_4_00', [Controller::class, 'Store_1_67_HMC_70_75mm_CYL_3_25_4_00'])->name('Lenses.Store_1_67_HMC_70_75mm_CYL_3_25_4_00');
Route::get('Store_1_67_HMC_70_75mm_CYL_4_25_6_00', [Controller::class, 'Store_1_67_HMC_70_75mm_CYL_4_25_6_00'])->name('Lenses.Store_1_67_HMC_70_75mm_CYL_4_25_6_00');
//////////////////////////////
Route::get('Store_1_67_BCC_HMC_70_65mm_Degree', [Controller::class, 'Store_1_67_BCC_HMC_70_65mm_Degree'])->name('Lenses.Store_1_67_BCC_HMC_70_65mm_Degree');
Route::get('Store_1_67_BCC_HMC_70_65mm_SPH', [Controller::class, 'Store_1_67_BCC_HMC_70_65mm_SPH'])->name('Lenses.Store_1_67_BCC_HMC_70_65mm_SPH');
Route::get('Store_1_67_BCC_HMC_70_65mm_CYL_0_25_2_00', [Controller::class, 'Store_1_67_BCC_HMC_70_65mm_CYL_0_25_2_00'])->name('Lenses.Store_1_67_BCC_HMC_70_65mm_CYL_0_25_2_00');
Route::get('Store_1_67_BCC_HMC_70_65mm_CYL_2_25_3_00', [Controller::class, 'Store_1_67_BCC_HMC_70_65mm_CYL_2_25_3_00'])->name('Lenses.Store_1_67_BCC_HMC_70_65mm_CYL_2_25_3_00');
Route::get('Store_1_67_BCC_HMC_70_65mm_CYL_3_25_4_00', [Controller::class, 'Store_1_67_BCC_HMC_70_65mm_CYL_3_25_4_00'])->name('Lenses.Store_1_67_BCC_HMC_70_65mm_CYL_3_25_4_00');
Route::get('Store_1_67_BCC_HMC_70_65mm_CYL_4_25_6_00', [Controller::class, 'Store_1_67_BCC_HMC_70_65mm_CYL_4_25_6_00'])->name('Lenses.Store_1_67_BCC_HMC_70_65mm_CYL_4_25_6_00');
//////////////////////////////
Route::get('Store_1_74_HMC_70_75mm_Degree', [Controller::class, 'Store_1_74_HMC_70_75mm_Degree'])->name('Lenses.Store_1_74_HMC_70_75mm_Degree');
Route::get('Store_1_74_HMC_70_75mm_SPH', [Controller::class, 'Store_1_74_HMC_70_75mm_SPH'])->name('Lenses.Store_1_74_HMC_70_75mm_SPH');
Route::get('Store_1_74_HMC_70_75mm_CYL_0_25_2_00', [Controller::class, 'Store_1_74_HMC_70_75mm_CYL_0_25_2_00'])->name('Lenses.Store_1_74_HMC_70_75mm_CYL_0_25_2_00');
Route::get('Store_1_74_HMC_70_75mm_CYL_2_25_3_00', [Controller::class, 'Store_1_74_HMC_70_75mm_CYL_2_25_3_00'])->name('Lenses.Store_1_74_HMC_70_75mm_CYL_2_25_3_00');
Route::get('Store_1_74_HMC_70_75mm_CYL_3_25_4_00', [Controller::class, 'Store_1_74_HMC_70_75mm_CYL_3_25_4_00'])->name('Lenses.Store_1_74_HMC_70_75mm_CYL_3_25_4_00');
Route::get('Store_1_74_HMC_70_75mm_CYL_4_25_6_00', [Controller::class, 'Store_1_74_HMC_70_75mm_CYL_4_25_6_00'])->name('Lenses.Store_1_74_HMC_70_75mm_CYL_4_25_6_00');
//////////////////////////////
Route::get('Store_Progressive', [Controller::class, 'Store_Progressive_Degree'])->name('Lenses.Store_Progressive');
//////////////////////////////
Route::get('Store_Flat_Top', [Controller::class, 'Store_Flat_Top_Degree'])->name('Lenses.Store_Flat_Top');
//////////////////////////////
Route::get('Store_CR39_sunlens_75mm_base6_HMC', [Controller::class, 'Store_CR39_sunlens_75mm_base6_HMC'])->name('Lenses.Store_CR39_sunlens_75mm_base6_HMC');
//////////////////////////////
Route::get('Store_CR39_sunlens_75mm_base2_HMC', [Controller::class, 'Store_CR39_sunlens_75mm_base2_HMC'])->name('Lenses.Store_CR39_sunlens_75mm_base2_HMC');
//////////////////////////////
Route::get('Store_CR39_polarized_80mm_base6_HMC', [Controller::class, 'Store_CR39_polarized_80mm_base6_HMC'])->name('Lenses.CR39_polarized_80mm_base6_HMC');
//////////////////////////////
Route::get('Store_1_523_mineral_sunlens_70mm_base6_HMC', [Controller::class, 'Store_1_523_mineral_sunlens_70mm_base6_HMC'])->name('Lenses.1_523_mineral_sunlens_70mm_base6_HMC');
//////////////////////////////
Route::get('Store_1_523_mineral_polarized_70mm_base6_HMC', [Controller::class, 'Store_1_523_mineral_polarized_70mm_base6_HMC'])->name('Lenses.1_523_mineral_polarized_70mm_base6_HMC');
//////////////////////////////
Route::get('Store_Cut_Lenses', [Controller::class, 'Store_Cut_Lenses'])->name('Accessories.Store_Cut_Lenses');
//////////////////////////////
Route::get('Store_Acc_p_1', [Controller::class, 'Store_Acc_p_1'])->name('Accessories.Store_Acc_p_1');
//////////////////////////////
Route::get('Store_Acc_p_2', [Controller::class, 'Store_Acc_p_2'])->name('Accessories.Store_Acc_p_2');
//////////////////////////////
Route::get('Store_Acc_p_3', [Controller::class, 'Store_Acc_p_3'])->name('Accessories.Store_Acc_p_3');
//////////////////////////////
Route::get('Store_Acc_p_4', [Controller::class, 'Store_Acc_p_4'])->name('Accessories.Store_Acc_p_4');
//////////////////////////////
Route::get('Store_Acc_p_5', [Controller::class, 'Store_Acc_p_5'])->name('Accessories.Store_Acc_p_5');
//////////////////////////////
