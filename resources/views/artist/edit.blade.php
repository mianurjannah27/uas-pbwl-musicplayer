@extends('template.index') 
@section('content') 
<div class="container"> 
	<h3>Edit Data Artist</h3>
	<form action="{{ url('/artist/'.$row->artist_id) }}" method="post"> 
		<input name="_method" type="hidden" value="PATCH">
		@csrf
		<div class="card-body">
			<div class="form-group">
					<label class="col-form-label text-md-right">Nama Artis</label>
            	<div class="col-sm-12 col-md-7">
                	<input type="text" class="form-control" name="artist_name" value="{{$row->artist_name }}">
				</div>
			</div>
			<div class="col-sm-12 col-md-7">
		        <button class="btn btn-primary" value="UPDATE">Update</button>
		    </div>
		</div>			
	</form>  
		 
</div>  
@endsection