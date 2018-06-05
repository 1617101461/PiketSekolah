@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Siswa
					<div class="panel-title pull-right">
						<a href="{{route('siswa.index')}}">Tambah</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('siswa.store')}}" method="post">
							{{csrf_field()}}

					<div class="form-group {{$errors->has('nis') ? 'has-error' : ''}}">
								<label class="control-label">NIS</label>
								<input type="text" class="form-control" name="nis" required>
								@if ($errors->has('nis'))
									<span class="help-blocks">
										<strong>{{$errors->first('nis')}}</strong>
									</span>
								@endif
							</div>

					<div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
								<label class="control-label">Nama</label>
								<input type="text" class="form-control" name="nama" required>
								@if ($errors->has('nama'))
									<span class="help-blocks">
										<strong>{{$errors->first('nama')}}</strong>
									</span>
								@endif
							</div>
		

					<div class="form-group {{ $errors->has('id_kelas') ? ' has-error' : '' }}">
			  					<label class="control-label">Kelas </label>	
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

					<div class="form-group {{$errors->has('jk') ? 'has-error' : ''}}">
								<label class="control-label">Jenis Kelamin</label><br>
								<input type="radio" class="radio-control" name="jk" value="laki-laki">Laki-laki&nbsp&nbsp
								<input type="radio" class="radio-control" name="jk"  value="perempuan">Perempuan&nbsp&nbsp
								@if ($errors->has('jk'))
									<span class="help-blocks">
										<strong>{{$errors->first('jk')}}</strong>
									</span>
								@endif
							</div>

					<div class="form-group {{$errors->has('tempat_lahir') ? 'has-error' : ''}}">
								<label class="control-label">Tempat Lahir</label>
								<input type="text" class="form-control" name="tempat_lahir" required>
								@if ($errors->has('tempat_lahir'))
									<span class="help-blocks">
										<strong>{{$errors->first('tempat_lahir')}}</strong>
									</span>
								@endif
							</div>


					<div class="form-group {{$errors->has('tanggal_lahir') ? 'has-error' : ''}}">
								<label class="control-label">Tanggal Lahir</label>
								<input type="date" class="form-control" name="tanggal_lahir" required>
								@if ($errors->has('tanggal_lahir'))
									<span class="help-blocks">
										<strong>{{$errors->first('tanggal_lahir')}}</strong>
									</span>
								@endif
							</div>

					<div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}">
								<label class="control-label">Alamat</label>
								<textarea type="text" class="form-control" name="alamat" rows="10" required></textarea>
								@if ($errors->has('alamat'))
									<span class="help-blocks">
										<strong>{{$errors->first('alamat')}}</strong>
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