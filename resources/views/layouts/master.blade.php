<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" href="{{ asset('backend/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/jqvmap/dist/jqvmap.min.css')}}">


    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    @yield('stylesheets')
</head>
<body class="hold-transition skin-blue sidebar-mini">
    
        @include('partials.sidebar')
     <div id="right-panel" class="right-panel">
                @include('partials.header')
                @yield('content')
       </div>
   
    <script src="{{ asset('backend/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('backend/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('backend/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('backend/assets/js/main.js')}}"></script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=oghq45u214af6907t91543l45gq5xwuj90mmaluspnb8bd7b"></script>
  <script>tinymce.init({ selector:"textarea",
  					 	 plugins: "textcolor",
  						 toolbar: "formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat",
  					 });</script>

    <script src="{{ asset('backend/vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
    <script src="{{ asset('backend/assets/js/dashboard.js')}}"></script>
    <script src="{{ asset('backend/assets/js/widgets.js')}}"></script>
    <script src="{{ asset('backend/vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{ asset('backend/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{ asset('backend/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
        <script>
            (function($) {
                "use strict";

                jQuery('#vmap').vectorMap({
                    map: 'world_en',
                    backgroundColor: null,
                    color: '#ffffff',
                    hoverOpacity: 0.7,
                    selectedColor: '#1de9b6',
                    enableZoom: true,
                    showTooltip: true,
                    values: sample_data,
                    scaleColors: ['#1de9b6', '#03a9f5'],
                    normalizeFunction: 'polynomial'
                });
            })(jQuery);
        </script>

    @yield('scripts')
</body>
</html>