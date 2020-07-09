<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "tb_album";

    protected $primaryKey = 'album_id'; 

    protected $fillable = ['album_name', 'album_id_artist'];

   public function get_artist(){
   		
		return $this->belongsTo('App\Artist', 'album_id_artist', 'artist_id');
		
	}
	public function get_track(){
   		
		return $this->hasOne('App\Track', 'track_id_album', 'album_id');
		
	}
}
