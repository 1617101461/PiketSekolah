@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Siswa
					<div class="panel-title pull-right">
						<a href="{{route('siswa.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('siswa.update', $siswas->id)}}" method="post">
							<input name="_method" type="hidden" value="PATCH">
							{{csrf_field()}}


						<div class="form-group {{$errors->has('nis') ? 'has-error' : ''}}">
								<label class="control-label">NIS</label>
								<input type="text" name="nis" class="form-control" value="{{$siswas->nis}}" required>
								@if ($errors->has('nis'))
									<span class="help-block">
										<strong>{{$errors->first('nis')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
								<label class="control-label">Nama</label>
								<input type="text" name="nama" class="form-control" value="{{$siswas->nama}}" required>
								@if ($errors->has('nama'))
									<span class="help-block">
										<strong>{{$errors->first('nama')}}</strong>
									</span>
								@endif
							</div>

					<div class="form-group {{ $errors->has('id_kelas') ? ' has-error' : '' }}">
			  					<label class="control-label">Kelas</label>	
			  					<select name="id_kelas" class="form-control">
			  					@foreach($kelas as $data)
			  						<option value="{{ $data->id }}" {{ $selectedkelas == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama_kelas }}</option>
			  					@endforeach
			  					</select>
			  					@if ($errors->has('id_kelas'))
                            		<span class="help-block">
                                		<strong>{{ $errors->first('id_kelas') }}</strong>
                         		   	</span>
                        		@endif
			  				</div>

							<div class="form-group {{$errors->has('jk') ? 'has-error' : ''}}">
								<label class="control-label">Jenis Kelamin</label>
								<br>
								<label type="radio-inline"> 
								<input type="radio" name="jk" class="flat" value="laki-laki" {{ $siswas->jk == 'laki-laki' ? 'checked' : '' }}> Laki-laki

								<label type="radio-inline"> 
								<input type="radio" name="jk" class="flat" value="perempuan" {{ $siswas->jk == 'perempuan' ? 'checked' : '' }}> Perempuan

							</label>
								@if ($errors->has('jk'))
									<span class="help-block">
										<strong>{{$errors->first('jk')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('tempat_lahir') ? 'has-error' : ''}}">
								<label class="control-label">Tanggal</label>
								<input type="text" name="tempat_lahir" class="form-control" value="{{$siswas->tempat_lahir}}" required>
								@if ($errors->has('tempat_lahir'))
									<span class="help-block">
										<strong>{{$errors->first('tempat_lahir')}}</strong>
									</span>
								@endif
							</div>
							

							<div class="form-group {{$errors->has('tanggal_lahir') ? 'has-error' : ''}}">
								<label class="control-label">Tanggal Lahir</label>
								<input type="date" name="tanggal_lahir" class="form-control" value="{{$siswas->tanggal_lahir}}" required>
								@if ($errors->has('tanggal_lahir'))
									<span class="help-block">
										<strong>{{$errors->first('tanggal_lahir')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}">
								<label class="control-label">Alamat</label>
								<textarea name="alamat" class="form-control" name="alamat" rows="10" required>{{$siswas->alamat}}</textarea>
								@if ($errors->has('alamat'))
									<span class="help-block">
										<strong>{{$errors->first('alamat')}}</strong>
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
