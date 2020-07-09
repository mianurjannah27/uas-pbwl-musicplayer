<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Track extends Model
{
    protected $table = "tb_track";

    protected $primaryKey = 'track_id'; 

    protected $fillable = ['track_name','track_id_album','track_time','track_file' ];

    public function get_album(){
   		
		return $this->belongsTo('App\Album', 'track_id_album', 'album_id');
		
	}
}
