@extends('template.index')
@section('content') 
	<h2>Daftar Album</h2>
	<br>
	<div><a class="btn btn-primary" href="{{ url('album/create') }}">Tambah Data</a></div> <br>
	<table align="center " class="table table-dark"> 
		<tr> 
			<th>No</th>
			<th>Nama</th> 
			<th>Artist</th>
			<td>Action</td>
		</tr>
		@foreach ($rows as $row => $rowt)
		<tr>
			<td>{{ $row +  $rows->firstitem() }}</td>
			<td>{{ $rowt->album_name }}</td> 
			<td>{{ $rowt->get_artist->artist_name }}</td>
			<td>
				<form action="{{ url('album/' . $rowt->album_id) }}" method="POST">
					@csrf
					@method('delete')
					<a href="{{ url('album/' . $rowt->album_id . '/edit') }}" class="btn btn-primary">Edit</a>
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
	@endforeach 
</table> 
</div>
{{ $rows->links()}}
 @endsection