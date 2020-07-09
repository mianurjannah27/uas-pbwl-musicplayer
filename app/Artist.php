<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Artist extends Model
{
    protected $table = "tb_artist";

    protected $primaryKey = 'artist_id'; 

    protected $fillable = ['artist_name'];

    public function get_album()
    {
    	return $this->hasMany('App\Album', 'album_id_artist', 'artist_id');
    }
}
