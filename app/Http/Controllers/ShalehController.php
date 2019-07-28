<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShalehController extends Controller
{
    public function index()
    {
        return view('pages.admin.shalehat');
    }
    public function add_shaleh()
    {
        return view('pages.admin.addShaleh');
    }
}
