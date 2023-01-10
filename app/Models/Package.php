<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $casts = [
        "amenities" => "array"
    ];
    protected $guarded=[];

    public function room(){
        return $this->belongsTo(
            Room::class
        );
    }
}
