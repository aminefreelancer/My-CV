<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //
    protected $fillable = ['name', 'category_id'];

    protected $with = ['category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    
}
