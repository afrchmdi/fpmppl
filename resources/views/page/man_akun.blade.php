@extends('layout.master')

@section('content-header')
Dashboard
<small><?="Alexander Lalala"?></small>
@endsection

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <div class="col-xs-6"><h3>Manajemen - <b>Akun Pengguna</b></h3></div>
        <div class="col-xs-3"></div>
        <div class="col-xs-3"><a href="#"><button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#modal-add">Tambah User</button></a></div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Nama</th>
              <th>Username</th>
              <th>Email</th>
              <th>No Identitas</th>
              <th>Alamat</th>
              <th>No HP</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Trident</td>
                <td>Trident</td>
                <td>Internet
                Explorer 4.0
                </td>
                <td>Win 95+</td>
                <td> 4</td>
                <td>X</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Trident</td>
                <td>Trident</td>
                <td>Internet
                Explorer 5.0
                </td>
                <td>Win 95+</td>
                <td>5</td>
                <td>C</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Trident</td>
                <td>Trident</td>
                <td>Internet
                Explorer 5.5
                </td>
                <td>Win 95+</td>
                <td>5.5</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Trident</td>
                <td>Trident</td>
                <td>Internet
                Explorer 6
                </td>
                <td>Win 98+</td>
                <td>6</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Trident</td>
                <td>Trident</td>
                <td>Internet Explorer 7</td>
                <td>Win XP SP2+</td>
                <td>7</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Trident</td>
                <td>Trident</td>
                <td>AOL browser (AOL desktop)</td>
                <td>Win XP</td>
                <td>6</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Gecko</td>
                <td>Gecko</td>
                <td>Firefox 1.0</td>
                <td>Win 98+ / OSX.2+</td>
                <td>1.7</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Gecko</td>
                <td>Gecko</td>
                <td>Firefox 1.5</td>
                <td>Win 98+ / OSX.2+</td>
                <td>1.8</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Gecko</td>
                <td>Gecko</td>
                <td>Firefox 2.0</td>
                <td>Win 98+ / OSX.2+</td>
                <td>1.8</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Gecko</td>
                <td>Gecko</td>
                <td>Firefox 3.0</td>
                <td>Win 2k+ / OSX.3+</td>
                <td>1.9</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Gecko</td>
                <td>Gecko</td>
                <td>Camino 1.0</td>
                <td>OSX.2+</td>
                <td>1.8</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Gecko</td>
                <td>Gecko</td>
                <td>Camino 1.5</td>
                <td>OSX.3+</td>
                <td>1.8</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Gecko</td>
                <td>Gecko</td>
                <td>Netscape 7.2</td>
                <td>Win 95+ / Mac OS 8.6-9.2</td>
                <td>1.7</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Gecko</td>
                <td>Gecko</td>
                <td>Netscape Browser 8</td>
                <td>Win 98SE+</td>
                <td>1.7</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Gecko</td>
                <td>Gecko</td>
                <td>Netscape Navigator 9</td>
                <td>Win 98+ / OSX.2+</td>
                <td>1.8</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Gecko</td>
                <td>Gecko</td>
                <td>Mozilla 1.0</td>
                <td>Win 95+ / OSX.1+</td>
                <td>1</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Gecko</td>
                <td>Gecko</td>
                <td>Mozilla 1.1</td>
                <td>Win 95+ / OSX.1+</td>
                <td>1.1</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Gecko</td>
                <td>Gecko</td>
                <td>Mozilla 1.2</td>
                <td>Win 95+ / OSX.1+</td>
                <td>1.2</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Gecko</td>
                <td>Gecko</td>
                <td>Mozilla 1.3</td>
                <td>Win 95+ / OSX.1+</td>
                <td>1.3</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Gecko</td>
                <td>Gecko</td>
                <td>Mozilla 1.4</td>
                <td>Win 95+ / OSX.1+</td>
                <td>1.4</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Gecko</td>
                <td>Gecko</td>
                <td>Mozilla 1.5</td>
                <td>Win 95+ / OSX.1+</td>
                <td>1.5</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Gecko</td>
                <td>Gecko</td>
                <td>Mozilla 1.6</td>
                <td>Win 95+ / OSX.1+</td>
                <td>1.6</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Gecko</td>
                <td>Gecko</td>
                <td>Mozilla 1.7</td>
                <td>Win 98+ / OSX.1+</td>
                <td>1.7</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Gecko</td>
                <td>Gecko</td>
                <td>Mozilla 1.8</td>
                <td>Win 98+ / OSX.1+</td>
                <td>1.8</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Gecko</td>
                <td>Gecko</td>
                <td>Seamonkey 1.1</td>
                <td>Win 98+ / OSX.2+</td>
                <td>1.8</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Gecko</td>
                <td>Gecko</td>
                <td>Epiphany 2.20</td>
                <td>Gnome</td>
                <td>1.8</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Webkit</td>
                <td>Webkit</td>
                <td>Safari 1.2</td>
                <td>OSX.3</td>
                <td>125.5</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Webkit</td>
                <td>Webkit</td>
                <td>Safari 1.3</td>
                <td>OSX.3</td>
                <td>312.8</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Webkit</td>
                <td>Webkit</td>
                <td>Safari 2.0</td>
                <td>OSX.4+</td>
                <td>419.3</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Webkit</td>
                <td>Webkit</td>
                <td>Safari 3.0</td>
                <td>OSX.4+</td>
                <td>522.1</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Webkit</td>
                <td>Webkit</td>
                <td>OmniWeb 5.5</td>
                <td>OSX.4+</td>
                <td>420</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Webkit</td>
                <td>Webkit</td>
                <td>iPod Touch / iPhone</td>
                <td>iPod</td>
                <td>420.1</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Webkit</td>
                <td>Webkit</td>
                <td>S60</td>
                <td>S60</td>
                <td>413</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Presto</td>
                <td>Presto</td>
                <td>Opera 7.0</td>
                <td>Win 95+ / OSX.1+</td>
                <td>-</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Presto</td>
                <td>Presto</td>
                <td>Opera 7.5</td>
                <td>Win 95+ / OSX.2+</td>
                <td>-</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Presto</td>
                <td>Presto</td>
                <td>Opera 8.0</td>
                <td>Win 95+ / OSX.2+</td>
                <td>-</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Presto</td>
                <td>Presto</td>
                <td>Opera 8.5</td>
                <td>Win 95+ / OSX.2+</td>
                <td>-</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Presto</td>
                <td>Presto</td>
                <td>Opera 9.0</td>
                <td>Win 95+ / OSX.3+</td>
                <td>-</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Presto</td>
                <td>Presto</td>
                <td>Opera 9.2</td>
                <td>Win 88+ / OSX.3+</td>
                <td>-</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Presto</td>
                <td>Presto</td>
                <td>Opera 9.5</td>
                <td>Win 88+ / OSX.3+</td>
                <td>-</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Presto</td>
                <td>Presto</td>
                <td>Opera for Wii</td>
                <td>Wii</td>
                <td>-</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Presto</td>
                <td>Presto</td>
                <td>Nokia N800</td>
                <td>N800</td>
                <td>-</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Presto</td>
                <td>Presto</td>
                <td>Nintendo DS browser</td>
                <td>Nintendo DS</td>
                <td>8.5</td>
                <td>C/A<sup>1</sup></td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>KHTML</td>
                <td>KHTML</td>
                <td>Konqureror 3.1</td>
                <td>KDE 3.1</td>
                <td>3.1</td>
                <td>C</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>KHTML</td>
                <td>KHTML</td>
                <td>Konqureror 3.3</td>
                <td>KDE 3.3</td>
                <td>3.3</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>KHTML</td>
                <td>KHTML</td>
                <td>Konqureror 3.5</td>
                <td>KDE 3.5</td>
                <td>3.5</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Tasman</td>
                <td>Tasman</td>
                <td>Internet Explorer 4.5</td>
                <td>Mac OS 8-9</td>
                <td>-</td>
                <td>X</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Tasman</td>
                <td>Tasman</td>
                <td>Internet Explorer 5.1</td>
                <td>Mac OS 7.6-9</td>
                <td>1</td>
                <td>C</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Tasman</td>
                <td>Tasman</td>
                <td>Internet Explorer 5.2</td>
                <td>Mac OS 8-X</td>
                <td>1</td>
                <td>C</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Misc</td>
                <td>Misc</td>
                <td>NetFront 3.1</td>
                <td>Embedded devices</td>
                <td>-</td>
                <td>C</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Misc</td>
                <td>Misc</td>
                <td>NetFront 3.4</td>
                <td>Embedded devices</td>
                <td>-</td>
                <td>A</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Misc</td>
                <td>Misc</td>
                <td>Dillo 0.8</td>
                <td>Embedded devices</td>
                <td>-</td>
                <td>X</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Misc</td>
                <td>Misc</td>
                <td>Links</td>
                <td>Text only</td>
                <td>-</td>
                <td>X</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Misc</td>
                <td>Misc</td>
                <td>Lynx</td>
                <td>Text only</td>
                <td>-</td>
                <td>X</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Misc</td>
                <td>Misc</td>
                <td>IE Mobile</td>
                <td>Windows Mobile 6</td>
                <td>-</td>
                <td>C</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Misc</td>
                <td>Misc</td>
                <td>PSP browser</td>
                <td>PSP</td>
                <td>-</td>
                <td>C</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td>Other browsers</td>
                <td>Other browsers</td>
                <td>All others</td>
                <td>-</td>
                <td>-</td>
                <td>U</td>
                <td class="row">
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Lihat</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-edit">Ubah</button></a>
                <a class="col-sm-4" href="#"><button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#modal-hapus">Hapus</button></a>
                </td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <th>Nama</th>
                <th>Username</th>
                <th>Email</th>
                <th>No Identitas</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
