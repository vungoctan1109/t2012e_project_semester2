<?php

namespace App\Models;

use App\Models\Mobile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'name', 'description', 'created_at', 'updated_at'
    ];
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
    public function mobile()
    {
        return $this->hasMany(Mobile::class,'id', 'mobileID');
    }
    #sort by
    public function scopeSortBy($query, $request)
    {
        if ($request->has('sortBy')) {
            switch ($request->sortBy) {
                case 'created_at_desc':
                    return $query->orderBy('created_at', 'desc');
                case 'created_at_asc"':
                    return $query->orderBy('created_at', 'asc');
                case 'name_desc':
                    return $query->orderBy('name', 'desc');
                case 'name_asc':
                    return $query->orderBy('name', 'asc');
                case 'id_desc':
                    return $query->orderBy('id', 'desc');
                case 'id_asc':
                    return $query->orderBy('id', 'asc');
                default:
                    return $query->orderBy('created_at', 'asc');
            }
        }
    }
    #pagination
    public function scopePagination($query, $request)
    {
        if ($request->has('pagination_limit')) {
            switch ($request->pagination_limit) {
                case 'limit_12':
                    return $query->paginate(12);
                case 'limit_24':
                    return $query->paginate(24);
                case 'limit_48':
                    return $query->paginate(48);
                case 'limit_96':
                    return $query->paginate(96);
                case 'limit_198':
                    return $query->paginate(198);
            }
        }
    }
}
