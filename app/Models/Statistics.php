<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistics extends Model
{
    use HasFactory;
    
    protected $table = 'statistics';
    protected $fillable = ['follow_instagram', 'age_instagram', 'spreading_instagram', 'percentage_instagram',
    'min_snapchat', 'age_snapchat', 'story_snapchat', 'day_snapchat', 'follow_snapchat'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
