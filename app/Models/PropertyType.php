<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{

    protected $hidden = ['pivot'];
    protected $table = 'property_types';


    function properties(){
        $this->belongsToMany(Property::class);
    }}
