<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    $table="tags";
    $fillable=['name'];

    public function articles()
    {
    	return $this->belongsToMany('App\Article');
    }
}
