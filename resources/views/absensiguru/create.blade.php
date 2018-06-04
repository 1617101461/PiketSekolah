@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Absensi Guru
					<div class="panel-title pull-right">
						<a class="btn btn-primary" href="{{route('absensiguru.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('absensiguru.store')}}" method="post">
							{{csrf_field()}}

					<div class="form-group {{ $errors->has('id_gurus') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama </label>	
			  			<select name="id_gurus" class="form-control">
			  				<option>Pilih Guru</option>
			  				@foreach($gurus as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_gurus'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_gurus') }}</strong>
                            </span>
                        @endif
			  		</div>

					
					<div class="form-group {{ $errors->has('id_gurus') ? ' has-error' : '' }}">
			  			<label class="control-label">Keahlian Bidang Studi </label>	
			  			<select name="id_gurus" class="form-control">
			  				<option>Pilih Keahlian</option>
			  				@foreach($gurus as $data)
			  				<option value="{{ $data->id }}">{{ $data->keahlian_bidang_studi }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_gurus'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_gurus') }}</strong>
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