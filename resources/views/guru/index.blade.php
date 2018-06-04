@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Guru
					<div class="panel-title pull-right">
						<a href="{{route('guru.create')}}">Tambah</a>
					</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>No</th>
										<th>NIK</th>
										<th>Nama</th>
										<th>Jenis Kelamin</th>
										<th>Tempat Lahir</th>
										<th>Tanggal Lahir</th>
										<th>Alamat</th>
										<th>Keahlian Bidang Studi</th>
										<th colspan="2">Action</th>
									</tr>
								</thead>
								<tbody>
									@php
										$no = 1;
									@endphp
									@foreach($gurus as $data)
									<tr>
										<td>{{ $no++ }}</td>
										<td>{{ $data->nik }}</td>
										<td>{{ $data->nama }}</td>
										<td>{{ $data->jk }}</td>
										<td>{{ $data->tempat_lahir }}</td>
										<td>{{ $data->tanggal_lahir }}</td>
										<td>{{ $data->alamat }}</td>
										<td>{{ $data->keahlian_bidang_studi }}</td>
										<td>
											<a class="btn btn-warning" href="{{route('guru.edit', $data->id)}}">Edit</a>
										</td>
										<td>
											<form method="post" action="{{route('guru.destroy', $data->id)}}">
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