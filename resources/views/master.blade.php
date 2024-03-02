<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Tugas Tamansiswa</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.cs
s" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/master.css">
</head>

<body>
    <div class="container">
        <div class="col-md-12">
            <nav class="navbar navbar-default"
                style="background: linear-gradient(90deg, rgba(10,0,36,1) 0%, rgba(9,49,121,1) 45%, rgba(0,159,255,1) 100%);">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->

                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{ route('dashboard') }}" style="color: azure">E-assignments</a>

                    </div>
                    <!-- Collect the nav links, forms, and other contentfor toggling -->

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav navbar-left">
                            @if (Auth::user()->role == 'admin')
                                <li class="nav-item"><a class="nav-link" style="color: azure" href="/user">User</a>
                                </li>
                            @endif

                            <li class="nav-item"><a class="nav-link" style="color: azure" href="/soal">Tugas</a></li>

                            <li class="nav-item"><a class="nav-link" style="color: azure" href="/nilai">Nilai</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"
                                        style="color: aliceblue"></i>
                                    {{ Auth::user()->email }}

                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a>Level: {{ Auth::user()->role }}</a>

                                    </li>
                                    <li role="separator" class="divider"></li>

                                    <li><a href="{{ route('actionlogout') }}"><i class="fa fa-power-off"></i> Log
                                            Out</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
            @yield('konten')
        </div>
    </div>
    </div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>
