<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
    use HasFactory;
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brandID');
    }

    //get url thumbnail
    public function getMainThumbnailAttribute(){
        $defaultThumbnail = 'https://res.cloudinary.com/quynv300192/image/upload/v1634800182/ixdpahcfqqmee12obutt.png';
        if($this->thumbnail != null && strlen($this->thumbnail) >0){
            $this->thumbnail = substr($this->thumbnail, 0, -1);
            $arrayThumbnail = explode(',', $this->thumbnail);
            if(sizeof($arrayThumbnail)>0){
                return $arrayThumbnail[0];
            }
        }
        return $defaultThumbnail;
    }

    public function getArrayThumbnailAttribute(){
        if($this->thumbnail != null && strlen($this->thumbnail) >0){
            $this->thumbnail = substr($this->thumbnail, 0, -1);
            $arrayThumbnail = explode(',', $this->thumbnail);
            if(sizeof($arrayThumbnail)>0){
                return $arrayThumbnail;
            }
        }
        return [];
    }

    //convert status
    public function getStrStatusAttribute(){
        $strStatus = '';
        if($this->status ==-1){
            $strStatus = 'out of stock';
        }
        if($this->status ==0){
            $strStatus = 'stop selling';
        }
        if($this->status ==1){
            $strStatus = 'on sale';
        }
        if($this->status ==2){
            $strStatus = 'sale off';
        }
        if($this->status ==3){
            $strStatus = 'top sale';
        }
        return $strStatus;
    }

    public function getFPriceAttribute(){
        return number_format($this->price, 0, ',', ' ');
    }

    #sort by
    public function scopeSortBy($query, $request)
    {
        if ($request->has('sortBy')) {
            switch ($request->sortBy) {
                case 'created_at_desc':
                    return $query->orderBy('created_at', 'desc');
                case 'created_at_asc':
                    return $query->orderBy('created_at', 'asc');
                case 'name_desc':
                    return $query->orderBy('name', 'desc');
                case 'name_asc':
                    return $query->orderBy('name', 'asc');
                case 'id_desc':
                    return $query->orderBy('id', 'desc');
                case 'id_asc':
                    return $query->orderBy('id', 'asc');
                case 'price_desc':
                    return $query->orderBy('price', 'desc');
                case 'price_asc':
                    return $query->orderBy('price', 'asc');
                default:
                    return $query->orderBy('created_at', 'asc');
            }
        }
    }

    //Scope start here
    public function scopePagination($query, $request)
    {
        if ($request->has('pagination_limit')) {
            switch ($request->pagination_limit) {
                case 'limit_5':
                    return $query->paginate(5);
                case 'limit_10':
                    return $query->paginate(10);
                case 'limit_20':
                    return $query->paginate(20);
            }
        }
    }

    public function scopeName($query, $request)
    {
        if ($request->has('name')) {
            if (isset($request->name)) {
                $query->where('name', 'LIKE', '%' . $request->name . '%');
                return $query;
            }
        }
        return $query;
    }

    public function scopeBrand($query, $request)
    {
        if ($request->has('brandID')) {
            if (isset($request->brandID) && ($request->brandID) != 99) {
                $query->where('brandID', $request->brandID);
                return $query;
            }
        }
        return $query;
    }

    public function scopeRam($query, $request)
    {
        if ($request->has('ram')) {
            if (isset($request->ram) && ($request->ram) != 99) {
                $query->where('ram', $request->ram);
                return $query;
            }
        }
        return $query;
    }

    public function scopeStatus($query, $request)
    {
        if ($request->has('status')) {
            if (isset($request->status) && ($request->status) != 99) {
                $query->where('status', $request->status);
                return $query;
            }
        }
        return $query;
    }

    public function scopeDateFilter($query, $request)
    {
        if ($request->has('start_date') && $request->has('end_date')) {
            if(isset($request->start_date) && isset($request->end_date)){
                $query->whereBetween('updated_at', [$request->start_date, $request->end_date]);
            }
        }
        return $query;
    }

    public function scopePriceFilter($query, $request)
    {
        if ($request->has('from_price') && $request->has('to_price')) {
            if(isset($request->from_price) && isset($request->to_price)){
                $query->whereBetween('price', [$request->from_price, $request->to_price]);
            }
        }
        return $query;
    }
    //Scope end here
}
