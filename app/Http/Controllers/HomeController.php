<?php

namespace App\Http\Controllers;

use App\Models\TravelPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home',[
            'item' => TravelPackage::with(['galleries'])->get(),
            'item_pt' => DB::table('travel_packages')->distinct('type')->get()
        ]);
    }




}
