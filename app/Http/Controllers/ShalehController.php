<?php

namespace App\Http\Controllers;

use App\City;
use App\Comment;
use App\properties_shaleh;
use App\Property;
use App\Shaleh;
use App\Shaleh_Images;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ShalehController extends Controller
{
    public function index()
    {
        $shalehat = Shaleh::with(['imgs','comments'])->get();
        // return dd($shalehat);
        $cities  = City::all();
        return view('pages.all.shalehat')->with(['shalehat'=> $shalehat,'cities'=>$cities]);
    }
    public function shalehate(){
        $shalehat = Shaleh::with(['imgs','comments'])->where('user_id',Auth::user()->id)->get();
        $cities  = City::all();
        return view('pages.all.shalehate')->with(['shalehat'=> $shalehat,'cities'=>$cities]);
    }
    public function show_shaleh($id){
        $shaleh = Shaleh::with(['comments.user','properties.property'])->find($id);
        $cities  = City::all();
        $shalehat = Shaleh::where('city_id','=',$shaleh->city_id)->where('id','!=',$id)->with(['city','imgs'])->take(3)->get();
        // return dd($shaleh);
        return view('pages.all.showShaleh')->with(['shaleh'=>$shaleh,'cities'=>$cities,'shalehat'=>$shalehat  ]);
    }
    public function add_shaleh()
    {
        $properties = Property::all();
        $cities = City::all();
        return view('pages.admin.addShaleh')->with(['properties'=>$properties,'cities'=>$cities]);
    }
    public function add_comment_to_shaleh(Request $request,$shaleh_id)
    {
        $new_comment = new Comment();
        $new_comment->shaleh_id = $shaleh_id;
        $new_comment->user_id = auth()->user()->id;
        $new_comment->evaluation = $request->get('rating');
        $new_comment->description = $request->get('comment');
        $new_comment->save();
        return Comment::where('id',$new_comment->id)->with('user')->first();
        // return $new_comment->with('user')->first();
        // return redirect('shaleh/'.$shaleh_id);
    }
    public function store_shaleh(Request $request)
    {
        // return $request->all();
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
            foreach($request->file('imgs') as $key=>$img){
                // $file_name_with_ext = $img->getClientOriginalName();
                // $file_name = pathinfo($file_name_with_ext,PATHINFO_FILENAME);
                $extension = $img->getClientOriginalExtension();
                $file_name_to_store = $key.'.'.$extension;
                $img->storeAs('shalehat_images/'.$shaleh->id,$file_name_to_store,'public');
                $shaleh_image = new Shaleh_Images();
                $shaleh_image->shaleh_id = $shaleh->id;
                $shaleh_image->image_name = $file_name_to_store;
                $shaleh_image->save();
            }
        });
        // return redirect('/admin/shalehat');
        // $properties = Property::all();
        // $cities = City::all();
        // return view('pages.admin.addShaleh')->with(['properties'=>$properties,'cities'=>$cities]);
    }

    public function search_shalehat(Request $request){
        $shaleh_name = $request->get('shaleh_name');
        $city_id = $request->get('city_id');
        $price = $request->get('price_order');
        // if($city_id != 'all'){
        //     return 'true';
        // }else{
        //     return 'false';
        // }
        // return $city_id;

        $shalehat = Shaleh::when($shaleh_name,function($query,$shaleh_name){
            return $query->where('shaleh_name',$shaleh_name);
        })->when($city_id,function($query,$city_id){
            if($city_id != 'all')
            return $query->where('city_id','=',$city_id);
        })->orderby('normal_price',$price)->with(['imgs','comments'])->get();

        return $shalehat;
    }
    public function update_shaleh_view($id){
        $properties = Property::all();
        $cities = City::all();
        $shaleh = Shaleh::with(['properties.property','city','imgs'])->find($id);
        return view('pages.admin.editShaleh')->with(['properties'=>$properties,'cities'=>$cities,'shaleh'=>$shaleh]);
    }
    public function delete_shaleh($id)
    {
        $shaleh = Shaleh::find($id);
        if($shaleh->user_id != Auth::user()->id)
        {
            return;
        }
        $shaleh->delete();
        return '1';
    }
}
