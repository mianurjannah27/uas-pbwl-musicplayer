@extends('template.index')
@section('content') 
<div class="container"> 
	<h3>Edit Data Album</h3>
	<form action="{{ url('/album/'.$row->album_id) }}" method="post"> 
		<input name="_method" type="hidden" value="PATCH">
		@csrf
		 <div class="col-sm-12 col-md-7">
		<label>Nama Album</label>
		<input class="form-control" type="text" name="album_name" value="{{$row->album_name }}">
		</div>
		<div class="col-sm-12 col-md-7">
			<label>Nama Artist</label>	
			<input class="form-control" type="text" name="album_id_artist" value="{{$row->album_id_artist }}">
		</div><br>
		<div class="col-sm-12 col-md-7">
		        <button class="btn btn-primary">Update</button>
		</div>
	</form>  
</div>  
@endsection
