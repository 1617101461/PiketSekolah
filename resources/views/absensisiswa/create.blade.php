@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Absensi Siswa
					<div class="panel-title pull-right">
						<a href="{{route('absensisiswa.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('absensisiswa.store')}}" method="post">
							{{csrf_field()}}

					<div class="form-group {{ $errors->has('id_siswa') ? ' has-error' : '' }}">
			  					<label class="control-label">Nama Siswa </label>	
			  					<select name="id_siswas" class="form-control">
			  					<option>Pilih Siswa</option>
			  					@foreach($siswas as $data)
			  						<option value="{{ $data->id }}">{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_siswas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_siswas') }}</strong>
                            </span>
                        @endif
			  		</div>
					

					<div class="form-group {{ $errors->has('id_kelas') ? ' has-error' : '' }}">
			  					<label class="control-label">Nama Kelas </label>	
			  					<select name="id_kelas" class="form-control">
			  					<option>Pilih Kelas</option>
			  					@foreach($kelas as $data)
			  						<option value="{{ $data->id }}">{{ $data->nama_kelas }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_kelas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_kelas') }}</strong>
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

					<div class="form-group {{ $errors->has('id_petugaspikets') ? ' has-error' : '' }}">
			  					<label class="control-label">Nama Petugas </label>	
			  					<select name="id_petugaspikets" class="form-control">
			  					<option>Pilih Petugas</option>
			  					@foreach($petugaspikets as $data)
			  						<option value="{{ $data->id }}">{{ $data->nama_petugas }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_petugaspikets'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_petugaspikets') }}</strong>
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