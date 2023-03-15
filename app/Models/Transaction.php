<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

    protected $hidden = [];

    public function travel_packages(){
        return $this->belongsTo(TravelPackage::class,'travel_package_id');
    }

    public function details(){
        return $this->hasMany(TransactionDetail::class,'transaction_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
