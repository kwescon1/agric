<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderedItem extends Model
{
    //
    protected $fillable = ['c_id','p_id','p_specs','p_quantity','email','tel'];
}
