@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
			<div class="panel-heading">SMK ASSALAM BANDUNG </div>
					<div class="panel-heading">Absensi Siswa
					<div class="panel-title pull-right">
						<a href="{{route('absensisiswa.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('absensisiswa.store')}}" method="post">
							{{csrf_field()}}

					<div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
								<label class="control-label">Nama</label>
								<input type="text" class="form-control" name="nama" required>
								@if ($errors->has('nama'))
									<span class="help-blocks">
										<strong>{{$errors->first('nama')}}</strong>
									</span>
								@endif
							</div>


					<div class="form-group {{$errors->has('kelas') ? 'has-error' : ''}}">
								<label class="control-label">Kelas</label>
								<input type="text" class="form-control" name="kelas" required>
								@if ($errors->has('kelas'))
									<span class="help-blocks">
										<strong>{{$errors->first('kelas')}}</strong>
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

					<div class="form-group {{$errors->has('keterangan') ? 'has-error' : ''}}">
								<label class="control-label">keterangan</label><br>
								<input type="radio" class="radio-control" name="keterangan" value="izin">Izin&nbsp&nbsp
								<input type="radio" class="radio-control" name="keterangan"  value="sakit">Sakit&nbsp&nbsp
								<input type="radio" class="radio-control" name="keterangan"  value="alfa">Alfa
								@if ($errors->has('keterangan'))
									<span class="help-blocks">
										<strong>{{$errors->first('keterangan')}}</strong>
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