@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Petugas Piket
					<div class="panel-title pull-right">
						<a href="{{route('petugaspiket.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('petugaspiket.store')}}" method="post">
							{{csrf_field()}}

					<div class="form-group {{$errors->has('nama_petugas') ? 'has-error' : ''}}">
								<label class="control-label">Nama Petugas</label>
								<input type="text" class="form-control" name="nama_petugas" required>
								@if ($errors->has('nama_petugas'))
									<span class="help-blocks">
										<strong>{{$errors->first('nama_petugas')}}</strong>
									</span>
								@endif
							</div>
					
					<div class="form-group {{$errors->has('hari') ? 'has-error' : ''}}">
								<label class="control-label">Hari</label>
								<input type="text" class="form-control" name="hari" required>
								@if ($errors->has('hari'))
									<span class="help-blocks">
										<strong>{{$errors->first('hari')}}</strong>
									</span>
								@endif
							</div>
						
						<div class="form-group {{$errors->has('tanggal') ? 'has-error' : ''}}">
								<label class="control-label">Tanggal</label>
								<input type="date" class="form-control" name="tanggal" required>
								@if ($errors->has('tanggal'))
									<span class="help-blocks">
										<strong>{{$errors->first('tanggal')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary">Tambah</button>
							</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection