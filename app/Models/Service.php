<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $fillable = ['services_instagram_name', 'services_instagram_price', 'services_snapchat_name', 'services_snapchat_price'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function fixed(){
        return $this->hasMany('App\Models\Fixed');
    }
}
