<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ANGEL ASSET MANAGEMENT</title>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Custom CSS Files -->
    <link rel="stylesheet" href="{{asset('css/quicksand.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/dataTables.min.css')}}">
    <!--Javascript -->
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/style.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/dataTables.min.js')}}"></script>

    <script src="sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.css') }}">
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}
    <!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> --}}
<style>
body{
    background-color: #EFF0F1;
}
</style>
</head>
<body>
    <div class="container-fluid">
        @include('admins.adminnav')
        <div class="row main-content">
            @include('admins.sideBar')
            <div class="col-sm-9 col-xs-12 content pt-3 pl-0">
                @yield('content')
            </div>
        </div>
    </div>
</body>
<script>
    $('.select2').select2();
    $(document).ready( function () {
    $('#myTable').DataTable();
        } );
</script>
</html>