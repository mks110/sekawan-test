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
                        <!-- thead -->
                        <thead>
                          <tr>
                            <th>No</th>
                            <th> Nama </th>
                            <th> Alamat </th>
                            <th> Tanggal Butuh </th>
                            <th> Kebutuhan </th>
                            
                          </tr>
                        </thead>
                        <!-- /thead -->
                        <!-- tbody -->
                        <tbody>
                          <!-- tr -->
                          @foreach ($alls as $all)
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td class="align-middle"> {{$all->name}} </td>
                            <td class="align-middle"> {{$all->alamat}} </td>
                            <td class="align-middle"> {{$all->tanggal_butuh}} </td>
                            <td class="align-middle"> {{$all->kebutuhan}} </td>
                            
                          </tr>
                          @endforeach
                          <!-- /tr -->
                        </tbody>
                        <!-- /tbody -->
                        
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