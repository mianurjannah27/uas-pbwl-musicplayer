@extends('template.index')
@section('content') 
<div class="container"> 
	<h3>Edit Data Track</h3>
	<form action="{{ url('/track/'.$row->track_id) }}" method="post"> 
		<input name="_method" type="hidden" value="PATCH">
		@csrf
		<div class="col-sm-12 col-md-7">
		<label>Judul Lagu</label>
		<input class="form-control" type="text" name="track_name" value="{{$row->track_name }}">
		</div>
		<div class="col-sm-12 col-md-7">
			<label>Album</label>	
			<input class="form-control" type="text" name="track_id_album" value="{{$row->track_id_album }}">
		</div>
		<div class="col-sm-12 col-md-7">
		<label>Time</label>
		<input class="form-control" type="text" name="track_time" value="{{$row->track_time }}">
		</div>
		<div class="col-sm-12 col-md-7">
		<label>File Mp3</label>
		<input class="form-control" type="file" name="track_file" value="{{$row->track_file }}">
		</div>
		<br>
		<div class="col-sm-12 col-md-7">
		        <button class="btn btn-primary">Simpan</button>
		</div> 
	</form>  
</div>  
@endsection