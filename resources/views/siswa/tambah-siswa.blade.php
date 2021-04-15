@extends('layout.app')

	@section('content')
<h1>
	Tambah siswa
</h1>
		<div class="row col-12"> 
				<div class="card col-12">
					<div class="card-header">
					<h1>
						Tambah siswa
</h1>
					</div>

					<div class="card-body">
						<form action="{{route('create.siswa')}}" method="post">
							@csrf
						<div class="form-group">
							<label>masukkan nama</label>
							<input type="text" class="form-control" name="nama">
						</div>

						<div class="form-group">
							<label>masukkan kelas</label>
							<input type="text" class="form-control" name="kelas">
						</div>

						<div class="form-group">
							<label>masukkan alamat</label>
							<input type="text" class="form-control" name="alamat">
						</div>
						<div class="form-group">
							
							<input type="submit" class="btn btn-primary">
						</div>


					</div>
				</div>	
		</div>
		@endsection
		