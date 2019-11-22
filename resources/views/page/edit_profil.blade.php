@extends('layout.master')

@section('content-header')
Profil
{{-- <small>{{Auth::user()->nama}}</small> --}}
@endsection

@section('content')
<div class="container">
<h3>Data Diri</h3>
<form class="form-horizontal">
    <div class="row justify-content-center">
        <div class="col-md-4"></div>
        <div class="col-md-4"><img class="img-circle" id="image" src="/img/team1.jpg" width="200dp" height="200dp" style="object-fit:cover" alt=""></div>
        <div class="col-md-4"></div>
    </div><br>
    <div class="form-group">
    <label class="col-sm-2 control-label" data-error="wrong" data-success="right" for="Form-foto">Foto Profil</label>
    <div class="col-sm-8">
        <input type="file" id="Form-foto" style="padding-top:7px">
    </div>
    </div> 
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
</form>
    <div class="row form-group">
        <div class="col-sm-offset-2 col-sm-1">
            <a href="/profil">
                <button type="submit" class="btn btn-warning">Batal</button>
            </a>
        </div>
        <form class="form-horizontal">
        <div class="col-sm-1">
            <a href="/profil">
                <button type="submit" class="btn btn-success">Simpan</button>
            </a>
        </div>
        </form>
    </div>
</div>
@endsection

@section('morejs')
<script>
    document.getElementById("Form-foto").onchange = function () {
        var reader = new FileReader();
    
        reader.onload = function (e) {
            // get loaded data and render thumbnail.
            document.getElementById("image").src = e.target.result;
        };
    
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    };
</script>    
@endsection