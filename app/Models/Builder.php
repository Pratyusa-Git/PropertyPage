<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Builder extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','logo','is_top'
    ];

    public static function topBuilders(){
        $topBuilders = Builder::where('is_top',1)->get();
        return $topBuilders;
    }
}
