<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Pages - Admin Dashboard UI Kit - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <script src="http://pages.revox.io/cdn-cgi/apps/head/QJpHOqznaMvNOv9CGoAdo_yvYKU.js"></script>
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="{{asset('corporate/assets/plugins/pace/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('corporate/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('corporate/assets/plugins/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('corporate/assets/plugins/jquery-scrollbar/jquery.scrollbar.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('corporate/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('corporate/assets/plugins/switchery/css/switchery.min.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('corporate/assets/plugins/nvd3/nv.d3.min.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('corporate/assets/plugins/mapplic/css/mapplic.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('corporate/assets/plugins/rickshaw/rickshaw.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('corporate/pages/css/pages-icons.css')}}" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="{{asset('corporate/pages/css/themes/corporate.css')}}" rel="stylesheet" type="text/css" />
</head>

<body class="fixed-header dashboard menu-pin menu-behind">
    <div class="page-container ">
      <div class="content sm-gutter">

          <div class="container-fluid padding-25 sm-padding-50">

             @yield('content')

          </div>

      </div>

    </div>


    <script src="{{asset('corporate/assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/jquery/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/modernizr.custom.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/popper/umd/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/jquery/jquery-easy.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/jquery-unveil/jquery.unveil.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/jquery-ios-list/jquery.ioslist.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/jquery-actual/jquery.actual.min.js')}}"></script>
    <script src="{{asset('corporate/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('corporate/assets/plugins/select2/js/select2.full.min.js')}}" type="text/javascript" ></script>
    <script src="{{asset('corporate/assets/plugins/classie/classie.js')}}" type="text/javascript" ></script>
    <script src="{{asset('corporate/assets/plugins/switchery/js/switchery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/nvd3/lib/d3.v3.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/nvd3/nv.d3.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/nvd3/src/utils.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/nvd3/src/tooltip.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/nvd3/src/interactiveLayer.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/nvd3/src/models/axis.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/nvd3/src/models/line.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/nvd3/src/models/lineWithFocusChart.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/mapplic/js/hammer.min.js')}}"></script>
    <script src="{{asset('corporate/assets/plugins/mapplic/js/jquery.mousewheel.js')}}"></script>
    <script src="{{asset('corporate/assets/plugins/mapplic/js/mapplic.js')}}"></script>
    <script src="{{asset('corporate/assets/plugins/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{asset('corporate/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/plugins/skycons/skycons.js')}}" type="text/javascript"></script>

    <script src="{{asset('corporate/pages/js/pages.js')}}"></script>

    <script src="{{asset('corporate/assets/js/scripts.js')}}" type="text/javascript"></script>

    <script src="{{asset('corporate/assets/js/dashboard.js')}}" type="text/javascript"></script>
    <script src="{{asset('corporate/assets/js/scripts.js')}}" type="text/javascript"></script>

    <script src="{{asset('corporate/assets/js/demo.js')}}" type="text/javascript"></script>
</body>


</html>
