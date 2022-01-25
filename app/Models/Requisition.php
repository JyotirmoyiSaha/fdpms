<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisition extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function details(){
    //     return $this->hasMany(RequisitionDetails::class);
    // }

    public function requisition(){
        return $this ->belongsTo(Requisition::class);
    }
}
