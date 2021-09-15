<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Módulo admin</title>
</head>

<body>


    <div class="wrapper">
    
        <div class="main-panel">

            @include('dashboard.partials.nav-header-main')

            <div class="content">
                <div class="container-fluid">
                    <div class="container-fluid">
                        @include('dashboard.partials.session-flash-status')
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>

