<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  
    <script>
      var editor_config = {
        path_absolute : "/",
        selector: "#mytextarea",
        plugins: [
          "advlist autolink lists link image charmap print preview hr anchor pagebreak",
          "searchreplace wordcount visualblocks visualchars code fullscreen",
          "insertdatetime media nonbreaking save table contextmenu directionality",
          "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        file_browser_callback : function(field_name, url, type, win) {
          var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
          var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
    
          var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
          if (type == 'image') {
            cmsURL = cmsURL + "&type=Images";
          } else {
            cmsURL = cmsURL + "&type=Files";
          }
    
          tinyMCE.activeEditor.windowManager.open({
            file : cmsURL,
            title : 'Filemanager',
            width : x * 0.8,
            height : y * 0.8,
            resizable : "yes",
            close_previous : "no"
          });
        }
      };
    
      tinymce.init(editor_config);
    </script>
<link rel="icon" type="image/png" sizes="16x16" href="{{url('/../assets/images/favicon.png')}}">
    <link href="{{url('/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('/assets/plugins/morrisjs/morris.css')}}" rel="stylesheet">
    <link href="{{url('/cssBack/style.css')}}" rel="stylesheet">
    <link href="{{url('/cssBack/colors/blue.css')}}" id="theme" rel="stylesheet">

    {{-- <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png"> --}}
    <title></title>
    <!-- Bootstrap Core CSS -->
    {{-- <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
    <!-- morris CSS -->
    {{-- <link href="assets/plugins/morrisjs/morris.css" rel="stylesheet"> --}}
    <!-- Custom CSS -->
    {{-- <link href="cssBack/style.css" rel="stylesheet"> --}}
    <!-- You can change the theme colors from here -->
    {{-- <link href="cssBack/colors/blue.css" id="theme" rel="stylesheet"> --}}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
       @include('back.navbar')
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('back.sidebar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        @yield('content')
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

    {{-- <script src="{{url('/assets/plugins/jquery/jquery.min.js')}}"></script> --}}
    <script src="{{url('jquery.min.js')}}"></script>
    <script src="{{url('/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{url('/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{url('/jsBack/jquery.slimscroll.js')}}"></script>
    <script src="{{url('/jsBack/waves.js')}}"></script>
    <script src="{{url('/jsBack/sidebarmenu.js')}}"></script>
    <script src="{{url('/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{url('/jsBack/custom.min.js')}}"></script>
    <script src="{{url('/assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{url('/assets/plugins/raphael/raphael-min.js')}}"></script>
    <script src="{{url('/assets/plugins/morrisjs/morris.min.js')}}"></script>
    <script src="{{url('/jsBack/dashboard1.js')}}"></script>
    <script src="{{url('/assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>


  {{-- <script src="{{url('vendor/unisharp/laravel-filemanager/public/js/stand-alone-button.js')}}"> --}}
    <script src="{{url('/stand-alone-button.js')}}">
  //  $('#lfm').filemanager('image');
     var route_prefix = "localhost:8000/storage";
 $('#lfm').filemanager('phtotos', {prefix: route_prefix});
    </script>  

{{-- 
<script>
{!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js'))!!};
  var route_perfix="{{url(config('lfm.url_prefix', config('lfm.prefix')))}}";

</script> --}}
    {{-- <script src="assets/plugins/jquery/jquery.min.js"></script> --}}
    <!-- Bootstrap tether Core JavaScript -->
    {{-- <script src="assets/plugins/bootstrap/js/popper.min.js"></script> --}}
    {{-- <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> --}}
    <!-- slimscrollbar scrollbar JavaScript -->
    {{-- <script src="jsBack/jquery.slimscroll.js"></script> --}}
    <!--Wave Effects -->
    {{-- <script src="jsBack/waves.js"></script> --}}
    <!--Menu sidebar -->
    {{-- <script src="jsBack/sidebarmenu.js"></script> --}}
    <!--stickey kit -->
    {{-- <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script> --}}
    <!--Custom JavaScript -->
    {{-- <script src="jsBack/custom.min.js"></script> --}}
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--sparkline JavaScript -->
    {{-- <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script> --}}
    <!--morris JavaScript -->
    {{-- <script src="assets/plugins/raphael/raphael-min.js"></script> --}}
    {{-- <script src="assets/plugins/morrisjs/morris.min.js"></script> --}}
    <!-- Chart JS -->
    {{-- <script src="jsBack/dashboard1.js"></script> --}}
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    {{-- <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script> --}}
</body>

</html>