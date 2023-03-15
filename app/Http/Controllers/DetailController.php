<?php

namespace App\Http\Controllers;

use App\Models\TravelPackage;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request,$slug){
        return view('pages.detail',[
            'item' => TravelPackage::with(['galleries'])
                ->where('slug',$slug)
                ->firstOrFail()
        ]);
    }
}
