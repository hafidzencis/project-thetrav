<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelPackage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\TypePackage;

class TypePackageUserController extends Controller
{
    public function index($id){


        return view('pages.type-package',[
            'items' => TypePackage::with(['travel_packages'])
            ->where('id',$id)
            ->firstOrFail(),
            'item_pt' => TypePackage::all(),
            'item' => TravelPackage::with(['galleries'])->get(),
        ]);
    }
}