@endsection

@section('morejs')
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>

<div class="modal fade" id="modal-info">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informasi User</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-4"><p>Nama</p></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-7">Contoh Nama 1</div>
        </div>
        <div class="row">
          <div class="col-sm-4"><p>Username</p></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-7">Contoh Username 1</div>
        </div>
        <div class="row">
          <div class="col-sm-4"><p>Email</p></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-7">email@email.com</div>
        </div>
        <div class="row">
          <div class="col-sm-4"><p>Password</p></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-7">passwordmd5</div>
        </div>
        <div class="row">
          <div class="col-sm-4"><p>No Identitas</p></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-7">01234567889</div>
        </div>
        <div class="row">
          <div class="col-sm-4"><p>Alamat</p></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-7">Contoh Alamat 1</div>
        </div>
        <div class="row">
          <div class="col-sm-4"><p>No HP</p></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-7">08991565234</div>
        </div>
        <div class="row">
          <div class="col-sm-4"><p>Aktor</p></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-7">Admin</div>
        </div>
        <div class="row">
          <div class="col-sm-4"><p>Foto Profil</p></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-4">
            {{-- gambar landscape --}}
            <a href="https://images.unsplash.com/photo-1495881674446-33314d7fb917?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80" target="_blank">
              <button type="button" class="btn btn-block btn-info col">Buka di Jendela Baru</button>
            </a>
            {{-- gambar potrait --}}
            {{-- <a href="https://images.unsplash.com/photo-1572119752777-3a4cf2d7a351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1482&q=80" target="_blank">
              <button type="button" class="btn btn-block btn-info col">Buka di Jendela Baru</button>
            </a> --}}
          </div>
        </div>
        <br>
        <div class="row justify-content-center">
          <div class="col-sm-4"></div>
          {{-- gambar landscape --}}
          <div class="col-sm-4"><img class="img-circle" src="https://images.unsplash.com/photo-1495881674446-33314d7fb917?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80" width="200dp" height="200dp" style="object-fit:cover" alt=""></div>
          <div class="col-sm-4"></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="modal-edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Informasi User</h4>
      </div>
      <div class="modal-body">
        <form role="form" action="">
            <div class="row">
                <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-nama">Nama</label></div>
                <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
                <div class="col-sm-7">
                    <input type="text" name="nama" id="Form-nama" class="form-control validate white-text" value="nama">
                </div>
            </div>
                <div class="row">
                <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-username">Username</label></div>
                <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
                <div class="col-sm-7">
                    <input type="text" name="nama" id="Form-username" class="form-control validate white-text" value="username">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-email">Email</label></div>
                <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
                <div class="col-sm-7">
                    <input type="email" name="nama" id="Form-email" class="form-control validate white-text" value="email">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-password">Password</label></div>
                <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
                <div class="col-sm-7">
                    <input type="text" name="nama" id="Form-password" class="form-control validate white-text" value="passwordmd5">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-noident">No Identitas</label></div>
                <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
                <div class="col-sm-7">
                    <input type="text" name="nama" id="Form-noident" class="form-control validate white-text" value="01234567890">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-alamat">Alamat</label></div>
                <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
                <div class="col-sm-7">
                    <input type="text" name="nama" id="Form-alamat" class="form-control validate white-text" value="alamat">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-nohp">No HP</label></div>
                <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
                <div class="col-sm-7">
                    <input type="text" name="nama" id="Form-nohp" class="form-control validate white-text" value="089934231342">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-aktor">Aktor</label></div>
                <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
                <div class="col-sm-7">
                    <select name="aktor" class="form-control">
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-foto">Foto Profil</label></div>
                <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
                <div class="col-sm-4">
                    {{-- gambar landscape --}}
                    <input type="file" id="Form-foto">
                    {{-- gambar potrait --}}
                    {{-- <a href="https://images.unsplash.com/photo-1572119752777-3a4cf2d7a351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1482&q=80" target="_blank">
                    <button type="button" class="btn btn-block btn-info col">Buka di Jendela Baru</button>
                    </a> --}}
                </div>
            </div>    
            <br>
            <div class="row justify-content-center">
                <div class="col-sm-4"></div>
                {{-- gambar landscape --}}
                <div class="col-sm-4"><img class="img-circle fa-user" id="image" src="https://images.unsplash.com/photo-1495881674446-33314d7fb917?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80" width="200dp" height="200dp" style="object-fit:cover" alt=""></div>
                {{-- gambar potrait --}}
                {{-- <div class="col-xs-12"><img src="https://images.unsplash.com/photo-1572119752777-3a4cf2d7a351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1482&q=80" style="width:inherit; height:inherit" alt=""></div> --}}
                <div class="col-sm-4"></div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Batal</button>
        <a href="/manajemen.akun">
          <button type="button" class="btn btn-success">Simpan</button>
        </a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- modal hapus -->
