@extends('template.index')

@section('content') 

<h2>Daftar Played</h2>
	<br>
	<div><a class="btn btn-primary" href="{{ url('played/create') }}">Tambah Data</a></div><br>
	<table align="center " class="table table-dark"> 
		<tr align="center " border="3px" cellspacing="100px"> 
			<td>ID Track</td> 
			<td>Date</td>
			<td>Hapus</td>
			<td>Edit</td>
		</tr>
		@foreach($rows as $row)
		<tr> 
			<td>{{ $row->play_id_track }}</td> 
			<td>{{ $row->play_date }}</td>
			<td class="btn-danger"><form action="{{ url('played/' . $row->play_id) }}" method="POST"> 
 						<input name="_method" type="hidden" value="DELETE"> 
 						@csrf 
 						<button class="btn-danger">Hapus</button> 
				</form>
			</td>
			<td><a href="{{ url('played/' . $row->play_id . '/edit') }}"><button class="btn-primary">Edit</button></a></td>
		</tr>
	@endforeach 
</table> 
</div> 

 @endsection