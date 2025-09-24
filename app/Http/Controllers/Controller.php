<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function Store_Main(){
        return view('welcome');
    }
    public function Store_SPH(){
        return view('Lenses.SPH');
    }
    //    1_65_UC_70_65mm
    public function Store_1_56_UC_70_65mm_Degree(){
        return view('Lenses.1_56_UC_70_65mm.Degree');
    }
    public function Store_1_56_UC_70_65mm_SPH(){
        return view('Lenses.1_56_UC_70_65mm.SPH');
    }
    public function Store_1_56_UC_70_65mm_CYL_0_25_2_00(){
        return view('Lenses.1_56_UC_70_65mm.CYL_0_25_2_00');
    }
    public function Store_1_56_UC_70_65mm_CYL_2_25_3_00(){
        return view('Lenses.1_56_UC_70_65mm.CYL_2_25_3_00');
    }
    public function Store_1_56_UC_70_65mm_CYL_3_25_4_00(){
        return view('Lenses.1_56_UC_70_65mm.CYL_3_25_4_00');
    }
    public function Store_1_56_UC_70_65mm_CYL_4_25_6_00(){
        return view('Lenses.1_56_UC_70_65mm.CYL_4_25_6_00');
    }
    //    1_65_HMC_70_65mm
    public function Store_1_56_HMC_70_65mm_Degree(){
        return view('Lenses.1_56_HMC_70_65mm.Degree');
    }
    public function Store_1_56_HMC_70_65mm_SPH(){
        return view('Lenses.1_56_HMC_70_65mm.SPH');
    }
    public function Store_1_56_HMC_70_65mm_CYL_0_25_2_00(){
        return view('Lenses.1_56_HMC_70_65mm.CYL_0_25_2_00');
    }
    public function Store_1_56_HMC_70_65mm_CYL_2_25_3_00(){
        return view('Lenses.1_56_HMC_70_65mm.CYL_2_25_3_00');
    }
    public function Store_1_56_HMC_70_65mm_CYL_3_25_4_00(){
        return view('Lenses.1_56_HMC_70_65mm.CYL_3_25_4_00');
    }
    public function Store_1_56_HMC_70_65mm_CYL_4_25_6_00(){
        return view('Lenses.1_56_HMC_70_65mm.CYL_4_25_6_00');
    }
    //    1_65_BCC_70_65mm
    public function Store_1_56_BCC_70_65mm_Degree(){
        return view('Lenses.1_56_BCC_70_65mm.Degree');
    }
    public function Store_1_56_BCC_70_65mm_SPH(){
        return view('Lenses.1_56_BCC_70_65mm.SPH');
    }
    public function Store_1_56_BCC_70_65mm_CYL_0_25_2_00(){
        return view('Lenses.1_56_BCC_70_65mm.CYL_0_25_2_00');
    }
    public function Store_1_56_BCC_70_65mm_CYL_2_25_3_00(){
        return view('Lenses.1_56_BCC_70_65mm.CYL_2_25_3_00');
    }
    public function Store_1_56_BCC_70_65mm_CYL_3_25_4_00(){
        return view('Lenses.1_56_BCC_70_65mm.CYL_3_25_4_00');
    }
    public function Store_1_56_BCC_70_65mm_CYL_4_25_6_00(){
        return view('Lenses.1_56_BCC_70_65mm.CYL_4_25_6_00');
    }
    //    1_65_UC_55mm
    public function Store_1_56_UC_55mm_Degree(){
        return view('Lenses.1_56_UC_55mm.Degree');
    }
    public function Store_1_56_UC_55mm_SPH(){
        return view('Lenses.1_56_UC_55mm.SPH');
    }
    public function Store_1_56_UC_55mm_CYL_0_25_2_00(){
        return view('Lenses.1_56_UC_55mm.CYL_0_25_2_00');
    }
    public function Store_1_56_UC_55mm_CYL_2_25_3_00(){
        return view('Lenses.1_56_UC_55mm.CYL_2_25_3_00');
    }
    public function Store_1_56_UC_55mm_CYL_3_25_4_00(){
        return view('Lenses.1_56_UC_55mm.CYL_3_25_4_00');
    }
    public function Store_1_56_UC_55mm_CYL_4_25_6_00(){
        return view('Lenses.1_56_UC_55mm.CYL_4_25_6_00');
    }
    //    1_65_HMC_55mm
    public function Store_1_56_HMC_55mm_Degree(){
        return view('Lenses.1_56_HMC_55mm.Degree');
    }
    public function Store_1_56_HMC_55mm_SPH(){
        return view('Lenses.1_56_HMC_55mm.SPH');
    }
    public function Store_1_56_HMC_55mm_CYL_0_25_2_00(){
        return view('Lenses.1_56_HMC_55mm.CYL_0_25_2_00');
    }
    public function Store_1_56_HMC_55mm_CYL_2_25_3_00(){
        return view('Lenses.1_56_HMC_55mm.CYL_2_25_3_00');
    }
    public function Store_1_56_HMC_55mm_CYL_3_25_4_00(){
        return view('Lenses.1_56_HMC_55mm.CYL_3_25_4_00');
    }
    public function Store_1_56_HMC_55mm_CYL_4_25_6_00(){
        return view('Lenses.1_56_HMC_55mm.CYL_4_25_6_00');
    }
    //    1_65_BC_HMC_60mm
    public function Store_1_56_BC_HMC_60mm_Degree(){
        return view('Lenses.1_56_BC_HMC_60mm.Degree');
    }
    public function Store_1_56_BC_HMC_60mm_SPH(){
        return view('Lenses.1_56_BC_HMC_60mm.SPH');
    }
    public function Store_1_56_BC_HMC_60mm_CYL_0_25_2_00(){
        return view('Lenses.1_56_BC_HMC_60mm.CYL_0_25_2_00');
    }
    public function Store_1_56_BC_HMC_60mm_CYL_2_25_3_00(){
        return view('Lenses.1_56_BC_HMC_60mm.CYL_2_25_3_00');
    }
    public function Store_1_56_BC_HMC_60mm_CYL_3_25_4_00(){
        return view('Lenses.1_56_BC_HMC_60mm.CYL_3_25_4_00');
    }
    public function Store_1_56_BC_HMC_60mm_CYL_4_25_6_00(){
        return view('Lenses.1_56_BC_HMC_60mm.CYL_4_25_6_00');
    }
    //    1_59_PC_HMC_70_65mm
    public function Store_1_59_PC_HMC_70_65mm_Degree(){
        return view('Lenses.1_59_PC_HMC_70_65mm.Degree');
    }
    public function Store_1_59_PC_HMC_70_65mm_SPH(){
        return view('Lenses.1_59_PC_HMC_70_65mm.SPH');
    }
    public function Store_1_59_PC_HMC_70_65mm_CYL_0_25_2_00(){
        return view('Lenses.1_59_PC_HMC_70_65mm.CYL_0_25_2_00');
    }
    public function Store_1_59_PC_HMC_70_65mm_CYL_2_25_3_00(){
        return view('Lenses.1_59_PC_HMC_70_65mm.CYL_2_25_3_00');
    }
    public function Store_1_59_PC_HMC_70_65mm_CYL_3_25_4_00(){
        return view('Lenses.1_59_PC_HMC_70_65mm.CYL_3_25_4_00');
    }
    public function Store_1_59_PC_HMC_70_65mm_CYL_4_25_6_00(){
        return view('Lenses.1_59_PC_HMC_70_65mm.CYL_4_25_6_00');
    }
    //    1_56_CM_HMC_70_65mm
    public function Store_1_56_CM_HMC_70_65mm_Degree(){
        return view('Lenses.1_56_CM_HMC_70_65mm.Degree');
    }
    public function Store_1_56_CM_HMC_70_65mm_SPH(){
        return view('Lenses.1_56_CM_HMC_70_65mm.SPH');
    }
    public function Store_1_56_CM_HMC_70_65mm_CYL_0_25_2_00(){
        return view('Lenses.1_56_CM_HMC_70_65mm.CYL_0_25_2_00');
    }
    public function Store_1_56_CM_HMC_70_65mm_CYL_2_25_3_00(){
        return view('Lenses.1_56_CM_HMC_70_65mm.CYL_2_25_3_00');
    }
    public function Store_1_56_CM_HMC_70_65mm_CYL_3_25_4_00(){
        return view('Lenses.1_56_CM_HMC_70_65mm.CYL_3_25_4_00');
    }
    public function Store_1_56_CM_HMC_70_65mm_CYL_4_25_6_00(){
        return view('Lenses.1_56_CM_HMC_70_65mm.CYL_4_25_6_00');
    }
     //    Progressive
    public function Store_Progressive_Degree(){
        return view('Lenses.PROGRESSIVE.Progressive');
    }
     //    Progressive
    public function Store_Flat_Top_Degree(){
        return view('Lenses.FLAT_TOP.Flat_Top');
    }
}
