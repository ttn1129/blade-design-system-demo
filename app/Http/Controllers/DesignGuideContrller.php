<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesignGuideContrller extends Controller
{
    //
    public function showOrganisms()
    {
        return view('organisms');
    }
    public function showMolecules()
    {
        return view('molecules');
    }
    public function showAtoms()
    {
        return view('atoms');
    }
}
