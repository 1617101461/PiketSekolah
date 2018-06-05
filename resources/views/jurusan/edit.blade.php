@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Jurusan
					<div class="panel-title pull-right">
						<a href="{{route('jurusan.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('jurusan.update', $jurusans->id)}}" method="post">
							<input name="_method" type="hidden" value="PATCH">
							{{csrf_field()}}

							<div class="form-group {{$errors->has('nama_jurusan') ? 'has-error' : ''}}">
								<label class="control-label">Nama Jurusan</label>
								<input type="text" name="nama_jurusan" class="form-control" value="{{$jurusans->nama_jurusan}}" required>
								@if ($errors->has('nama_jurusan'))
									<span class="help-block">
										<strong>{{$errors->first('nama_jurusan')}}</strong>
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
