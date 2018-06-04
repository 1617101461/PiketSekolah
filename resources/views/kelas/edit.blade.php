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
						<form action="{{route('kelas.update', $kelas->id)}}" method="post">
							<input name="_method" type="hidden" value="PATCH">
							{{csrf_field()}}


						<div class="form-group {{$errors->has('nama_kelas') ? 'has-error' : ''}}">
								<label class="control-label">Nama Kelas</label>
								<input type="text" name="nama_kelas" class="form-control" value="{{$kelas->nama_kelas}}" required>
								@if ($errors->has('nama_kelas'))
									<span class="help-block">
										<strong>{{$errors->first('nama_kelas')}}</strong>
									</span>
								@endif
							</div>

					<div class="form-group {{ $errors->has('id_jurusans') ? ' has-error' : '' }}">
			  			<label class="control-label">Jurusan</label>	
			  			<select name="id_jurusans" class="form-control">
			  				@foreach($jurusans as $data)
			  				<option value="{{ $data->id }}" {{ $selectedjurusan == $data->id ? 'selected="selected"' : '' }} >{{ $data->jurusan }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_jurusans'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_jurusans') }}</strong>
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
