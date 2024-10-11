<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carnival</title>

    <link rel="stylesheet" href="{{asset('assets/bootstrap-five/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

</head>
<body>

<section>

    <div class="admin-panel"> 

        <!-- Sidebar -->
        @include('layouts.dashboard.navbar')

        <!-- Body -->
        <div class="admin-panel-body">
        
            @include('layouts.dashboard.header')

            <div class="content-body">
                    @yield('content')
            </div>

            @include('layouts.dashboard.footer')
        
        </div>
        
    </div>

</section>  

<script src="{{asset('assets/jquery/jquery_3.7.1.js')}}"></script>
<script src="{{asset('assets/pooper/pooper.js')}}"></script>
<script src="{{asset('assets/bootstrap-five/bootstrap.min.js')}}"></script>
<script src="{{asset ('custom.js')}}"></script>
</body>
</html>