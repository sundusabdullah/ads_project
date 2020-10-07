<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fixed extends Model
{
    use HasFactory;

    protected $fillable = [
        'place', 'time', 'date', 'notes',
    ];

    public function service(){
        return $this->hasMany('App\Models\Service');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
