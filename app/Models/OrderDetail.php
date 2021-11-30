<?php

namespace App\Models;

use App\Models\Mobile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderDetail extends Model
{
    use HasFactory;
    public function mobile()
    {
        return $this->hasOne(Mobile::class,'id', 'mobileID');        
    }
}
