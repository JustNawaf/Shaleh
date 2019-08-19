<?php

namespace App\Http\Controllers;

use App\City;
use App\Property;
use App\Shaleh;
use Illuminate\Http\Request;

class ShalehController extends Controller
{
    public function index()
    {
        $shalehat = Shaleh::all();
        return view('pages.all.shalehat')->with('shalehat',$shalehat);
    }
    public function add_shaleh()
    {
        $properties = Property::all();
        $cities = City::all();
        return view('pages.admin.addShaleh')->with(['properties'=>$properties,'cities'=>$cities]);
    }
    public function store_shaleh(Request $request)
    {
        $shaleh = new Shaleh();
        $shaleh->user_id = auth()->user()->id;
        $shaleh->first_name = $request->get('first_name');
        $shaleh->last_name = $request->get('last_name');
        $shaleh->phone = $request->get('phone');
        $shaleh->email = $request->get('email');
        $shaleh->shaleh_name = $request->get('shaleh_name');
        $shaleh->shaleh_desc = $request->get('shaleh_desc');
        $shaleh->city_id = $request->get('city_id');
        $shaleh->area = $request->get('area');
        $shaleh->street = $request->get('street');
        $shaleh->normal_price = $request->get('normal_price');
        $shaleh->ramadan_price = $request->get('ramadan_price');
        $shaleh->ftr_price = $request->get('ftr_price');
        $shaleh->adha_price = $request->get('adha_price');
        $shaleh->save();
        // $properties = Property::all();
        // $cities = City::all();
        // return view('pages.admin.addShaleh')->with(['properties'=>$properties,'cities'=>$cities]);
    }
}
