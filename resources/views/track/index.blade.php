@extends('template.index')

@section('content') 



<h2>Daftar Lagu</h2>
	<br>
	<div><a class="btn btn-primary" href="{{ url('track/create') }}">Tambah Lagu</a></div> <br>
	<table align="center " class="table table-dark"> 
		<tr>
			<th>No</th> 
			<th>Judul Lagu</th> 
			<th>Album</th>
			<th>Time</th>
			<th>File</th>
			<th>Action</th>
		</tr>
		@foreach ($rows as $row => $rowt)
		<tr>
			<td>{{ $row +  $rows->firstitem() }}</td>
			<td>{{ $rowt->track_name}}</td>
			<td>{{ $rowt->get_album->album_name }}</td> 
			<td>{{ $rowt->track_time }}</td> 
			<td>
				<?php if (!empty($rowt['track_file'])) { ?>
					<audio controls>
						<source src="<?php echo "./layout/assets/uploads/" . $rowt['track_file']; ?>" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>					
				<?php } ?>
			</td>
			<td>
				<form action="{{ url('track/' . $rowt->track_id) }}" method="POST">
					@csrf
					@method('delete')
					<a href="{{ url('track/' . $rowt->track_id. '/edit') }}" class="btn btn-primary">Edit</a>
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
			
		</tr>
	@endforeach 
</table> 
</div> 
{{ $rows->links()}}
@endsection