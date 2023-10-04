<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','location_id'
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class,'area_id','id');
    }

    public function commertial()
    {
        return $this->hasMany(CommercialSpace::class,'area_id','id');
    }
}
