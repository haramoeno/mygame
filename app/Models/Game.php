<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    
    
    protected $guarded = array('id');
    
    public static $rules = array(
        'title' => 'required',
        'genre' => 'required',
        'platform' => 'required',
        'playstyle' => 'playstle',
        'intro' => 'intro',
        );
}
