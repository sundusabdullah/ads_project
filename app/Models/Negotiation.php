<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negotiation extends Model
{
    use HasFactory;

    protected $table = 'negotiate';
    protected $fillable = ['fixed_id', 'user_id' , 'message'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function fixed(){
        return $this->belongsTo('App\Models\Fixed');
    }
}
