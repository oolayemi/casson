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
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="{{ asset('img/logo.png') }}" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
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

<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slides-to="0" class="active"></li>
        <li data-target="#slides" data-slides-to="1"></li>
        <li data-target="#slides" data-slides-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('img/frontview.jpg') }}">
            {{--<div class="carousel-caption">
                <h1 class="display-2"> Welcome to CASSON </h1>
                <h3>This is the association of the cassons </h3>
                <button type="button" class="btn btn-outline-light btn-lg"> Check more </button>
                <button type="button" class="btn btn-primary btn-lg">View more </button>
            </div>--}}
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/speak.jpg') }}">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/halleluyah.jpg') }}">
        </div>
    </div>
</div>

<!--- Jumbotron -->

<div class="container mt-5">
    <div class="row jumbotron">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
            <h3>Are you a professional counsellor?</h3>
            <p class="lead">
                If so, join our directory of registered counsellors in Nigeria. Visitors can search our
                national online directory by location, issue or approach and access your professional
                support and guidance today.
            </p>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
            <a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">Register Now!!!</button></a>
        </div>

    </div>
</div>

<!--- Welcome Section -->

{{--<div class="container padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4"> Welcome to CASSON </h1>
        </div>
        <hr>
        <div class="col-8">
            <p class="lead">The Counselling Association of Nigeria is a National Professional body of trained, registered and Licensed Counsellors. It draws membership from all Educational Institutions, Prisons, the Health Sector, Schools, NGOs, Rehabilitating Centres, the media, Government Agencies, Individuals, Religious groups etc.</p>
            <p class="lead">The Association was founded on 15th November, 1975 with 49 Founding members, headed by Professor S. Olu Makinde (Late). The Association is made up of Icons, Fellows, Associate members, Honorary members, Full-Time members, and Student membership who possess the necessary requirements as stipulated in the Association's Constitution. read more ..</p>
        </div>
        <div class="col-4">
            <img class="img-fluid mb-3" src="{{ asset('img/img1.png') }}" alt="">
            <div class="text-center">
                <span class="g-color-gray-dark-v4">PROPOSED CASSON SECRETARIAT</span>
            </div>
        </div>

    </div>
</div>--}}

<!--- Three Column Section -->


<!--- Two Column Section -->

<div class="container padding">
    <div class="row padding">
        <div class="col-lg-6">
            <h6>WELCOME TO</h6>
            <h2 class="font-weight-bold">CASSON</h2>
            <p>The Counselling Association of Nigeria is a National Professional body of trained, registered and Licensed Counsellors. It draws membership from all Educational Institutions, Prisons, the Health Sector, Schools, NGOs, Rehabilitating Centres, the media, Government Agencies, Individuals, Religious groups etc.</p>
            <p>The Association was founded on 15th November, 1975 with 49 Founding members, headed by Professor S. Olu Makinde (Late). The Association is made up of Icons, Fellows, Associate members, Honorary members, Full-Time members, and Student membership who possess the necessary requirements as stipulated in the Association's Constitution. read more ..</p>
            <br>
            <a href="#" class="btn btn-primary">Read more...</a>
        </div>
        <div class="col-lg-6">
            <img src="{{ asset('img/img1.png') }}" alt="" class="img-fluid">
            <div class="text-center p-3 font-weight-bold">
                <span class="g-color-gray-dark-v4">PROPOSED CASSON SECRETARIAT</span>
            </div>
        </div>
    </div>

</div>

<!--- publication -->
<div class="container padding pt-4">
    <div class="row padding">
        <div class="col-lg-6" style="alignment: revert">
            <h5>PUBLICATIONS</h5>

            <hr class="col-1">

            <p>Get on with our articles</p>
        </div>
    </div>
</div>


<!--- Fixed background -->


<!--- Emoji Section -->


<!--- Meet the team -->


<!--- Cards -->

<div class="container padding">

</div>


<!--- Two Column Section -->


<!--- Connect -->


<!--- Footer -->




</body>
</html>
