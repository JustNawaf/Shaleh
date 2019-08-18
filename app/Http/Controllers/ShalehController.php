<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class ShalehController extends Controller
{
    public function index()
    {
        return view('pages.all.shalehat');
    }
    public function add_shaleh()
    {
        $properties = Property::all();
        return view('pages.admin.addShaleh')->with('properties',$properties);
    }
}
