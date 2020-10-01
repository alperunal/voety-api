<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lineup extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'date', 'main_color', 'secondary_color', 'number_color', 'players', 'user_id', 'version'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}