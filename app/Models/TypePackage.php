<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypePackage extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

    protected $hidden = [];

    public function travel_packages(){
        return $this->hasMany(TravelPackage::class,'type_package_id');
    }

}
