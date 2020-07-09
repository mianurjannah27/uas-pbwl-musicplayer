<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tampil extends Model
{
    
    public function track()
    {
        return $this->belongsTo('App\Track', 'track_id');
    }

    public function Album()
    {
        return $this->belongsTo('App\Album', 'album_id');
    }
}