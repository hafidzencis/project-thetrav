<?php

namespace App\Http\Controllers;

use App\Models\TravelPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function index(Request $request,$slug){
        return view('pages.detail',[
            'items' => TravelPackage::with(['galleries'])
                ->where('slug',$slug)
                ->firstOrFail(),
            'item' => TravelPackage::with(['galleries'])->get(),
            'item_pt' => DB::table('travel_packages')->distinct('type')->get() 
        ]);
    }
}
