
@include('dashboard.layout.head')
  <body>
    <!-- .app -->
    <div class="app">
      @include('dashboard.layout.header')
      <!-- .app-aside -->
      <aside class="app-aside">
        <!-- .aside-content -->
        <div class="aside-content">
          @include('dashboard.layout.topbar')
          @include('dashboard.layout.sidebar')          
        </div>
        <!-- /.aside-content -->
      </aside>
      <!-- /.app-aside -->
      <!-- .app-main -->
      <main class="app-main">
        @yield('content')
      </main>
      <!-- /.app-main -->
    </div>
    <!-- /.app -->
    @include('dashboard.layout.script')
  </body>
</html>