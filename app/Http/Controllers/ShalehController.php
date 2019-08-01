<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShalehController extends Controller
{
    public function index()
    {
        return view('pages.all.shalehat');
    }
    public function add_shaleh()
    {
        return view('pages.admin.addShaleh');
    }
}
