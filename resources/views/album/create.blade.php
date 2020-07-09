@extends('template.index') 
@section('content') 

<div class="container"> 
	<h3>Tambah Data Album</h3>
	<form action="{{ url('/album') }}" method="post"> 
		@csrf 
		<div class="col-sm-12 col-md-7">
		<label>Nama Album</label>
		<input class="form-control" type="text" name="album_name">
		</div>
		<div class="col-sm-12 col-md-7">
			<label>Nama Artist</label>	
			<select class="form-control" name="album_id_artist">
					<option value="" holder>--Pilih Artist--</option>
					@foreach($rows as $row)
					<option value="{{ $row->artist_id}}">{{ $row->artist_name}}</option>
					@endforeach
			</select>
		</div><br>
		<div class="col-sm-12 col-md-7">
		        <button class="btn btn-primary">Simpan</button>
		</div>
		</form>  
</div>  
@endsection
