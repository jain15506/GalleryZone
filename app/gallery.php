<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    protected $table = 'gallery';
public function images()
{
	return $this->hasMany('App\Image');
}


}
