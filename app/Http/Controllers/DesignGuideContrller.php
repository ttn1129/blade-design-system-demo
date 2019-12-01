<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesignGuideController extends Controller
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
    public function show278_ナビゲーションのデザインを変えたい_flexbox版()
    {
        return view('ナビゲーションのデザインを変えたい_flexbox版');
    }
}
