@extends('dashboard.index')
@section('content')
<!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-title-bar -->
              <header class="page-title-bar">
                <p class="lead">
                  <span class="font-weight-bold">Hi, {{auth()->user()->name}}.</span>
                  <span class="d-block text-muted">Here's what's happening with your business today.</span>
                </p>
              </header>
              <!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .section-block -->
                <div class="section-block">
                  <!-- metric row -->
                  <div class="metric-row">
                    <div class="col-lg-9">
                      <div class="metric-row metric-flush">
                        <!-- metric column -->
                        <div class="col">
                          <!-- .metric -->
                          <a href="user-teams.html" class="metric metric-bordered align-items-center">
                            <h2 class="metric-label"> Semua Kendaraan</h2>
                            <p class="metric-value h3">
                              <sub>
                                <i class="oi oi-vertical-align-center"></i>
                              </sub>
                              <span class="value">{{$jmlkendaraan}}</span>
                            </p>
                          </a>
                          <!-- /.metric -->
                        </div>
                        <!-- /metric column -->
                        <!-- metric column -->
                        <div class="col">
                          <!-- .metric -->
                          <a href="user-projects.html" class="metric metric-bordered align-items-center">
                            <h2 class="metric-label"> Driver </h2>
                            <p class="metric-value h3">
                              <sub>
                                <i class="oi oi-fork"></i>
                              </sub>
                              <span class="value">{{$jmldriver}}</span>
                            </p>
                          </a>
                          <!-- /.metric -->
                        </div>
                        <!-- /metric column -->
                      </div>
                    </div>
                    <!-- metric column -->
                    <div class="col-lg-3">
                      <!-- .metric -->
                      <a href="user-tasks.html" class="metric metric-bordered">
                        <div class="metric-badge">
                          <span class="badge badge-lg badge-success">
                            <span class="oi oi-media-record pulse mr-1"></span> Pesanan</span>
                        </div>
                        <p class="metric-value h3">
                          <sub>
                            <i class="oi oi-timer"></i>
                          </sub>
                          <span class="value">{{$jmlpesanan}}</span>
                        </p>
                      </a>
                      <!-- /.metric -->
                    </div>
                    <!-- /metric column -->
                  </div>
                  <!-- /metric row -->
                </div>
                <!-- /.section-block -->
                <!-- .card -->
                    <section class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card card-danger">
                        <div class="card-header">
                          <h3 class="card-title">Grafik Pemakaian kendaraan</h3>
                            <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                              </button>
                              <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                              </button>
                            </div>
                        </div>
                        <div class="card-body">
                          <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
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

        