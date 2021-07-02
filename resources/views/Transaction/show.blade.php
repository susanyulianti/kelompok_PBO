@extends('layouts.template')
@section('Title', 'Halaman Data Member')
@section('Title1', "Data Member")
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card  card-plain">
          <div class="card-header">
            <h4 class="card-title"> Kartu Data Member </h4>
          </div>
          <div class="card-body">
<div class="container">
    <div class="card kartu">
      <div class="row">
        <div class="col-md-4">
        <div class="foto">
          <img src="{{ asset('images') }}/{{$member->namephoto}}" alt="" width="200" height="300">
        </div>
        </div>
        <div class="col-md-8 kertas-biodata">
          <div class="biodata">
          <table width="100%" border="0">
      <tbody><tr>
          <td valign="top"><br>
            <h1>Data Member</h1><br>
          <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
            <tbody>
                <tr>
                <td width="25%" valign="top" class="textt">Kode Member</td>
                  <td width="2%">:</td>
                  <td style="color: rgb(118, 157, 29); font-weight:bold">{{ $member->kd_member}}</td>
                </tr>
                <tr>
                  <td valign="top" class="textt">Nama Member</td>
                    <td valign="top">:</td>
                    <td>{{$member->nm_member}}</td>
                </tr>
                <tr>
                  <td valign="top" class="textt">Kelas</td>
                    <td valign="top">:</td>
                    <td>{{$member->kelas}}</td>
                </tr>
                <tr>
                <td class="textt">Jurusan</td>
                  <td valign="top">:</td>
                  <td>{{$member->jurusan}}</td>
                </tr>
                <tr>
                <td class="textt">Tanggal Lahir</td>
                    <td>:</td>
                    <td>{{$member->tanggal_lahir}}</td>
                </tr>
                <tr>
                    <td class="textt">Jenis Kelamin</td>
                        <td>:</td>
                        <td>{{$member->gender}}</td>
                    </tr>
                <tr>
                <td class="textt">No Telepon</td>
                    <td valign="top">:</td>
                    <td>{{$member->nohp}}</td>
                </tr>
                <tr>
                    <td class="textt">Alamat</td>
                    <td valign="top">:</td>
                    <td>{{$member->alamat}}</td>
                </tr>
          </tbody></table>
          </td>
      </tr>
      </tbody></table>
    </div>
        </div>
      </div>
    </div>
  </div>
    </div>
        </div>
      </div>
    </div>
  </div>
@endsection
