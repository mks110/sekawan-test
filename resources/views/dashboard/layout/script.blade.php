<!-- BEGIN BASE JS -->
    <script src="{{asset('uselooper/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('uselooper/assets/vendor/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('uselooper/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="{{asset('uselooper/assets/vendor/stacked-menu/stacked-menu.min.js')}}"></script>
    <script src="{{asset('uselooper/assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('uselooper/assets/vendor/flatpickr/flatpickr.min.js')}}"></script>
    <script src="{{asset('uselooper/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('uselooper/assets/vendor/chart.js/Chart.min.js')}}"></script>
    <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="{{asset('uselooper/assets/javascript/main.min.js')}}"></script>
    <!-- END THEME JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="{{asset('uselooper/assets/javascript/pages/easypiechart-demo.js')}}"></script>
    <script src="{{asset('uselooper/assets/javascript/pages/dashboard-demo.js')}}"></script>
    <!-- END PAGE LEVEL JS -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116692175-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-116692175-1');
    </script>
    <script>
      //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
         @foreach ($chart as $ch)
          '{{$ch->kendaraan}}',
          
         @endforeach
      ],
      datasets: [
        {
          data: [
          @foreach ($chart as $ch)
          {{$ch->count}},
          
          @endforeach
          

          ],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })
    </script>