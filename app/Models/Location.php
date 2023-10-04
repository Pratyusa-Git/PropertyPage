<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_name','image'
    ];

    public static function topLocations(){
        $topLocations = Location::where('is_top',1)->get();
        return $topLocations;
    }

    public function areas()
    {
        return $this->hasMany(Area::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class,'city_id','id');
    }

    public function commertial()
    {
        return $this->hasMany(CommercialSpace::class,'city_id','id');
    }
}
