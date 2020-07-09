@extends('template.index')
@section('content') 


<div class="container"> 
	<h3>Tambah Data Artist</h3>
	<form action="{{ url('/artist') }}" method="post"> 
		@csrf
		<div class="card-body">
			<div class="form-group">
					<label class="col-form-label text-md-right">Nama Artis</label>
            	<div class="col-sm-12 col-md-7">
                	<input type="text" class="form-control" name="artist_name">
				</div>
			</div>
			<div class="col-sm-12 col-md-7">
		        <button class="btn btn-primary">Simpan</button>
		    </div>
		</div>			
	</form>  
</div>  
@endsection