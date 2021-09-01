<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use JavaScript;

class PropertyDetailController extends Controller
{
    //
    public function property_detail($detail){
    	$details = Property::where('id', $detail)->first();

    	JavaScript::put([
            'price' => $details['p_price']
            ]);

    	return view('property_details')->with('details',$details);
    }
}
