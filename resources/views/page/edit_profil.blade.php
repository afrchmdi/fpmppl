@extends('layout.master')

@section('content-header')
Profil
{{-- <small>{{Auth::user()->nama}}</small> --}}
@endsection

@section('content')
<h3>Data Diri</h3>
<div class="container">
<form class="form-horizontal">
    <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Nama</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="inputName" value="Contoh Nama">
    </div>
    </div>
    <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Username</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="inputUsername" value="Contoh Username">
    </div>
    </div>
    <div class="form-group">
    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-8">
        <input type="email" class="form-control" id="inputEmail" value="Contoh Email">
    </div>
    </div>
    <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">No Identitas</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="inputNoIdent" value="05111740000120">
    </div>
    </div>
    <div class="form-group">
    <label for="inputExperience" class="col-sm-2 control-label">Alamat</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="inputAddress" value="Jalan jalan di bumi">
    </div>
    </div>
    <div class="form-group">
    <label for="inputSkills" class="col-sm-2 control-label">No HP</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="inputNoPhone" value="0899656871223">
    </div>
    </div>
    <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-8">
        <input type="password" class="form-control" id="inputPassword" value="Contoh Password">
    </div>
    </div>
    {{-- <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Retype Password</label>
    <div class="col-sm-8">
        <input type="password" class="form-control" id="inputPassword2" value="Contoh Password">
    </div>
    </div> --}}
    <div class="row form-group">
        <div class="col-sm-offset-2 col-sm-1">
            <a href="">
                <button type="submit" class="btn btn-warning">Batal</button>
            </a>
        </div>
        <div class="col-sm-1">
            <a href="">
                <button type="submit" class="btn btn-success">Simpan</button>
            </a>
        </div>
    </div>
</form>
</div>
@endsection