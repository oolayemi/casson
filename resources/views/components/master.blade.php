<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Casson</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">

</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top g-bg-white">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="{{ asset('img/logo.png') }}" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Publications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Members</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-md-4">
                <hr class="light">
                <img src="{{ asset('img/logo.png') }}" alt="" style="height: 26px">
                <hr class="light">
                <p>090-123-456-7890</p>
                <p>email@myemail.com</p>
                <p>100 Street Name</p>
                <p>City, State, Country</p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>About Us</h5>
                <hr class="light">
                <p> The Counselling Association of Nigeria is a National Professional body of trained, registered and Licensed Counsellors. It draws membership from all Educational Institutions, Prisons, the Health Secto, Schools, NGOs, Rehabilitating Centres, the media, Government Agencies, Individuals, Religious groups etc. </p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Newslater</h5>
                <hr class="light">
                <p> Do not miss out our latest news and events. </p>

                <form action="">
                    <input class="form-control-sm mb-2" type="email" name="email" placeholder="Enter your email" aria-label="Enter email">
                    <button class="form-control-sm btn btn-success" type="submit">Subscribe</button>
                </form>

            </div>
            <div class="col-12">
                <hr class="light-100">
                <h5>2020 &copy; Counselling Association Of Nigeria. All Rights Reserved.</h5>
            </div>
        </div>
    </div>

</footer>


</body>
</html>
