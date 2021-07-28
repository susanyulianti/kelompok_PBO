@extends('layouts.template')
@section('Title', "Profile")
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card  card-plain">
          <div class="card-header">
            <h3 class="card-title"> My Profile</h3>
            <div class="card">
  <div class="card-body">

      <div class="form-row">
        <div class="form-group col-md-12">
            <label for="inputAddress">Nama</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Password</label>
          <input type="password" class="form-control" name="password" id="password" value="{{ $user->password }}">
        </div>
      </div>
    </form>
  </div>
</div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection