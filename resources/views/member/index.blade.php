@extends('layouts.template')
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card  card-plain">
          <div class="card-header">
            <h4 class="card-title"> Table on Plain Background</h4>
            <p class="category"> Here is a subtitle for this table</p>
            <a href="{{ route('member.create') }}" class="btn btn-primary">Tambah Data</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table tablesorter " id="">
                <thead class=" text-primary">
                  <tr>
                    <th>No</th>
                    <th class="text-center">Nama Lengkap</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($members as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td class="text-center">{{$data->nama_lengkap}}</td>
                        <td>{{$data->kelas}}</td>
                        <td>{{$data->jurusan}}</td>
                        <td>{{$data->tanggal_lahir}}</td>
                        <td>{{$data->jenis_kelamin}}</td>
                        <td>{{$data->no_telp}}</td>
                        <td>{{$data->alamat}}</td>
                    </tr>
                </tbody>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
