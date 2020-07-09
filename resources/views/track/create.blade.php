@extends('template.index')
@section('content') 

 
<div class="container"> 
	<h3>Tambah Daftar Lagu</h3>
	<form action="{{ url('/track') }}" method="post"> 
		@csrf
		<div class="col-sm-12 col-md-7">
		<label>Judul Lagu</label>
		<input class="form-control" type="text" name="track_name">
		</div>
		<div class="col-sm-12 col-md-7">
			<label>Album</label>	
			<select class="form-control" name="track_id_album">
					<option value="" holder>--Pilih Album--</option>
					@foreach($rows as $row)
					<option value="{{ $row->album_id}}">{{ $row->album_name}}</option>
					@endforeach
			</select>
		</div>
		<div class="col-sm-12 col-md-7">
		<label>Time</label>
		<input class="form-control" type="text" name="track_time">
		</div>
		<div class="col-sm-12 col-md-7">
		<label>File Mp3</label>
		<input class="form-control" type="file" name="track_file">
		</div>
		<br>
		<div class="col-sm-12 col-md-7">
		        <button class="btn btn-primary">Simpan</button>
		</div>
	</form>  
</div>  
@endsection