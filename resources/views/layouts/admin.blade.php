<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/simple-sidebar.css')}}" rel="stylesheet">

</head>

<body>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="{{route('index')}}">
                    Admin Panele
                </a>
            </li>
            <li>
                <a href="{{route('home')}}">Pagrindinis Puslapis</a>
            </li>
            <li>
                <a href="{{route('users.list')}}">Vartotoju sarasas</a>
            </li>
            <li>
                <a href="{{route('repairs.list')}}">Registruotu gedimu sarasas</a>
            </li>
            <li>
                <a href="{{route('models.add')}}">Prideti telefono modeli</a>
            </li>
            <li>
                <a href="{{route('phones.add')}}">Prideti telefono gamintoja</a>
            </li>

        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            @yield('content')
            <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Soninis meniu</a>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>
