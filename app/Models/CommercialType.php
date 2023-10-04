<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommercialType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function commertial()
    {
        return $this->hasMany(CommercialSpace::class,'commercial_type_id','id');
    }
}
