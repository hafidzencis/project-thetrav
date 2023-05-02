<?php

namespace App\Http\Controllers;

use App\Models\TravelPackage;
use App\Models\TypePackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home',[
            'item' => TravelPackage::with(['galleries'])->get(),
            'item_pt' => TypePackage::all()
        ]);
    }




}
