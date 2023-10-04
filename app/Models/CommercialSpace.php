<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommercialSpace extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','image','commercial_type_id','area_id','city_id','size','price'
    ];

    public function commercialType()
    {
        return $this->belongsTo(CommercialType::class,'commercial_type_id','id');
    }

    public function location()
    {
        return $this->belongsTo(Location::class,'city_id','id');
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
