<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Login - MyFitApp</title>

</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand/logo -->
    <a class="navbar-brand" href=""><img src="{{ asset('img/Logo.png') }}" alt="Logo"></a>
    </nav>

    <div class="container-fluid">
        <h1 class="startheadline">Registriere oder logge dich ein</h1>
        <div class="row startrow">
            <div class="col-sm-2"></div>
            <div class="col-sm-1"><i class="fas fa-user"></i></div>
            <div class="col-sm-3"><a href="{{ URL::route('register') }}"><button type="button" class="btn btn-primary startbutton">Registrieren</button></a></div>
            <div class="col-sm-1"><i class="fas fa-sign-in-alt"></i></div>
            <div class="col-sm-3"><a href="{{ URL::route('login') }}"><button type="button" class="btn btn-primary startbutton">Login</button></a></div>
            <div class="col-sm-2"></div>
        </div>
    </div>

<footer>
    <ul class="nav nav-pills">
        <li class="nav-item">
            <p>Du hast eine Frage?</p>
            <a class="nav-link active" href="#">Jetzt kontaktieren!</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Impressum</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Datenschutz</a>
        </li>
    </ul>
</footer>
</body>
<script type="text/javascript">
    localStorage.clear();
</script>
</html>