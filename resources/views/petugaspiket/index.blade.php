@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Petugas Piket
					<div class="panel-title pull-right">
						<a href="{{route('petugaspiket.create')}}">Tambah</a>
					</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Petugas</th>
										<th>Hari</th>
										<th>Tanggal</th>
										<th colspan="2">Action</th>
									</tr>
								</thead>
								<tbody>
									@php
										$no = 1;
									@endphp
									@foreach($petugaspikets as $data)
									<tr>
										<td>{{ $no++ }}</td>
										<td>{{ $data->nama_petugas }}</td>
										<td>{{ $data->hari }}</td>
										<td>{{ $data->tanggal }}</td>
										<td>
											<a class="btn btn-warning" href="{{route('petugaspiket.edit', $data->id)}}">Edit</a>
										</td>
										<td>
											<form method="post" action="{{route('petugaspiket.destroy', $data->id)}}">
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