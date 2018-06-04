@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Kelas
					<div class="panel-title pull-right">
						<a href="{{route('kelas.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('kelas.store')}}" method="post">
							{{csrf_field()}}

					<div class="form-group {{$errors->has('nama_kelas') ? 'has-error' : ''}}">
								<label class="control-label">Nama Kelas</label>
								<input type="text" class="form-control" name="nama_kelas" required>
								@if ($errors->has('nama_kelas'))
									<span class="help-blocks">
										<strong>{{$errors->first('nama_kelas')}}</strong>
									</span>
								@endif
							</div>

					<div class="form-group {{ $errors->has('id_jurusans') ? ' has-error' : '' }}">
			  					<label class="control-label">Nama Jurusan </label>	
			  					<select name="id_jurusans" class="form-control">
			  					<option>Pilih Jurusan</option>
			  					@foreach($jurusans as $data)
			  						<option value="{{ $data->id }}">{{ $data->nama_jurusan }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_jurusans'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_jurusans') }}</strong>
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