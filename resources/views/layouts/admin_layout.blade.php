<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Админ-панель - @yield('title')</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="/admin/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="/admin/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="/admin/dist/css/colorbox.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- wrapper -->
    <div class="wrapper">

        <!-- Navbar -->
        @include('layouts.components.admin.header')

        <!-- Main Sidebar Container -->
        @include('layouts.components.admin.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->

    <script src="/admin/plugins/jquery/jquery.min.js"></script>
    <script src="/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/admin/plugins/chart.js/Chart.min.js"></script>
    <script src="/admin/plugins/sparklines/sparkline.js"></script>
    <script src="/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="/admin/plugins/moment/moment.min.js"></script>
    <script src="/admin/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="/admin/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="/admin/dist/js/adminlte.js"></script>
    <script src="/admin/dist/js/demo.js"></script>
    <script src="/admin/dist/js/pages/dashboard.js"></script>
    <script type="text/javascript" src="/admin/dist/js/jquery.colorbox-min.js"></script>
    <script src="https://cdn.tiny.cloud/1/m9fd7gfy1hf3zoxhzvazouu18oe6pjubuj0m0mqr22yvkfw9/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script type="text/javascript" src="/packages/barryvdh/elfinder/js/standalonepopup.js"></script>
    <script src="/admin/admin.js"></script>
    <script>
        $(function() {
            if ($("#type option:selected").val() != 1) {
                $('.hide-if-old').hide();
                $('.show-if-old').show();
            } else {
                $('.hide-if-old').show();
                $('.show-if-old').hide();
            }
            $("#type").change(function() {
                console.log($("#type option:selected").val());
                if ($("#type option:selected").val() != 1) {
                    $('.hide-if-old').hide();
                    $('.show-if-old').show();
                } else {
                    $('.hide-if-old').show();
                    $('.show-if-old').hide();
                }
            });
        });
        // close alert
        $(document).ready(function() {
            $("#alert-message").fadeTo(2000, 500).slideUp(500, function() {
                $("#alert-message").slideUp(500);
            });
        });
    </script>
</body>

</html>
