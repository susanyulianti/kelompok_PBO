@extends('layouts.template')
@section('Title', "Data Transaksi")
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card  card-plain">
          <div class="card-header">
            <h3 class="card-title"> DATA TRANSAKSI</h3>
            <a href="{{ route('transaction.create') }}" class="btn btn-primary">Tambah Data</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table tablesorter " id="">
                <thead class=" text-primary">
                  <tr>
                    <th>No</th>
                    <th class="text-center">Kode Transaksi</th>
                    <th class="text-center">Nama Member</th>
                    <th class="text-center">Tanggal Pinjam</th>
                    <th class="text-center">Keterangan</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td class="text-center">{{$data->kd_transaksi}}</td>
                        <td class="text-center">{{$data->member->nm_member}}</td>
                        <td class="text-center">{{$data->tgl_pinjam}}</td>
                        <td class="text-center">{{$data->keterangan}}</td>
                        <td class="td-actions text-right">
                            <form action="{{ route('transaction.destroy', ['transaction'=>$data->id]) }}" method="post">
                                @csrf @method('DELETE')
                                <a class="btn btn-info btn-sm btn-round btn-icon" href="{{ route('transaction.edit', ['transaction'=>$data->id]) }}" role="button"><i class="tim-icons icon-pencil"></i></a>
                                <a class="btn btn-success btn-sm btn-round btn-icon" href="{{ route('transaction.show', ['transaction'=>$data->id]) }}" role="button"><i class="tim-icons icon-single-02"></i></a>
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
