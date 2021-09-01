<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //
    protected $fillable = ['c_name','c_id','p_status','p_price','p_type','p_image','p_specs','p_address','p_city','p_description'];
    // The p_status is whether the property is for rent or sale p-type whether land or home

    protected $casts = ['p_image' => 'array'];
    public function user(){
    	return $this->belongsTo(App\User::class);
    }
}

