@extends('layout.master')

@section('content-header')
Dashboard
<small>{{Auth::user()->nama}}</small>
@endsection

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3>Laporan - <b>Klaim Kehilangan</b></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Nama Barang</th>
              <th>Pengklaim</th>
              <th>Lokasi</th>
              <th>Waktu</th>
              <th>Kategori</th>
              <th>Info</th>
              <th>Validasi</th>
            </tr>
            </thead>
            <tbody>
                @if($user != NULL)
                @foreach($user as $user)
                  <tr>
                    <td>{{$user->nama_barang}}</td>
                    <td>{{$user->nama_pengklaim}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="row">
                        <div class="col-xs-12">
                          <div class="col-xs-6">
                            <button type="button" class="btn btn-block btn-primary js-barang" data-toggle="modal" data-id="{{$user->id_barang}}" data-target="#modal-show">Barang</button>
                          </div>
                          <div class="col-xs-6">
                            <button type="button" class="btn btn-block btn-info js-klaim" data-toggle="modal" data-id="{{$user->id}}" data-target="#modal-klaim">Klaim</button>
                          </div>
                        </div>
                      </td>
                      <td class="row">
                        <div class="col-xs-12">
                          <div class="col-xs-6">
                            <button type="button" class="btn btn-block btn-success js-validasiterima" data-idbarang="{{$user->id_barang}}" data-idklaim="{{$user->id}}" data-toggle="modal" data-target="#modal-terima">Terima</button>
                          </div>
                          <div class="col-xs-6">
                            <button type="button" class="btn btn-block btn-danger js-validasitolak" data-idbarang="{{$user->id_barang}}" data-idklaim="{{$user->id}}" data-toggle="modal" data-target="#modal-tolak">Tolak</button>
                          </div>
                        </div>
                      </td>
                @endforeach
                @else
                  <td>
                  </td>
                  <td>
                  </td>
                  <td>
                  </td>
                  <td>
                  </td>
                  <td>
                  </td>
                  <td>
                  </td>
                  <td>
                  </td>
                @endif
              </tr>
            </tbody>
            <tfoot>
            <tr>
              <th>Nama Barang</th>
              <th>Pengklaim</th>
              <th>Lokasi</th>
              <th>Waktu</th>
              <th>Kategori</th>
              <th>Info</th>
              <th>Validasi</th>
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

<!-- modal barang -->
<div class="modal fade" id="modal-show">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Informasi Barang Temuan</h4>
          {{-- <p class="help-block" style="margin:0">Update terakhir 11/11/2019 23:11</p> --}}
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-4"><p>Nama Barang</p></div>
            <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
            <div class="col-sm-7" id="js-namabarang"><label class="js-namabarang"></label></div>
          </div>
          <div class="row">
            <div class="col-sm-4"><p>Lokasi Ditemukan</p></div>
            <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
            <div class="col-sm-7" id="js-lokasi"><label  class="js-lokasi"></div>
          </div>
          <div class="row">
            <div class="col-sm-4"><p>Deskripsi Barang</p></div>
            <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
            <div class="col-sm-7" id="js-deskripsi"><label class="js-deskripsi"></label></div>
          </div>
          <div class="row">
            <div class="col-sm-4"><p>Waktu Ditemukan</p></div>
            <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
            <div class="col-sm-7" id="js-waktu"><label class="js-waktu"></label></div>
          </div>
          <div class="row">
            <div class="col-sm-4"><p>Kategori</p></div>
            <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
            <div class="col-sm-7" id="js-kategori"><label class="js-kategori"></label></div>
          </div>
          <div class="row">
            <div class="col-sm-4"><p>Validasi Barang</p></div>
            <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
            <div class="col-sm-7" id="js-validasi"><label class="js-validasi"></label></div>
          </div>
          <div class="row">
            <div class="col-sm-4"><p>Foto Barang</p></div>
            <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
            <div class="col-sm-4">
              {{-- gambar landscape --}}
              {{-- <a href="https://images.unsplash.com/photo-1495881674446-33314d7fb917?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80" target="_blank"> --}}
              {{-- <a  src="" target="_blank" >
  
                <button type="button" class="btn btn-block btn-info col">Buka di Jendela Baru</button>
              </a> --}}
              {{-- gambar potrait --}}
              {{-- <a href="https://images.unsplash.com/photo-1572119752777-3a4cf2d7a351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1482&q=80" target="_blank">
                <button type="button" class="btn btn-block btn-info col">Buka di Jendela Baru</button>
              </a> --}}
            </div>
          </div>
          <br>
          <div class="row justify-content-center">
            {{-- gambar landscape --}}
            {{-- <div class="col-xs-12">
              <img class="js-show-foto" src="" style="width:inherit; height:inherit" alt="">
            </div> --}}
            {{-- gambar potrait --}}
            <div class="col-xs-12"><img class="js-ganti-foto" src="https://images.unsplash.com/photo-1572119752777-3a4cf2d7a351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1482&q=80" style="width:inherit; height:inherit" alt=""></div>
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
<!-- modal -->

<!-- modal klaim -->
<div class="modal fade" id="modal-klaim">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Informasi Klaim Penemuan Barang Temuan</h4>
          <p class="help-block" style="margin:0">Update terakhir 12/12/2019 00:59</p>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-deskripsi">Deskripsi Klaim Kehilangan</label></div>
            <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
            <div class="col-sm-7"><label id="deskripsi">Contoh Klaim Penemuan Barang Klaim Penemuan Barang Klaim Penemuan Barang Klaim Penemuan Barang  Barang Klaim Penemuan Barang Klaim Penemuan Barang Klaim Penemuan Barang</label></div>
          </div>
          <div class="row">
            <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-foto">Bukti Foto Klaim</label></div>
            <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
            <div class="col-sm-4">
              {{-- gambar landscape --}}
              {{-- <a href="https://images.unsplash.com/photo-1556742502-ec7c0e9f34b1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1534&q=80" target="_blank">
                <button type="button" class="btn btn-block btn-info col">Buka di Jendela Baru</button>
              </a> --}}
              {{-- gambar potrait --}}
              {{-- <a href="https://images.unsplash.com/photo-1572119752777-3a4cf2d7a351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1482&q=80" target="_blank"> --}}
                {{-- <button type="button" class="btn btn-block btn-info col">Buka di Jendela Baru</button> --}}
              </a>
            </div>
          </div>    
          <br>
          <div class="row justify-content-center">
            {{-- gambar landscape --}}
            <div class="col-xs-12"><img class="js-ganti-foto" id="image" src="https://images.unsplash.com/photo-1556742502-ec7c0e9f34b1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1534&q=80" style="width:inherit; height:inherit" alt=""></div>
            {{-- gambar potrait --}}
            {{-- <div class="col-xs-12"><img src="https://images.unsplash.com/photo-1572119752777-3a4cf2d7a351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1482&q=80" style="width:inherit; height:inherit" alt=""></div> --}}
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Tutup</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

<!-- modal terima -->
<div class="modal fade" id="modal-terima">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            {{-- {{ csrf_field() }} --}}
          <h4 class="modal-title">Penerimaan Klaim Penemuan Barang Temuan</h4>
        </div>
        <div class="modal-body">
          <p>Apakah kamu yakin <b>menerima</b> klaim penemuan barang temuan ini?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Tidak</button>
          <button data-validasi="1" data-terima="1" data-idbarang="" data-idklaim="" type="submit" class="btn btn-success js-klaim-terima">Yakin</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </form>
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  
  <!-- modal tolak -->
  <div class="modal fade" id="modal-tolak">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Penolakan Klaim Penemuan Barang Temuan</h4>
        </div>
        <div class="modal-body">
          <p>Apakah kamu yakin <b>menolak</b> klaim penemuan barang temuan ini?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Tidak</button>
          <button data-validasi="0" data-terima="1" data-idbarang="" data-idklaim="" type="button" class="btn btn-success">Yakin</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
 
  <!-- /.modal -->
 
  <script>
      $(document).on("click", ".js-validasiterima", function () {
        var idbarang = $(this).data('idbarang');
        var idklaim = $(this).data('idklaim');
        
        $('.js-klaim-terima').data('idbarang', idbarang);
        $('.js-klaim-terima').data('idklaim', idklaim);
      });
      
      $(document).on("click", ".js-validasitolak", function () {
        var idbarang = $(this).data('idbarang');
        var idklaim = $(this).data('idklaim');
        
        $('.js-klaim-tolak').data('idbarang', idbarang);
        $('.js-klaim-tolak').data('idklaim', idklaim);
      });
      
      $(document).on("click", ".js-klaim-terima", function () {
        var idbarang = $(this).data('idbarang');
        var idklaim = $(this).data('idklaim');
      
        // console.log(idbarang, idklaim);
        $.ajax({
                url: 'validasikehilanganterima',
                method: 'post',
                data: {
                  idbarang: idbarang,
                  idklaim: idklaim,
                  _token: '{{ csrf_token()}}'
                },
                success: function(response){
                  if (response.message == 'success') {
                    alert('Barang berhasil divalidasi');
                  } else {
                    alert('error');
                  }
                }
              });
      });
      
      $(document).on("click", ".js-klaim-tolak", function () {
        var idbarang = $(this).data('idbarang');
        var idklaim = $(this).data('idklaim');
        var idklaim = $(this).data('idklaim');
      
        // console.log(idbarang, idklaim);
        $.ajax({
                url: 'validasipenemuantolak',
                method: 'post',
                data: {
                  idbarang: idbarang,
                  idklaim: idklaim,
                  _token: '{{ csrf_token()}}'
                },
                success: function(response){
                  if (response.message == 'success') {
                    alert('Barang validasi berhasil ditolak');
                  } else {
                    alert('error');
                  }
                }
              });
      
        
      
      });
      
      $(document).on("click", ".js-klaim", function () {
        var id = $(this).data('id');
        console.log(id);
      
        $.ajax({
                url: 'showklaim',
                method: 'get',
                data: {
                  id: id
                  // _token: '{{ csrf_token()}}'
                },
                success: function(response){
                  if (response.message == 'success') {
                    var deskripsi = response.deskripsi;
                    var foto = response.foto;
                    console.log(foto);
                    console.log(deskripsi);
      
                    $("#deskripsi").text(deskripsi);
      
                    // var image_path="{{ URL::asset('upload/kehilangan/') }}";
                    $(".js-ganti-foto").attr('src', foto);
      
                  } else {
                    alert('error');
                  }
                }
              });
      
      });
      
        $(document).on("click", ".js-barang", function () {
        var id = $(this).data('id');
        console.log(id)
      
        $.ajax({
                url: 'showposttemu',
                method: 'get',
                data: {
                  id: id,
                  _token: '{{ csrf_token()}}'
                },
                success: function(response){
                  if (response.message == 'success') {
                    var namabarang = response.namabarang;
                    var lokasi = response.lokasi;
                    var deskripsi = response.deskripsi;
                    var waktu = response.waktu;
                    var kategori = response.kategori;
                    var validasi = response.validasi;
                    var foto = response.foto;
                    console.log(foto);
                    console.log(namabarang);
                    $(".js-namabarang").text(namabarang);
                    $(".js-lokasi").text(lokasi);
                    $(".js-deskripsi").text(deskripsi);
                    $(".js-waktu").text(waktu);
                    // var image_path="{{ URL::asset('upload/kehilangan/') }}";
                    $(".js-ganti-foto").attr('src', foto);
      
                    if(validasi == 0){
                      $(".js-validasi").text("Belum Divalidasi");
                    }
                    else if(validasi == 1){
                      $(".validasi").text("Diterima");
                    }
                    else{
                      $(".validasi").text("Ditolak");
                    }
                    if(kategori == 1){
                      $(".js-kategori").text("Kategori 1");
                    }
                    else if(kategori == 2){
                      $(".js-kategori").text("Kategori 2");
                    }
                    else if(kategori == 3){
                      $(".js-kategori").text("Kategori 3");
                    }
                    else if(kategori == 4){
                      $(".js-kategori").text("Kategori 4");
                    }
      
                  } else {
                    alert('error');
                  }
                }
              });
      
      });
      </script>

@endsection