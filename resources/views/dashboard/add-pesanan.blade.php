@extends('dashboard.index')
@section('content')
<!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
              
                <!-- .card -->
                <section class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <h4 class="card-title"> Tambah Pesanan </h4>
                    <!-- form .needs-validation -->
                    <form class="needs-validation" method="POST" action="/pesanan/create">
                        {{-- @method('put') --}}
                        @csrf
                      <!-- .form-group -->
                      <div class="form-group">
                        <label for="kendaraan">Pilih Kendaraan</label>
                        <select class="form-control" name="kendaraan" id="kendaraan" required>
                          <option value="" selected>Pilih</option>
                          @foreach ($kendaraans as $kendaraan)
                          <option value="{{$kendaraan->id}}">{{$kendaraan->jenis}} {{$kendaraan->merk}} {{$kendaraan->type}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="pemesan">Pilih Pemesan</label>
                        <select class="form-control" name="pemesan" id="pemesan" required>
                          <option value="" selected>Pilih</option>
                          @foreach ($pemesans as $pemesan)
                          <option value="{{$pemesan->id}}">{{$pemesan->name}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="driver">Pilih Driver</label>
                        <select class="form-control" name="driver" id="driver" required>
                          <option value="" selected>Pilih</option>
                          @foreach ($drivers as $driver)
                          <option value="{{$driver->id}}">{{$driver->name}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="pembuat">Pembuat Pesanan  
                        </label>
                        <input type="text" name="pembuat" class="form-control" id="pembuat" value="{{auth()->user()->level}}" readonly>
                      </div>
                      <center><button style="width: 50%" class="btn btn-primary btn-lg btn-block" type="submit">Submit</button></center>
                    </form>
                    <!-- /form .needs-validation -->
                  </div>
                  <!-- /.card-body -->
                </section>
                <!-- /.card -->

            </div>
            <!-- /.page-inner -->
          </div>
          <!-- /.page -->
        </div>
        <!-- /.wrapper -->
        @endsection