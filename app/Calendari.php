<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendari extends Model
{
    protected $table = "calendari";
    protected $fillable = ['dataini','datafi','color'];
}
