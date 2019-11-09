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
        <div class="col-xs-6"><h3>Riwayat Akun - <b>Postingan Penemuan</b></h3></div>
        <div class="col-xs-3"></div>
        <div class="col-xs-3"><a href="#"><button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#modal-default3">Post Barang Temuan</button></a></div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Nama Barang</th>
              <th>Lokasi</th>
              <th>Waktu</th>
              <th>Kategori</th>
              <th>Validasi</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>Trident</td>
              <td>Internet
                Explorer 4.0
              </td>
              <td>Win 95+</td>
              <td> 4</td>
              <td>X</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Trident</td>
              <td>Internet
                Explorer 5.0
              </td>
              <td>Win 95+</td>
              <td>5</td>
              <td>C</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Trident</td>
              <td>Internet
                Explorer 5.5
              </td>
              <td>Win 95+</td>
              <td>5.5</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Trident</td>
              <td>Internet
                Explorer 6
              </td>
              <td>Win 98+</td>
              <td>6</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Trident</td>
              <td>Internet Explorer 7</td>
              <td>Win XP SP2+</td>
              <td>7</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Trident</td>
              <td>AOL browser (AOL desktop)</td>
              <td>Win XP</td>
              <td>6</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Firefox 1.0</td>
              <td>Win 98+ / OSX.2+</td>
              <td>1.7</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Firefox 1.5</td>
              <td>Win 98+ / OSX.2+</td>
              <td>1.8</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Firefox 2.0</td>
              <td>Win 98+ / OSX.2+</td>
              <td>1.8</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Firefox 3.0</td>
              <td>Win 2k+ / OSX.3+</td>
              <td>1.9</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Camino 1.0</td>
              <td>OSX.2+</td>
              <td>1.8</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Camino 1.5</td>
              <td>OSX.3+</td>
              <td>1.8</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Netscape 7.2</td>
              <td>Win 95+ / Mac OS 8.6-9.2</td>
              <td>1.7</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Netscape Browser 8</td>
              <td>Win 98SE+</td>
              <td>1.7</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Netscape Navigator 9</td>
              <td>Win 98+ / OSX.2+</td>
              <td>1.8</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Mozilla 1.0</td>
              <td>Win 95+ / OSX.1+</td>
              <td>1</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Mozilla 1.1</td>
              <td>Win 95+ / OSX.1+</td>
              <td>1.1</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Mozilla 1.2</td>
              <td>Win 95+ / OSX.1+</td>
              <td>1.2</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Mozilla 1.3</td>
              <td>Win 95+ / OSX.1+</td>
              <td>1.3</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Mozilla 1.4</td>
              <td>Win 95+ / OSX.1+</td>
              <td>1.4</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Mozilla 1.5</td>
              <td>Win 95+ / OSX.1+</td>
              <td>1.5</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Mozilla 1.6</td>
              <td>Win 95+ / OSX.1+</td>
              <td>1.6</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Mozilla 1.7</td>
              <td>Win 98+ / OSX.1+</td>
              <td>1.7</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Mozilla 1.8</td>
              <td>Win 98+ / OSX.1+</td>
              <td>1.8</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Seamonkey 1.1</td>
              <td>Win 98+ / OSX.2+</td>
              <td>1.8</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Epiphany 2.20</td>
              <td>Gnome</td>
              <td>1.8</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Webkit</td>
              <td>Safari 1.2</td>
              <td>OSX.3</td>
              <td>125.5</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Webkit</td>
              <td>Safari 1.3</td>
              <td>OSX.3</td>
              <td>312.8</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Webkit</td>
              <td>Safari 2.0</td>
              <td>OSX.4+</td>
              <td>419.3</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Webkit</td>
              <td>Safari 3.0</td>
              <td>OSX.4+</td>
              <td>522.1</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Webkit</td>
              <td>OmniWeb 5.5</td>
              <td>OSX.4+</td>
              <td>420</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Webkit</td>
              <td>iPod Touch / iPhone</td>
              <td>iPod</td>
              <td>420.1</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Webkit</td>
              <td>S60</td>
              <td>S60</td>
              <td>413</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Presto</td>
              <td>Opera 7.0</td>
              <td>Win 95+ / OSX.1+</td>
              <td>-</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Presto</td>
              <td>Opera 7.5</td>
              <td>Win 95+ / OSX.2+</td>
              <td>-</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Presto</td>
              <td>Opera 8.0</td>
              <td>Win 95+ / OSX.2+</td>
              <td>-</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Presto</td>
              <td>Opera 8.5</td>
              <td>Win 95+ / OSX.2+</td>
              <td>-</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Presto</td>
              <td>Opera 9.0</td>
              <td>Win 95+ / OSX.3+</td>
              <td>-</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Presto</td>
              <td>Opera 9.2</td>
              <td>Win 88+ / OSX.3+</td>
              <td>-</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Presto</td>
              <td>Opera 9.5</td>
              <td>Win 88+ / OSX.3+</td>
              <td>-</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Presto</td>
              <td>Opera for Wii</td>
              <td>Wii</td>
              <td>-</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Presto</td>
              <td>Nokia N800</td>
              <td>N800</td>
              <td>-</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Presto</td>
              <td>Nintendo DS browser</td>
              <td>Nintendo DS</td>
              <td>8.5</td>
              <td>C/A<sup>1</sup></td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>KHTML</td>
              <td>Konqureror 3.1</td>
              <td>KDE 3.1</td>
              <td>3.1</td>
              <td>C</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>KHTML</td>
              <td>Konqureror 3.3</td>
              <td>KDE 3.3</td>
              <td>3.3</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>KHTML</td>
              <td>Konqureror 3.5</td>
              <td>KDE 3.5</td>
              <td>3.5</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Tasman</td>
              <td>Internet Explorer 4.5</td>
              <td>Mac OS 8-9</td>
              <td>-</td>
              <td>X</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Tasman</td>
              <td>Internet Explorer 5.1</td>
              <td>Mac OS 7.6-9</td>
              <td>1</td>
              <td>C</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Tasman</td>
              <td>Internet Explorer 5.2</td>
              <td>Mac OS 8-X</td>
              <td>1</td>
              <td>C</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Misc</td>
              <td>NetFront 3.1</td>
              <td>Embedded devices</td>
              <td>-</td>
              <td>C</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Misc</td>
              <td>NetFront 3.4</td>
              <td>Embedded devices</td>
              <td>-</td>
              <td>A</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Misc</td>
              <td>Dillo 0.8</td>
              <td>Embedded devices</td>
              <td>-</td>
              <td>X</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Misc</td>
              <td>Links</td>
              <td>Text only</td>
              <td>-</td>
              <td>X</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Misc</td>
              <td>Lynx</td>
              <td>Text only</td>
              <td>-</td>
              <td>X</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Misc</td>
              <td>IE Mobile</td>
              <td>Windows Mobile 6</td>
              <td>-</td>
              <td>C</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Misc</td>
              <td>PSP browser</td>
              <td>PSP</td>
              <td>-</td>
              <td>C</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            <tr>
              <td>Other browsers</td>
              <td>All others</td>
              <td>-</td>
              <td>-</td>
              <td>U</td>
              <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button></a>
              </td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <th>Nama Barang</th>
                <th>Lokasi</th>
                <th>Waktu</th>
                <th>Kategori</th>
                <th>Validasi</th>
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
{{-- Date picker --}}
<script>
$(function () {
  $('#datepicker').datepicker({
  autoclose: true
  })
  $('#datepicker2').datepicker({
  autoclose: true
  })
})
</script>

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informasi Barang Temuan</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-4"><p>Nama Barang</p></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-7">Contoh Barang 1</div>
        </div>
        <div class="row">
          <div class="col-sm-4"><p>Lokasi Ditemukan</p></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-7">Contoh Lokasi 1</div>
        </div>
        <div class="row">
          <div class="col-sm-4"><p>Deskripsi Barang</p></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-7">Contoh Deskripsi Barang Deskripsi Barang Deskripsi Barang Deskripsi Barang  Barang Deskripsi Barang Deskripsi Barang Deskripsi Barang</div>
        </div>
        <div class="row">
          <div class="col-sm-4"><p>Waktu Ditemukan</p></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-7">Contoh Waktu</div>
        </div>
        <div class="row">
          <div class="col-sm-4"><p>Kategori</p></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-7">Contoh Kategori 1</div>
        </div>
        <div class="row">
          <div class="col-sm-4"><p>Validasi Barang</p></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-7">Contoh Validasi 1</div>
        </div>
        <div class="row">
          <div class="col-sm-4"><p>Foto Barang</p></div>
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
          {{-- gambar landscape --}}
          <div class="col-xs-12"><img src="https://images.unsplash.com/photo-1495881674446-33314d7fb917?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80" style="width:inherit; height:inherit" alt=""></div>
          {{-- gambar potrait --}}
          {{-- <div class="col-xs-12"><img src="https://images.unsplash.com/photo-1572119752777-3a4cf2d7a351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1482&q=80" style="width:inherit; height:inherit" alt=""></div> --}}
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

