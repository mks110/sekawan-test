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
                            <th> Jenis </th>
                            <th> Merk </th>
                            <th> Type </th>
                            <th> BBM </th>
                            <th> Service </th>
                            <th style="width:100px; min-width:100px;"> &nbsp; </th>
                          </tr>
                        </thead>
                        <!-- /thead -->
                        <!-- tbody -->
                        <tbody>
                          <!-- tr -->
                          @foreach ($kendaraan as $kendaraans)
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td class="align-middle"> {{$kendaraans->jenis}} </td>
                            <td class="align-middle"> {{$kendaraans->merk}} </td>
                            <td class="align-middle"> {{$kendaraans->type}} </td>
                            <td class="align-middle"> {{$kendaraans->bbm}} </td>
                            <td class="align-middle"> {{$kendaraans->service}} </td>
                            <td class="align-middle text-right">
                              <form id="delete" action="/kendaraan/{{$kendaraans->id}}" method="POST">
                                @method('delete')
                                @csrf
                                <a href="javascript:{}" onclick="document.getElementById('delete').submit();" class="btn btn-sm btn-secondary">
                                  <i class="far fa-trash-alt"></i>
                                  <span class="sr-only">Remove</span>
                                </a>
                              </form>
                            </td>
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