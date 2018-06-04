@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Edit Absensi Guru
					<div class="panel-title pull-right">
						<a href="{{route('absensiguru.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('absensiguru.update', $absensigurus->id)}}" method="post">
							<input name="_method" type="hidden" value="PATCH">
							{{csrf_field()}}

							<div class="form-group {{ $errors->has('id_gurus') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Guru</label>	
			  			<select name="id_gurus" class="form-control">
			  				@foreach($gurus as $data)
			  				<option value="{{ $data->id }}" {{ $selectedguru == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_gurus'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_gurus') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group {{ $errors->has('id_gurus') ? ' has-error' : '' }}">
			  			<label class="control-label">Keahlian Bidang Studi</label>	
			  			<select name="id_gurus" class="form-control">
			  				@foreach($gurus as $data)
			  				<option value="{{ $data->id }}" {{ $selectedguru == $data->id ? 'selected="selected"' : '' }} >{{ $data->keahlian_bidang_studi }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_gurus'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_gurus') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		

							<div class="form-group {{$errors->has('keterangan') ? 'has-error' : ''}}">
								<label class="control-label">Keterangan</label>
								<br>
								<label type="radio-inline"> 
								<input type="radio" name="keterangan" class="flat" value="izin" {{ $absensigurus->keterangan == 'izin' ? 'checked' : '' }}> Izin

								<label type="radio-inline"> 
								<input type="radio" name="keterangan" class="flat" value="sakit" {{ $absensigurus->keterangan == 'saki' ? 'checked' : '' }}> Sakit

								<label type="radio-inline"> 
								<input type="radio" name="keterangan" class="flat" value="alfa" {{ $absensigurus->keterangan == 'alfa' ? 'checked' : '' }}> Alfa

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