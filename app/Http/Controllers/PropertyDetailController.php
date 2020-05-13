<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class PropertyDetailController extends Controller
{
    //
    public function property_detail($detail){
    	$details = Property::where('id', $detail)->first();

    	return view('property_details')->with('details',$details);
    }
}
