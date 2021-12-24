<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    //
    protected $fillable = ['title', 'type', 'location', 'establishement', 'from', 'to', 'description', 'user_id' ];
}
