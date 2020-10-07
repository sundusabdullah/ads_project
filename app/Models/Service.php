<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $fillable = ['user_id', 'services_name' , 'services_price', 'services_type'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function fixed(){
        return $this->hasMany('App\Models\Fixed');
    }
}
