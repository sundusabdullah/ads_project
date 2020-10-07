<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Famous extends Model
{
    use HasFactory;

    protected $table = 'famouses';
    protected $fillable = ['user_id', 'avatar', 'name', 'vat', 'brief', 'instagram', 'instagram_num', 'snap',
     'snap_num', 'twitter', 'twitter_num', 'region'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function fixed(){
        return $this->hasMany('App\Models\Fixed');
    }
}
