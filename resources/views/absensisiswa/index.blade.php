@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Absensi Siswa
					<div class="panel-title pull-right">
						<a href="{{route('absensisiswa.create')}}">Tambah</a>
					</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>kelas</th>
										<th>Tanggal</th>
										<th>Petugas Piket</th>
										<th>Keterangan</th>
										<th colspan="2">Action</th>
									</tr>
								</thead>
								<tbody>
									@php
										$no = 1;
									@endphp
									@foreach($absensisiswas as $data)
									<tr>
										<td>{{ $no++ }}</td>
										<td><p>{{ $data->absensisiswas->nama }}</p></td>
										<td><p>{{ $data->absensisiswas->nama_kelas }}</p></td>
										<td>{{ $data->tanggal }}</td>
										<td><p>{{ $data->absensisiswas->nama_petugas }}</p></td>
										<td>{{ $data->keterangan }}</td>
										<td>
											<a class="btn btn-warning" href="{{route('absensisiswa.edit', $data->id)}}">Edit</a>
										</td>
										<td>
											<form method="post" action="{{route('absensisiswa.destroy', $data->id)}}">
												<input name="_token" type="hidden" value="{{csrf_token()}}">
												<input type="hidden" name="_method" value="DELETE">
												<button type="submit" class="btn btn-danger">Delete</button>
											</form>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection