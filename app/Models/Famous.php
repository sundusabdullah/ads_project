<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Famous extends Model
{
    use HasFactory;

    protected $table = 'famouses';
    protected $fillable = ['vat', 'name', 'brief', 'email', 'region', 'interests', 'nationality', 'male_follow',
    'female_follow', 'ins_link', 'snap_link', 'youtube_link', 'twitter_link'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function fixed(){
        return $this->hasMany('App\Models\Fixed');
    }
}
