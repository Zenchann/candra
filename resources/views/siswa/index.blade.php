@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Data Siswa</div>
                <div class="panel-body">
                    <center><a class="btn btn-success" href="{{url('siswa/create')}}">Tambah Data Siswa</a></center>
                    <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Foto</th>
                            <th colspan="2">Aksi</th>
                        </tr>
                    </thead>
                    @php
                    $no = 1;
                    @endphp
                    <tbody>
                    @foreach($siswas as $siswa)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$siswa->nis}}</td>
                        <td>{{$siswa->nama}}</td>
                        <td>{{$siswa->kelas}}</td>
                        <td><img src="{{ asset('assets/img/'.$siswa->foto.'') }}" style="width: 50px; height: 50px"></td>
                        <td><form method="POST" action="{{ route('siswa.destroy', $siswa->id) }}" accept-charset="UTF-8">
                                    <input name="_method" type="hidden" value="DELETE">
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                    <a href="{{route('siswa.show', $siswa->id)}}" class="btn btn-warning">Show</a>
                                    <a href="{{route('siswa.edit', $siswa->id)}}" class="btn btn-primary">Edit</a>
                                    <input type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete">
                                </form></td>
                        <td></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
