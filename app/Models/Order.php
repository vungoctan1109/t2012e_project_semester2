<?php

namespace App\Models;

use App\Models\OrderDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Order extends Model
{
    use HasFactory;
    public function order_detail()
    {
        return $this->hasMany(OrderDetail::class,'orderID', 'id');        
    }
}
