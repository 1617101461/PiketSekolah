@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Edit Absensi Siswa
					<div class="panel-title pull-right">
						<a href="{{route('absensisiswa.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('absensisiswa.update', $absensisiswas->id)}}" method="post">
							<input name="_method" type="hidden" value="PATCH">
							{{csrf_field()}}

							<div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
								<label class="control-label">Nama</label>
								<input type="text" name="nama" class="form-control" value="{{$absensisiswas->nama}}" required>
								@if ($errors->has('nama'))
									<span class="help-block">
										<strong>{{$errors->first('nama')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('kelas') ? 'has-error' : ''}}">
								<label class="control-label">Kelas</label>
								<input type="text" name="kelas" class="form-control" value="{{$absensisiswas->kelas}}" required>
								@if ($errors->has('kelas'))
									<span class="help-block">
										<strong>{{$errors->first('kelas')}}</strong>
									</span>
								@endif
							</div>


							<div class="form-group {{$errors->has('tanggal') ? 'has-error' : ''}}">
								<label class="control-label">Tanggal</label>
								<input type="date" name="tanggal" class="form-control" value="{{$absensisiswas->tanggal}}" required>
								@if ($errors->has('tanggal'))
									<span class="help-block">
										<strong>{{$errors->first('tanggal')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('keterangan') ? 'has-error' : ''}}">
								<label class="control-label">keterangan</label>
								<br>
								<label type="radio-inline"> 
								<input type="radio" name="keterangan" class="flat" value="izin" {{ $absensisiswas->keterangan == 'izin' ? 'checked' : '' }}> Izin

								<label type="radio-inline"> 
								<input type="radio" name="keterangan" class="flat" value="sakit" {{ $absensisiswas->keterangan == 'sakit' ? 'checked' : '' }}> Sakit

								<label type="radio-inline"> 
								<input type="radio" name="keterangan" class="flat" value="alfa" {{ $absensisiswas->keterangan == 'alfa' ? 'checked' : '' }}> Alfa

							</label>
								@if ($errors->has('keterangan'))
									<span class="help-block">
										<strong>{{$errors->first('keterangan')}}</strong>
									</span>
								@endif
							</div>

							
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Edit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
