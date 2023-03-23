@extends('dashboard.index')
@section('content')
<!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
              
               <!-- .page-section -->
              <div class="page-section">
                <!-- .card -->
                <section class="card card-fluid">
                  <!-- /.card-header -->
                  <!-- .card-body -->
                  <div class="card-body">
                    <div class="table-responsive">
                      <!-- .table -->
                      <table class="table">
                        <form>
                          <div class="form-group">
                            <h4>
                              Filter By Date
                            </h4>
                          </div>
                          <div class="row">
                            <div class="col mb-2">
                              <h6>Start Date</h6>
                              <input type="date" class="form-control" name="start_date">
                            </div>
                            <div class="col">
                              <h6>End Date</h6>
                              <input type="date" class="form-control" name="end_date">
                            </div>
                          </div>
                          <center><button class="btn btn-primary mb-3" type="submit">GET</button></center>
                        </form>
                        <!-- thead -->
                        <thead>
                          <tr>
                            <th>No</th>
                            <th> Kendaraan </th>
                            <th> Driver </th>
                            <th> Pemesan </th>
                            <th> Tanggal </th>
                            <th> Kepentingan </th>
                          </tr>
                        </thead>
                        <!-- /thead -->
                        <!-- tbody -->
                        <tbody>
                          <!-- tr -->
                          @foreach ($data as $dt)
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td class="align-middle"> {{$dt->kendaraan}} {{$dt->merk}} {{$dt->type}} </td>
                            <td class="align-middle"> {{$dt->driver}} </td>
                            <td class="align-middle"> {{$dt->pemesan}} </td>
                            <td class="align-middle"> {{$dt->tanggal}} </td>
                            <td class="align-middle"> {{$dt->kepentingan}} </td>
                          </tr>
                          @endforeach
                          <!-- /tr -->
                        </tbody>
                        <!-- /tbody -->
                        <a href="{{route('export')}}" class="btn btn-success btn-sm">Export</a>
                      </table>
                      <!-- /.table -->
                    </div>
                  </div>
                  <!-- /.card-body -->
                </section>
                <!-- /.card -->
                
              </div>
              <!-- /.page-section -->

            </div>
            <!-- /.page-inner -->
          </div>
          <!-- /.page -->
        </div>
        <!-- /.wrapper -->
        @endsection