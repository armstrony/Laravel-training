<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Art;
class ArtController extends Controller
{
    public function index()
    {
        return view('gallery',[
            "title"=>"Gallery",
            "art" => Art::all()
        ]);
    }
}
