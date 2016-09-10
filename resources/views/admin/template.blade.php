<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | General UI</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
    {!! Html::style('adminlte/bootstrap/css/bootstrap.min.css');  !!}
  
  <!-- Font Awesome -->
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  
  <!-- Theme style -->
    {!! Html::style('adminlte/dist/css/AdminLTE.min.css');  !!}
  
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    {!! Html::style('adminlte/dist/css/skins/_all-skins.min.css');  !!}
  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
    .color-palette {
      height: 35px;
      line-height: 35px;
      text-align: center;
    }

    .color-palette-set {
      margin-bottom: 15px;
    }

    .color-palette span {
      display: none;
      font-size: 12px;
    }

    .color-palette:hover span {
      display: block;
    }

    .color-palette-box h4 {
      position: absolute;
      top: 100%;
      left: 25px;
      margin-top: -40px;
      color: rgba(255, 255, 255, 0.8);
      font-size: 12px;
      display: block;
      z-index: 7;
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  @include('admin.header')

  @include('admin.menu')

  <!-- Content Wrapper. Contains page content -->
 

  @yield('content')

  
  
  @include('admin.footer')
  
 
  @include('admin.control_sidebar')

 
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
{!! Html::script('adminlte/plugins/jQuery/jquery-2.2.3.min.js');  !!}

<!-- Bootstrap 3.3.6 -->
{!! Html::script('adminlte/bootstrap/js/bootstrap.min.js');  !!}

<!-- FastClick -->
{!! Html::script('adminlte/plugins/fastclick/fastclick.js');  !!}

<!-- AdminLTE App -->
{!! Html::script('adminlte/dist/js/app.min.js');  !!}

<!-- AdminLTE for demo purposes -->
{!! Html::script('adminlte/dist/js/demo.js');  !!}

</body>
</html>
