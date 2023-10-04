<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','image','area_id','city_id','resident_type_id','no_of_bathroom','is_parking','min_price','is_featured','is_recent','is_popular'
    ];

    public static function featuredProjects(){
        $featuredProjects = Project::where('is_featured',1)->get();
        return $featuredProjects;
    }

    public static function recentProjects(){
        $recentProjects = Project::where('is_recent',1)->get();
        return $recentProjects;
    }

    public static function popularProjects(){
        $popularProjects = Project::where('is_popular',1)->get();
        return $popularProjects;
    }

    public function location()
    {
        return $this->belongsTo(Location::class,'city_id','id');
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function residentType()
    {
        return $this->belongsTo(ResidentalType::class,'resident_type_id','id');
    }
}
