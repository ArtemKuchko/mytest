<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoFolder extends Model
{
    //
    protected $table = 'photofolders';

    public function photos()
    {
        return $this->hasMany('App\Photo');
    }
}
