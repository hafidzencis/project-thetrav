<?php

namespace App\Http\Controllers;

use App\Models\TravelPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home',[
            'items' => TravelPackage::with(['galleries'])->get()
        ]);
    }
}
