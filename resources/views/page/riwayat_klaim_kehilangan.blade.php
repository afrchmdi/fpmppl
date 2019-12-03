@extends('layout.master')

@section('content-header')
Dashboard
<small>{{Auth::user()->username}}</small>
@endsection

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3>Riwayat Akun - <b>Klaim Kehilangan</b></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Nama Barang</th>
            <th>Nama Penemu</th>
            <th>Lokasi</th>
            <th>Waktu</th>
            <th>Kategori</th>
            <th>Info</th>
            <th>Klaim</th>
          </tr>
          </thead>
          <tbody>
              @if($user != NULL)
              @foreach($user as $user)
              <tr>
                <td>{{$user->nama_barang}}</td>
                <td>{{$user->nama_penemu}}</td>
                <td>{{$user->lokasi}}</td>
                <td>{{$user->waktu}}</td>
                <td>{{$user->kategori}}</td>
                <td class="row">
                  <div class="col-xs-6">
                      <button type="button" class="btn btn-block btn-default js-barang" data-id="{{$user->id_barang}}" data-toggle="modal" data-target="#modal-barang">Barang</button>
                      </div>
                    </td>
                    <td class="row">
                        <div class="col-xs-3">
                      <button type="button" class="btn btn-block btn-primary js-info" data-id="{{$user->id}}" data-toggle="modal" data-target="#modal-lihat">Lihat</button>
                        </div>
                        {{-- @if($user->validasi != 1) --}}
                        <div class="col-xs-3">
                      <button type="button" class="btn btn-block btn-info js-edit" data-id="{{$user->id}}" data-toggle="modal" data-target="#modal-edit">Edit</button>
                        </div>
                        <div class="col-xs-3">
                      <button type="button" class="btn btn-block btn-warning js-batal" data-idbarang="{{$user->id_barang}}" data-idklaim="{{$user->id}}" data-toggle="modal" data-target="#modal-batal">Batal</button>
                        </div>
                        {{-- @endif --}}
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
            <th>Nama Penemu</th>
            <th>Lokasi</th>
            <th>Waktu</th>
            <th>Kategori</th>
            <th>Info</th>
            <th>Klaim</th>
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
  })
</script>

<!-- modal barang -->
<div class="modal fade" id="modal-barang">
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
            <div class="col-xs-12">
              <img class="js-show-foto" src="" style="width:inherit; height:inherit" alt="">
            </div>
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


<div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Edit Klaim Penemuan Barang Temuan</h4>
        </div>
        <div class="modal-body">
          {{-- <form role="form" action=""> --}}
          <form method="POST" role="form" action="{{ route('editklaimhilang', $user->id) }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-deskripsi">Deskripsi Klaim Kehilangan</label></div>
              <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
              <div class="col-sm-7">
                <textarea name="deskripsi" class="form-control validate white-text" id="deskripsi" rows="15">
                  Contoh Klaim Penemuan Barang Klaim Penemuan Barang Klaim Penemuan Barang Klaim Penemuan Barang  Barang Klaim Penemuan Barang Klaim Penemuan Barang Klaim Penemuan Barang
                </textarea>
                {{-- <input type="text-area" id="Form-deskripsi" class="form-control validate white-text" value="Contoh Deskripsi Barang Deskripsi Barang Deskripsi Barang Deskripsi Barang  Barang Deskripsi Barang Deskripsi Barang Deskripsi Barang"> --}}
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-foto">Bukti Foto Klaim</label></div>
              <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
              <div class="col-sm-4">
                {{-- gambar landscape --}}
                <input type="file" id="Form-foto" name="foto">
                {{-- gambar potrait --}}
                {{-- <a href="https://images.unsplash.com/photo-1572119752777-3a4cf2d7a351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1482&q=80" target="_blank">
                  <button type="button" class="btn btn-block btn-info col">Buka di Jendela Baru</button>
                </a> --}}
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
            <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </div>
      </form>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  
  <div class="modal fade" id="modal-batal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Pembatalan Klaim Penemuan Barang Temuan</h4>
        </div>
        <form method="POST" role="form" action="{{ route('batalklaimkehilangan', $user->id) }}" enctype="multipart/form-data">
          {{ csrf_field() }}
        <div class="modal-body">
          <p>Apakah kamu yakin membatalkan klaim penemuan barang temuan ini?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Tidak</button>
          {{-- <a href="/riwayat.klaim.kehilangan"> --}}
            <button type="submit" class="btn btn-success">Yakin</button>
          {{-- </a> --}}
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  
  <!-- modal klaim -->
  <div class="modal fade" id="modal-lihat">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Informasi Klaim Penemuan Barang Temuan</h4>
            {{-- <p class="help-block" style="margin:0">Update terakhir 12/12/2019 00:59</p> --}}
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-deskripsi">Deskripsi Klaim Kehilangan</label></div>
              <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
              <div class="col-sm-7"><label id="deskripsi" class="deskripsii"></label></div>
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
                {{-- <a href="https://images.unsplash.com/photo-1572119752777-3a4cf2d7a351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1482&q=80" target="_blank">
                  <button type="button" class="btn btn-block btn-info col">Buka di Jendela Baru</button>
                </a> --}}
              </div>
            </div>    
            <br>
            <div class="row justify-content-center">
              {{-- gambar landscape --}}
              {{-- <div class="col-xs-12"><img id="image" src="https://images.unsplash.com/photo-1556742502-ec7c0e9f34b1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1534&q=80" style="width:inherit; height:inherit" alt=""></div> --}}
              {{-- gambar potrait --}}
              <div class="col-xs-12"><img class="js-ganti-foto" src="https://images.unsplash.com/photo-1572119752777-3a4cf2d7a351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1482&q=80" style="width:inherit; height:inherit" alt=""></div>
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

  $(document).on("click", ".js-edit", function () {
  var id = $(this).data('id');

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
              $('.jseditklaim').attr('action', '{{ route('editklaimhilang', ['id' => '']) }}' + '/' + id);

            } else {
              alert('error');
            }
          }
        });

});

  $(document).on("click", ".js-barang", function () {
  var id = $(this).data('id');

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

$(document).on("click", ".js-info", function () {
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

              $(".deskripsii").text(deskripsi);

              // var image_path="{{ URL::asset('upload/kehilangan/') }}";
              $(".js-ganti-foto").attr('src', foto);

            } else {
              alert('error');
            }
          }
        });

});

</script>
@endsection