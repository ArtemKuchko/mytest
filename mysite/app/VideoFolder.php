<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoFolder extends Model
{
    //
	protected $table = 'videofolders';
	
	public function videos()
    {
        return $this->hasMany('App\Video', 'folder_id');
    }
}
