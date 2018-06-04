@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Edit Guru
					<div class="panel-title pull-right">
						<a href="{{route('guru.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('guru.update', $gurus->id)}}" method="post">
							<input name="_method" type="hidden" value="PATCH">
							{{csrf_field()}}


						<div class="form-group {{$errors->has('nik') ? 'has-error' : ''}}">
								<label class="control-label">NIK</label>
								<input type="text" name="nik" class="form-control" value="{{$gurus->nik}}" required>
								@if ($errors->has('nik'))
									<span class="help-block">
										<strong>{{$errors->first('nik')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
								<label class="control-label">Nama</label>
								<input type="text" name="nama" class="form-control" value="{{$gurus->nama}}" required>
								@if ($errors->has('nama'))
									<span class="help-block">
										<strong>{{$errors->first('nama')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('jk') ? 'has-error' : ''}}">
								<label class="control-label">Jenis Kelamin</label>
								<br>
								<label type="radio-inline"> 
								<input type="radio" name="jk" class="flat" value="laki-laki" {{ $gurus->jk == 'laki-laki' ? 'checked' : '' }}> Laki-laki

								<label type="radio-inline"> 
								<input type="radio" name="jk" class="flat" value="perempuan" {{ $gurus->jk == 'perempuan' ? 'checked' : '' }}> Perempuan

							</label>
								@if ($errors->has('jk'))
									<span class="help-block">
										<strong>{{$errors->first('jk')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('tempat_lahir') ? 'has-error' : ''}}">
								<label class="control-label">Tanggal</label>
								<input type="text" name="tempat_lahir" class="form-control" value="{{$gurus->tempat_lahir}}" required>
								@if ($errors->has('tempat_lahir'))
									<span class="help-block">
										<strong>{{$errors->first('tempat_lahir')}}</strong>
									</span>
								@endif
							</div>
							

							<div class="form-group {{$errors->has('tanggal_lahir') ? 'has-error' : ''}}">
								<label class="control-label">Tanggal Lahir</label>
								<input type="date" name="tanggal_lahir" class="form-control" value="{{$gurus->tanggal_lahir}}" required>
								@if ($errors->has('tanggal_lahir'))
									<span class="help-block">
										<strong>{{$errors->first('tanggal_lahir')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}">
								<label class="control-label">Alamat</label>
								<textarea name="alamat" class="form-control" name="alamat" rows="10" required>{{$gurus->alamat}}</textarea>
								@if ($errors->has('alamat'))
									<span class="help-block">
										<strong>{{$errors->first('alamat')}}</strong>
									</span>
								@endif
							</div>

						<div class="form-group {{$errors->has('keahlian_bidang_studi') ? 'has-error' : ''}}">
								<label class="control-label">Keahlian Bidang Studi</label>
								<input type="text" name="keahlian_bidang_studi" class="form-control" value="{{$gurus->keahlian_bidang_studi}}" required>
								@if ($errors->has('keahlian_bidang_studi'))
									<span class="help-block">
										<strong>{{$errors->first('keahlian_bidang_studi')}}</strong>
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
