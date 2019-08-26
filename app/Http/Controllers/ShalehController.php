<?php

namespace App\Http\Controllers;

use App\City;
use App\properties_shaleh;
use App\Property;
use App\Shaleh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        DB::transaction(function ()use($request) {
            $shaleh = new Shaleh();
            $shaleh->user_id = auth()->user()->id;
            // return dd($request->all());
            // $shaleh->fill([$request->all()]);
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

            foreach ($request->get('properites') as  $property) {
                $prop = new properties_shaleh();
                $prop->shaleh_id = $shaleh->id;
                $prop->property_id = $property;
                $prop->save();
            }
        });
        return redirect('/admin/shalehat');
        // $properties = Property::all();
        // $cities = City::all();
        // return view('pages.admin.addShaleh')->with(['properties'=>$properties,'cities'=>$cities]);
    }
}
