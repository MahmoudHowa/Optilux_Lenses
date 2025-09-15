<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

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

}
