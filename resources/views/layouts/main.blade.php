<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" sizes="512x512" href="img/Gerb-clean.png">
    <title>O‘zbekiston respublikasi iqtisodiy taraqqiyot va kambag‘allikni qisqartirish vazirligi</title>

    <link rel="stylesheet" href="/front/css/all.min.css">
    <link rel="stylesheet" href="/front/libs/bootstrap.css">
    <link rel="stylesheet" href="/front/css/main3.css">
    <link rel="stylesheet" href="/front/css/media.css">
</head>

<body>
    @if (session('success'))
        <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert"
            style="position: absolute ; width: 30%; left: 69%; top: 2%; z-index:100">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- ======== Header Start  ======== -->
    <header class="header">
        <div class="container-fluid">
            <div class="row header__parent">
                @include('layouts.components.top')
                @include('layouts.components.carousel')
                @include('layouts.components.menu')
            </div>
        </div>
    </header>
    <!-- ======== Header End    ======== -->

    <!-- ======== Main Start  ======== -->
    <main class="site__content">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-8  order-sm-1 order-lg-0">
                    <div class="row">
                        @yield('content')
                        @include('layouts.components.useful_links')
                    </div>
                </div>
                @include('layouts.components.sidebar')
            </div>
        </div>
    </main>
    <!-- ======== Main End    ======== -->

    <!-- ======== Footer Start  ======== -->
    @include('layouts.components.footer')
    <!-- ======== Footer End    ======== -->


    <!-- Bootstrap Link -->
    <script src="/front/libs/bootstrap.js"></script>
    <!-- JQuery Link -->
    <script src="/front/libs/jquery-3.3.1.min.js"></script>
    <!-- My Scripts Link -->
    <script src="/front/scripts/script.js"></script>
</body>

</html>
