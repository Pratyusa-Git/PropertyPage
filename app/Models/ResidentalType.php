<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResidentalType extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_of_bedrooms'
    ];

    public function projects()
    {
        return $this->hasMany(Project::class,'resident_type_id','id');
    }
    
}
