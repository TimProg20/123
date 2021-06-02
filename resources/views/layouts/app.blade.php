<!Doctype html>
<html lang="en" style="height: auto;">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF  Token -->
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>@yield('title')</title>
        <!-- Google Font: Source Sans Pro -->
    <!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"> -->
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
            <!-- Font Awesome -->
              <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
                <!-- Ionicons -->
                  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
                    <!-- Tempusdominus Bootstrap 4 -->
                      <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
                        <!-- iCheck -->
                          <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
                            <!-- JQVMap -->
                              <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
                                <!-- Theme style -->
                                  <link rel="stylesheet" href="dist/css/adminlte.min.css">
                                    <!-- overlayScrollbars -->
                                      <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
                                        <!-- Daterange picker -->
                                          <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
                                            <!-- summernote -->
                                              <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
                                              <style type="text/css">/* Chart.js */
                                              @keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}</style></head>
<body>
<div class="wraper">
    @include('inc.aside')
    <div class="content-wrapper style="min-height: 636px;">
	    @include('inc.mesages')
	    @yield('content')
    </div>
</div>
</body>
</html>                                              