@extends('layout.master')

@section('content-header')
Profil
{{-- <small>{{Auth::user()->nama}}</small> --}}
@endsection

@section('content')
<div class="container">
    <h3>Data Diri</h3>
    <div class="row justify-content-center">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <img class="img-circle" src="/img/team1.jpg" alt="foto_profil" width="200dp" height="200dp" style="object-fit:cover">
        </div>
        <div class="col-md-4"></div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-2">Nama</div>
        <div class="col-md-1" style="padding-right:0; padding-left:0; width:1%">:</div>
        <div class="col-md-7">
            <p>Contoh Nama</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">Username</div>
        <div class="col-md-1" style="padding-right:0; padding-left:0; width:1%">:</div>
        <div class="col-md-7">
            <p>ContohUsername</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">Email</div>
        <div class="col-md-1" style="padding-right:0; padding-left:0; width:1%">:</div>
        <div class="col-md-7">
            <p>email@email.com</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">No Identitas</div>
        <div class="col-md-1" style="padding-right:0; padding-left:0; width:1%">:</div>
        <div class="col-md-7">
            <p>05111740000120</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">Alamat</div>
        <div class="col-md-1" style="padding-right:0; padding-left:0; width:1%">:</div>
        <div class="col-md-7">
            <p>Jalan jalan di bumi</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">No HP</div>
        <div class="col-md-1" style="padding-right:0; padding-left:0; width:1%">:</div>
        <div class="col-md-7">
            <p>0899656871223</p>
        </div>
    </div>
    {{-- <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Retype Password</label>
    <div class="col-sm-8">
        <input type="password" class="form-control" id="inputPassword2" value="Contoh Password">
    </div>
    </div> --}}
    <div class="col-sm-offset-4 col-sm-1">
        <a href="/edit.password">
            <button type="submit" class="btn btn-primary">Ubah Password</button>
        </a>
    </div>
    <div class="col-sm-offset-1 col-sm-1">
        <a href="/edit.profil">
            <button type="submit" class="btn btn-info">Edit</button>
        </a>
    </div>
</div>
@endsection