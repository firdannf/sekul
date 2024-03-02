<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <link rel="stylesheet" href="css/all.css">
</head>

<body>

    <body>
        <section class="login-register-content">
            <div class="card-content"><br>
                <div class="card-header">
                    <h2 class="text-center"><b>E-assignments</b><br></h3>
                        <hr>
                        @if (session('error'))
                            <div class="alert alert-danger"> <b>Opps!</b>

                                {{ session('error') }} </div>
                        @endif
                        <div class="card-body">
                            <form action="{{ route('actionlogin') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password"
                                        required="">
                                </div>

                                <button type="submit" class="btn btn-primary btn-block">Log

                                    In</button>

                                <hr>
                                <p class="text-center" style="color: black">Belum punya akun? <a
                                        href="/register">Register</a> sekarang!</p>

                            </form>
                        </div>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </body>

</html>
