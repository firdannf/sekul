<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css">
</head>

<body>
    <section class="login-register-content">
        <div class="card-content">
            <div class=""><br>
                <div class="">
                    <div class="card-header">
                        <h2 class="">User Registration</h3>
                            <hr>
                            @if (session('message'))
                                <div class="alert alert-success"> {{ session('message') }}

                                </div>
                            @endif
                    </div>
                    <div class="card-body">
                        <form action="{{ route('actionregister') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label></i>

                                </label>

                                <input type="email" name="email" class="form-control" placeholder="Email"
                                    required="">

                            </div>

                            <div class="form-group"> <label> </label>

                                <input type="text" name="username" class="form-control" placeholder="Username"
                                    required="">

                            </div>

                            <div class="form-group"> <label></label>

                                <input type="password" name="password" class="form-control" placeholder="Password"
                                    required="">

                            </div>

                            <div class="form-group"> <label></label>

                                <input type="text" name="role" class="form-control" value="user" readonly>

                            </div>

                            <button type="submit" class="btn btn-primary btn-block">

                                Register</button>
                            <hr>
                            <p class="text-center" style="font-size: medium">If you already have an account <a
                                    href="/">please log in here!</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
