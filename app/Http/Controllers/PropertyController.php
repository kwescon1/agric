<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Property;
use App\User;
use App\OrderedItem;


class PropertyController extends Controller
{
    //
    public function allitems(){
        $id = User::find(auth()->id());

        $items = Property::where('c_id', $id->id)->orderBy('created_at','DESC')->paginate(6);

        return view('admin.all_items')->with('items',$items);
    }

    public function requested(){
        $id = User::find(auth()->id());

        $requested = OrderedItem::where('c_id',$id->id)->paginate(6);

        return view('admin.requested')->with('requested',$requested);
    }

    public function list(){
    	return view('listings-list-full-width');
    }

    public function create(){
    	return view('submit-property');
    }

    public function upload(Request $request){
    	// dd(request()->all());
        $id = User::find(auth()->id());
    	
    	$this->validate($request,[
            'p_status' => 'required',
            'p_type' => 'required',
            'p_price' => 'required',
            'p_specs' => 'required',
            'p_address' => 'required',
            'p_city' => 'required',
            'p_description' => 'required',
    		]);
        

            
            if($request->hasFile('file')){
            	$images = $request->file('file');

            	foreach ($images as $image) {
	            $name =time().'.'.rand().'.'.$image->getClientOriginalExtension();
	            $destinationPath = public_path('images/properties');
	            $image->move($destinationPath, $name);
	            $image_data[] = $name;

            	}
            }
           
            $upload_property = new Property;

            $upload_property->c_name = $id->name;
            $upload_property->c_id = $id->id;
            $upload_property->p_price = trim($request->p_price);
            $upload_property->p_status = trim($request->p_status);

            $upload_property->p_type = trim($request->p_type);

            $upload_property->p_image =  json_encode($image_data);

            $upload_property->p_address = trim($request->p_address);
            $upload_property->p_city = trim($request->p_city);
            $upload_property->p_specs = trim($request->p_specs);
            $upload_property->p_description = trim($request->p_description);

            $upload_property->save();

          	return back()->with('success', 'Upload successful');   	
    }

    public function type($type){

        $type = Property::where('p_type', $type)->orderBy('created_at','DESC')->paginate(6);
        return view('listings-list-with-sidebar')->with('type',$type);



    }

    public function request(Request $request){

        $this->validate($request,[
            'c_id' => 'required',
            'p_id' => 'required',
            'p_specs' => 'required',
            'p_quantity' => 'required',
            'email' => 'required',
            'tel' => 'required',
            ]);

        $upload_request = new OrderedItem;

        $upload_request->c_id = $request->c_id;
        $upload_request->p_id = $request->p_id;
        $upload_request->p_specs = $request->p_specs;
        $upload_request->p_quantity = $request->p_quantity;
        $upload_request->email = $request->email;
        $upload_request->tel = $request->tel;

        $upload_request->save();

        return back()->with('success', 'Request Sent Successfully');
    }
}
