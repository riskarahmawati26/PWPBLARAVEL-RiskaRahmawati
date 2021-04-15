@extends('layouts.master')

	@section('content')

<div class="container">
	<table class="table table-light">
		<thead class="table-dark">
			<tr>
				<td>nama</td>
				<td>kelas</td>
				<td>alamat</td>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $d)
			<tr>
				<td>{{ $d->name }}</td>
				<td>{{ $d->kelas }}</td>
				<td>{{ $d->alamt }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
	@endsection

