@extends('layouts.template')
@section('Title', "Data Member")
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card  card-plain">
          <div class="card-header">
            <h3 class="card-title"> DATA MEMBER</h3>
            <a href="{{ route('member.create') }}" class="btn btn-primary">Tambah Data</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table tablesorter " id="">
                <thead class=" text-primary">
                  <tr>
                    <th>No</th>
                    <th class="text-center">Foto</th>
                    <th class="text-center">Nama Lengkap</th>
                    <th class="text-center">Jenis Kelamin</th>
                    <th class="text-center">No Telepon</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($members as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td><img src="{{ asset('images') }}/{{$data->namephoto}}"/ height="100" width="100"></td>
                        <td class="text-center">{{$data->nm_member}}</td>
                        <td class="text-center">{{$data->gender}}</td>
                        <td class="text-center">{{$data->nohp}}</td>
                        <td class="text-center">{{$data->alamat}}</td>
                        <td class="td-actions text-right">
                            <form action="{{ route('member.destroy', ['member'=>$data->id]) }}" method="post">
                                @csrf @method('DELETE')
                                <a class="btn btn-info btn-sm btn-round btn-icon" href="{{ route('member.edit', ['member'=>$data->id]) }}" role="button"><i class="tim-icons icon-pencil"></i></a>
                                <a class="btn btn-success btn-sm btn-round btn-icon" href="{{ route('member.show', ['member'=>$data->id]) }}" role="button"><i class="tim-icons icon-single-02"></i></a>
                                <button type="submit" class="btn btn-danger btn-sm btn-round btn-icon" onclick="return confirm('apakah anda mau menghapus data ini ?')"><i class="tim-icons icon-simple-remove"></i></button>
                            </form>
                          </td>
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
