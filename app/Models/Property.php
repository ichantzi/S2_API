<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $hidden = ['id', 'created_at', 'updated_at'];
    protected $table = 'properties';

    function types(){
        return $this->belongsToMany(PropertyType::class);
    }
}