<div class="modal fade" id="modal-default2">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Barang Temuan</h4>
      </div>
      <div class="modal-body">
        <form role="form" action="">
          <div class="row">
            <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-namabarang">Nama Barang</label></div>
            <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
            <div class="col-sm-7"><input type="text" id="Form-namabarang" class="form-control validate white-text" value="Contoh Barang 1"></div>
          </div>
          <div class="row">
            <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-lokasi">Lokasi Ditemukan</label></div>
            <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
            <div class="col-sm-7"><input type="text" id="Form-lokasi" class="form-control validate white-text" value="Contoh Lokasi 1"></div>
          </div>
          <div class="row">
            <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-deskripsi">Deskripsi Barang</label></div>
            <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
            <div class="col-sm-7">
              <textarea name="deskripsi" class="form-control validate white-text" id="Form-deskripsi" rows="10">
                Contoh Deskripsi Barang Deskripsi Barang Deskripsi Barang Deskripsi Barang  Barang Deskripsi Barang Deskripsi Barang Deskripsi Barang
              </textarea>
              {{-- <input type="text-area" id="Form-deskripsi" class="form-control validate white-text" value="Contoh Deskripsi Barang Deskripsi Barang Deskripsi Barang Deskripsi Barang  Barang Deskripsi Barang Deskripsi Barang Deskripsi Barang"> --}}
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4"><label data-error="wrong" data-success="right" for="datepicker">Waktu Ditemukan</label></div>
            <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
            <div class="col-sm-7">
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-right" id="datepicker" value="01/23/2019">
              </div>
              <!-- /.input group -->
              {{-- <input type="date" id="Form-waktu" class="form-control validate white-text" value="2019-01-23"> --}}
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4"><p style="font-weight:700">Kategori</p></div>
            <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
            <div class="col-sm-7">
              <select class="form-control">
                <option value="Contoh Kategori 1">Contoh Kategori 1</option>
                <option value="Contoh Kategori 2">Contoh Kategori 2</option>
                <option value="Contoh Kategori 3">Contoh Kategori 3</option>
                <option value="Contoh Kategori 4">Contoh Kategori 4</option>
              </select>
              {{-- <input type="radio" id="Form-kategori1" class="form-control validate white-text" value="Contoh Kategori 1" checked>
              <label data-error="wrong" data-success="right" for="Form-kategori1">Contoh Kategori 1</label>
              <input type="radio" id="Form-kategori2" class="form-control validate white-text" value="Contoh Kategori 2" checked>
              <label data-error="wrong" data-success="right" for="Form-kategori2">Contoh Kategori 2</label>
              <input type="radio" id="Form-kategori3" class="form-control validate white-text" value="Contoh Kategori 3" checked>
              <label data-error="wrong" data-success="right" for="Form-kategori3">Contoh Kategori 3</label>
              <input type="radio" id="Form-kategori4" class="form-control validate white-text" value="Contoh Kategori 4" checked>
              <label data-error="wrong" data-success="right" for="Form-kategori4">Contoh Kategori 4</label> --}}
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4"><p style="font-weight:700">Validasi Barang</p></div>
            <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
            <div class="col-sm-7">
              <select class="form-control">
                <option value="Contoh Validasi 1">Contoh Validasi 1</option>
                <option value="Contoh Validasi 2">Contoh Validasi 2</option>
              </select>
              {{-- <input type="radio" id="Form-validasi1" class="form-control validate white-text" value="Contoh Validasi 1" checked>
              <label data-error="wrong" data-success="right" for="Form-validasi1">Contoh Validasi 1</label>
              <input type="radio" id="Form-validasi2" class="form-control validate white-text" value="Contoh Validasi 2" checked>
              <label data-error="wrong" data-success="right" for="Form-validasi2">Contoh Validasi 2</label> --}}
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-foto">Foto Barang</label></div>
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
            {{-- gambar landscape --}}
            <div class="col-xs-12"><img id="image" src="https://images.unsplash.com/photo-1495881674446-33314d7fb917?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80" style="width:inherit; height:inherit" alt=""></div>
            {{-- gambar potrait --}}
            {{-- <div class="col-xs-12"><img src="https://images.unsplash.com/photo-1572119752777-3a4cf2d7a351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1482&q=80" style="width:inherit; height:inherit" alt=""></div> --}}
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Batal</button>
        <a href="/riwayat.postingan.penemuan">
          <button type="button" class="btn btn-success">Simpan</button>
        </a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="modal-default3">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Posting Barang Temuan</h4>
        </div>
        <div class="modal-body">
          <form role="form" action="">
            <div class="row">
              <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-namabarang">Nama Barang</label></div>
              <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
              <div class="col-sm-7"><input type="text" id="Form-namabarang" class="form-control validate white-text"></div>
            </div>
            <div class="row">
              <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-lokasi">Lokasi Ditemukan</label></div>
              <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
              <div class="col-sm-7"><input type="text" id="Form-lokasi" class="form-control validate white-text"></div>
            </div>
            <div class="row">
              <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-deskripsi">Deskripsi Barang</label></div>
              <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
              <div class="col-sm-7">
                <textarea name="deskripsi" class="form-control validate white-text" id="Form-deskripsi" rows="10"></textarea>
                {{-- <input type="text-area" id="Form-deskripsi" class="form-control validate white-text" value="Contoh Deskripsi Barang Deskripsi Barang Deskripsi Barang Deskripsi Barang  Barang Deskripsi Barang Deskripsi Barang Deskripsi Barang"> --}}
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4"><label data-error="wrong" data-success="right" for="datepicker">Waktu Ditemukan</label></div>
              <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
              <div class="col-sm-7">
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker2">
                </div>
                <!-- /.input group -->
                {{-- <input type="date" id="Form-waktu" class="form-control validate white-text" value="2019-01-23"> --}}
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4"><p style="font-weight:700">Kategori</p></div>
              <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
              <div class="col-sm-7">
                <select class="form-control">
                  <option value="Contoh Kategori 1">Contoh Kategori 1</option>
                  <option value="Contoh Kategori 2">Contoh Kategori 2</option>
                  <option value="Contoh Kategori 3">Contoh Kategori 3</option>
                  <option value="Contoh Kategori 4">Contoh Kategori 4</option>
                </select>
                {{-- <input type="radio" id="Form-kategori1" class="form-control validate white-text" value="Contoh Kategori 1" checked>
                <label data-error="wrong" data-success="right" for="Form-kategori1">Contoh Kategori 1</label>
                <input type="radio" id="Form-kategori2" class="form-control validate white-text" value="Contoh Kategori 2" checked>
                <label data-error="wrong" data-success="right" for="Form-kategori2">Contoh Kategori 2</label>
                <input type="radio" id="Form-kategori3" class="form-control validate white-text" value="Contoh Kategori 3" checked>
                <label data-error="wrong" data-success="right" for="Form-kategori3">Contoh Kategori 3</label>
                <input type="radio" id="Form-kategori4" class="form-control validate white-text" value="Contoh Kategori 4" checked>
                <label data-error="wrong" data-success="right" for="Form-kategori4">Contoh Kategori 4</label> --}}
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4"><p style="font-weight:700">Validasi Barang</p></div>
              <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
              <div class="col-sm-7">
                <select class="form-control">
                  <option value="Contoh Validasi 1">Contoh Validasi 1</option>
                  <option value="Contoh Validasi 2">Contoh Validasi 2</option>
                </select>
                {{-- <input type="radio" id="Form-validasi1" class="form-control validate white-text" value="Contoh Validasi 1" checked>
                <label data-error="wrong" data-success="right" for="Form-validasi1">Contoh Validasi 1</label>
                <input type="radio" id="Form-validasi2" class="form-control validate white-text" value="Contoh Validasi 2" checked>
                <label data-error="wrong" data-success="right" for="Form-validasi2">Contoh Validasi 2</label> --}}
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-foto2">Foto Barang</label></div>
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
              {{-- gambar landscape --}}
              <div class="col-xs-12"><img id="image2" src="/img/foto_barang.png" style="width:inherit; height:inherit" alt=""></div>
              {{-- gambar potrait --}}
              {{-- <div class="col-xs-12"><img src="https://images.unsplash.com/photo-1572119752777-3a4cf2d7a351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1482&q=80" style="width:inherit; height:inherit" alt=""></div> --}}
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Batal</button>
          <a href="/riwayat.postingan.penemuan">
            <button type="button" class="btn btn-success">Posting</button>
          </a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

{{-- tampilkan foto terbaru yang diupload --}}
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