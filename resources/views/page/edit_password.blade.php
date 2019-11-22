@extends('layout.master')

@section('content-header')
Edit Password
{{-- <small>{{Auth::user()->nama}}</small> --}}
@endsection

@section('content')
<div class="container">
<h3>Password</h3>
<form class="form-horizontal">
    <div class="form-group">
    <label for="inputName" class="col-sm-3 control-label">Ketik Password Lama</label>
    <div class="col-sm-7">
        <input type="password" class="form-control" id="inputOldPassword">
    </div>
    </div>
    <div class="form-group">
    <label for="inputName" class="col-sm-3 control-label">Ketik Password Baru</label>
    <div class="col-sm-7">
        <input type="password" class="form-control" id="inputPassword">
    </div>
    </div>
    <div class="form-group">
    <label for="inputName" class="col-sm-3 control-label">Ketik Ulang Password Baru</label>
    <div class="col-sm-7">
        <input type="password" class="form-control" id="inputPassword2">
    </div>
    </div>
    <div class="row form-group">
        <div class="col-sm-offset-3 col-sm-1">
            <a href="/dashboard">
                <button class="btn btn-warning">Batal</button>
            </a>
        </div>
        <div class="col-sm-1">
            <a href="/dashboard">
                <button type="submit" class="btn btn-success">Simpan</button>
            </a>
        </div>
    </div>
</form>
</div>
@endsection