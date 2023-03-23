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
                            <th> Pemesan </th>
                            <th> Driver </th>
                            <th> Kendaraan </th>
                            <th> Tanggal </th>
                            <th> status </th>
                            <th> pembuat </th>
                            <th style="width:100px; min-width:100px;"> &nbsp; </th>
                          </tr>
                        </thead>
                        <!-- /thead -->
                        <!-- tbody -->
                        <tbody>
                          <!-- tr -->
                          @foreach ($pesanans as $pesanan)
                          <tr>
                            <td  class="align-middle">{{$loop->iteration}}</td>
                            <td class="align-middle"> {{$pesanan->pemesan->name}} </td>
                            <td class="align-middle"> {{$pesanan->driver->name}} </td>
                            <td class="align-middle"> {{$pesanan->kendaraan->jenis}} {{$pesanan->kendaraan->merk}} {{$pesanan->kendaraan->type}}</td>
                            <td class="align-middle"> {{$pesanan->tanggal}} </td>
                            <td class="align-middle"> 
                              @if ($pesanan->petugas_approve == 'pending' && $pesanan->akomodasi_approve == 'pending')
                              <button class="btn btn-warning btn-sm" disabled>petugas & staff akomodasi not approved yet</button>
                              @elseif ($pesanan->petugas_approve == 'approved' && $pesanan->akomodasi_approve == 'pending')
                              <button class="btn btn-warning btn-sm" disabled>staff akomodasi not approved yet</button>
                              @elseif ($pesanan->petugas_approve == 'pending' && $pesanan->akomodasi_approve == 'approved')
                              <button class="btn btn-warning btn-sm" disabled>petugas not approved yet</button>
                              @elseif ($pesanan->petugas_approve == 'approved' && $pesanan->akomodasi_approve == 'approved')
                              <button class="btn btn-success btn-sm" disabled>Approved</button>
                              
                              @endif
                            </td>
                            <td class="align-middle"> {{$pesanan->pembuat}} </td>
                            @if (auth()->user()->level == 'admin' && $pesanan->akomodasi_approve == 'approved' && $pesanan->petugas_approve == 'approved')
                            <td>
                              <button class="btn btn-success btn-sm" disabled>approved</button>
                            </td>
                            @elseif(auth()->user()->level == 'admin')
                            <td class="align-middle text-right">
                              <form id="delete" action="/pesanan/{{$pesanan->id}}" method="post">
                                @method('delete')
                                @csrf
                                <a href="javascript:{}" onclick="document.getElementById('delete').submit();" class="btn btn-sm btn-secondary">
                                  <i class="far fa-trash-alt"></i>
                                  <span class="sr-only">Remove</span>
                                </a>
                              </form>
                            </td>
                            @else
                            @endif
                            @if(auth()->user()->level == 'petugas' && $pesanan->petugas_approve == 'pending' )
                            <td class="align-middle text-right">
                              <form id="acc" action="/pesanan/{{$pesanan->id}}" method="POST">
                                @method('PUT')
                                @csrf
                                <a href="javascript:{}" onclick="document.getElementById('acc').submit();" class="btn btn-sm btn-secondary">
                                  <span class="menu-icon oi oi-check"></span>
                                </a>
                              </form>
                            </td>
                            @elseif(auth()->user()->level == 'akomodasi' && $pesanan->akomodasi_approve == 'pending')
                            <td class="align-middle text-right">
                              <form id="acc" action="/pesanan/{{$pesanan->id}}" method="POST">
                                @method('PUT')
                                @csrf
                                <a href="javascript:{}" onclick="document.getElementById('acc').submit();" class="btn btn-sm btn-secondary">
                                  <span class="menu-icon oi oi-check"></span>
                                </a>
                              </form>
                            </td>
                            
                            @endif
                          </tr>
                          @endforeach
                          <!-- /tr -->
                        </tbody>
                        <!-- /tbody -->
                      </table>
                      <!-- /.table -->
                    </div>
                    @if (auth()->user()->level == 'admin')
                    <form action="/rekap" method="post">
                      @csrf
                      <button type="submit" class="btn btn-primary btn-sm">Buat Rekap</button>
                    </form>
                        
                    @endif
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