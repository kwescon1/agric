<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Property;

class SearchController extends Controller
{
    //

    public function search(){

    	return view('search.search');
    }

    public function adminsearch(){
    	return view('admin.search.search');
    }

}


	