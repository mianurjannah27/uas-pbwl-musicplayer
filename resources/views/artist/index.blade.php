@extends('template.index')

@section('content') 


	<h2>Daftar Artist</h2>
	<br>
	<div><a class="btn btn-primary" href="{{ url('artist/create') }}">Tambah Data</a></div>
	<table align="center " class="table table-dark"> 
		<tr> 
			<th>No</th>
			<th>Nama</th> 
			<th>Action</th>
			
		</tr>
		@foreach ($rows as $row => $rowt)
		<tr>
			<td>{{ $row +  $rows->firstitem() }}</td>
			<td>{{ $rowt->artist_name }}</td>
			<td>
				<form action="{{ url('artist/' . $rowt->artist_id) }}" method="POST">
					@csrf
					@method('delete')
					<a href="{{ url('artist/' . $rowt->artist_id . '/edit') }}" class="btn btn-primary">Edit</a>
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td> 

		</tr>
	@endforeach 
</table> 
</div> 

{{ $rows->links()}}
 @endsection