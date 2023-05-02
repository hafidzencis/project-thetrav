<?php

namespace App\Http\Controllers;

use App\Models\TravelPackage;
use App\Models\TypePackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function index(Request $request,$slug){

        // $coba =  TravelPackage::with(['galleries','type_packages'])
        // ->where('slug',$slug)
        // ->firstOrFail();

        // dd($coba);
        return view('pages.detail',[
            'items' => TravelPackage::with(['galleries','type_packages'])
                ->where('slug',$slug)
                ->firstOrFail(),
            'item' => TravelPackage::with(['galleries'])->get(),
            'item_pt' => TypePackage::all()
        ]);
    }
}
