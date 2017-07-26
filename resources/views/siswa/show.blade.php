@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Data Siswa</div>
                <div class="panel-body">
          
          
          <div class="form-group">
			
				<center><img src="{{ asset('assets/img/'.$siswas->foto.'') }}" style="width: 500px; height: 500px"></center>
		  </div>
          	<div class="form-group">
				<label>NIS</label> 
				<input type="text" name="nis" value="{{$siswas->nis}}" class="form-control" readonly>
			</div>
			<div class="form-group">
				<label>Nama</label> 
				<input type="text" value="{{$siswas->nama}}" name="nama" class="form-control" readonly>
			</div>
			<div class="form-group">
				<label>Kelas</label> 
				<input type="text" value="{{$siswas->kelas}}" name="nama" class="form-control" readonly>
			</div>
			<div class="form-group">
				<a href="{{ url()->previous() }}" class="btn btn-info">Kembali</a>
				
			</div>
			
                </div>
            </div>
        </div>
    </div>
</div>
@endsection