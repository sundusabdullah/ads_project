<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fixed extends Model
{
    use HasFactory;

    protected $table = 'fixeds';
    protected $fillable = [
        'place', 'time', 'date', 'notes', 'price'
    ];

    public function services(){
        return $this->belongsTo('App\Models\Service');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
