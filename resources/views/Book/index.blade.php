@extends('layouts.template')
@section('Title', "Data Buku")
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card  card-plain">
          <div class="card-header">
            <h3 class="card-title"> DATA BUKU </h3>
            <a href="{{ route('book.create') }}" class="btn btn-primary">Tambah Data</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table tablesorter " id="">
                <thead class=" text-primary">
                  <tr>
                    <th>No</th>
                    <th class="text-center">Foto</th>
                    <th class="text-center">Judul Buku</th>
                    <th class="text-center">Jenis Buku</th>
                    <th class="text-center">Jumlah Buku</th>
                    <th class="text-center">Pengarang</th>
                    <th class="text-center">Penerbit</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($books as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td><img src="{{ asset('images') }}/{{$data->namephoto}}"/ height="100" width="100"></td>
                        <td class="text-center">{{$data->judul_buku}}</td>
                        <td class="text-center">{{$data->jenis_buku}}</td>
                        <td class="text-center">{{$data->jumlah_buku}}</td>
                        <td class="text-center">{{$data->pengarang}}</td>
                        <td class="text-center">{{$data->penerbit}}</td>
                        <td class="td-actions text-right">
                            <form action="{{ route('book.destroy', ['book'=>$data->id]) }}" method="post">
                                @csrf @method('DELETE')
                                <a class="btn btn-info btn-sm btn-round btn-icon" href="{{ route('book.edit', ['book'=>$data->id]) }}" role="button"><i class="tim-icons icon-pencil"></i></a>
                                <a class="btn btn-success btn-sm btn-round btn-icon" href="{{ route('book.show', ['book'=>$data->id]) }}" role="button"><i class="tim-icons icon-single-02"></i></a>
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