<div class="modal fade" id="modal-hapus">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Hapus Data User</h4>
      </div>
      <div class="modal-body">
        <p>Apakah kamu yakin <b>menghapus</b> data user ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Tidak</button>
        <button id="js-klaim-terima" data-validasi="1" data-terima="1" data-idbarang="" data-idklaim="" type="submit" class="btn btn-success">Yakin</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </form>
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="modal-add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah User</h4>
            </div>
            <div class="modal-body">
                <form role="form" action="">
                <div class="row">
                    <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-nama">Nama</label></div>
                    <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
                    <div class="col-sm-7">
                        <input type="text" name="nama" id="Form-nama" class="form-control validate white-text">
                    </div>
                </div>
                    <div class="row">
                    <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-username">Username</label></div>
                    <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
                    <div class="col-sm-7">
                        <input type="text" name="nama" id="Form-username" class="form-control validate white-text">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-email">Email</label></div>
                    <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
                    <div class="col-sm-7">
                        <input type="email" name="nama" id="Form-email" class="form-control validate white-text">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-password">Password</label></div>
                    <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
                    <div class="col-sm-7">
                        <input type="text" name="nama" id="Form-password" class="form-control validate white-text">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-noident">No Identitas</label></div>
                    <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
                    <div class="col-sm-7">
                        <input type="text" name="nama" id="Form-noident" class="form-control validate white-text">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-alamat">Alamat</label></div>
                    <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
                    <div class="col-sm-7">
                        <input type="text" name="nama" id="Form-alamat" class="form-control validate white-text">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-nohp">No HP</label></div>
                    <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
                    <div class="col-sm-7">
                        <input type="text" name="nama" id="Form-nohp" class="form-control validate white-text">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-aktor">Aktor</label></div>
                    <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
                    <div class="col-sm-7">
                        <select name="aktor" class="form-control">
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-foto">Foto Profil</label></div>
                    <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
                    <div class="col-sm-4">
                        {{-- gambar landscape --}}
                        <input type="file" id="Form-foto2">
                        {{-- gambar potrait --}}
                        {{-- <a href="https://images.unsplash.com/photo-1572119752777-3a4cf2d7a351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1482&q=80" target="_blank">
                        <button type="button" class="btn btn-block btn-info col">Buka di Jendela Baru</button>
                        </a> --}}
                    </div>
                </div>    
                <br>
                <div class="row justify-content-center">
                    <div class="col-sm-4"></div>
                    {{-- gambar landscape --}}
                    <div class="col-sm-4"><img class="img-circle" id="image2" src="/img/user.png" width="200dp" height="200dp" style="object-fit:cover" alt=""></div>
                    {{-- gambar potrait --}}
                    {{-- <div class="col-xs-12"><img src="https://images.unsplash.com/photo-1572119752777-3a4cf2d7a351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1482&q=80" style="width:inherit; height:inherit" alt=""></div> --}}
                    <div class="col-sm-4"></div>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Batal</button>
                <a href="/barang.temuan">
                <button type="button" class="btn btn-success">Tambah</button>
                </a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

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

document.getElementById("Form-foto2").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image2").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
</script>
@endsection