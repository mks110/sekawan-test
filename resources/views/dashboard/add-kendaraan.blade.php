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
                    <h4 class="card-title"> Tambah Kendaraan </h4>
                    <!-- form .needs-validation -->
                    <form class="needs-validation" method="POST" action="/kendaraan/create">
                        {{-- @method('put') --}}
                        @csrf
                      <!-- .form-group -->
                      <div class="form-group">
                        <label for="username">Jenis Kendaraan</label>
                        <select class="form-control" name="jenisk" id="jenisk">
                            <option value="" selected>Pilih</option>
                            <option value="Mobil">Mobil</option>
                            <option value="Motor">Motor</option>
                            <option value="Bis">Bis</option>
                            <option value="Truck">Truck</option>
                        </select>
                      </div>
                      <!-- /.form-group -->
                      <!-- .form-group -->
                      <div class="form-group">
                        <label for="merk">Merk Kendaraan  
                        </label>
                        <input type="text" name="merk" class="form-control" id="merk" required>
                        <div class="invalid-feedback"> Please write merk of vehicle. </div>
                      </div>
                      <!-- /.form-group -->
                      <!-- .form-group -->
                      <div class="form-group">
                        <label for="address">Type Kendaraan</label>
                        <input type="text" class="form-control" name="type" id="type" required="">
                        <div class="invalid-feedback"> Please write type of vehicle. </div>
                      </div>
                      <!-- /.form-group -->
                      <!-- .form-group -->
                      <div class="form-group">
                        <label for="address2">Bahan Bakar
                        </label>
                        <input type="text" name="bbm" class="form-control" id="bbm" placeholder="Premium" required> 
                    </div>
                      <div class="form-group">
                        <label for="address2">Tanggal Servis
                        </label>
                        <input type="date" name="service" class="form-control" id="service" required> 
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