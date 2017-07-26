@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Data Siswa</div>
                <div class="panel-body">
          <form method="post" action="{{url('siswa')}}" enctype="multipart/form-data">
          {{ csrf_field()}}
          	<div class="form-group">
				<label>NIS</label> 
				<input type="text" name="nis" class="form-control" required="">
			</div>
			<div class="form-group">
				<label>Nama</label> 
				<input type="text" name="nama" class="form-control" required="">
			</div>
			<div class="form-group">
				<label>Kelas</label> 
				<select class="form-control" required="" name="kelas">
					<option value="X RPL 1">X RPL 1</option>
					<option value="X RPL 2">X RPL 2</option>
					<option value="X RPL 3">X RPL 3</option>
					<option value="XI RPL 1">XI RPL 1</option>
					<option value="XI RPL 2">XI RPL 2</option>
					<option value="XI RPL 3">XI RPL 3</option>
					<option value="XII RPL 1">XII RPL 1</option>
					<option value="XII RPL 2">XII RPL 2</option>
					<option value="XII RPL 3">XII RPL 3</option>
				</select>
			</div>
			<div class="form-group">
			<label>Foto</label>
				<input type="file" name="foto" required="">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Simpan</button>
				<button type="reset" class="btn btn-info">Reset</button>
			</div>
          </form>
			

                </div>
            </div>
        </div>
    </div>
</div>
@endsection