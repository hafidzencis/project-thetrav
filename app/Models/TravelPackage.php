<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TravelPackage extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    protected $hidden = [];
    
    public function galleries(){
        return $this->hasMany(Gallery::class);
    }

    public function transactions(){
        return $this->belongsTo(Transaction::class);
    }

    public function type_packages(){
        return $this->belongsTo(TypePackage::class,'type_package_id');
    }
}
