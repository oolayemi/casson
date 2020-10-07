<x-master>
    @section('content')

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

            <div class="container mt-3">
                <div class="row jumbotron">
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                        <h3>Are you a professional counsellor?</h3>
                        <p class="lead">
                            If so, join our directory of registered counsellors in Nigeria. Visitors can search our
                            national online directory by location, issue or approach and access your professional
                            support and guidance today.
                        </p>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2 p-2">
                        <a href="{{ route('member.registration') }}"><button type="button" class="btn btn-outline-secondary btn-lg">Register Now!!!</button></a>
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
            <div class="container padding">
                <div class="row padding">
                    <div class="col-lg-6">
                        <h5>PUBLICATIONS</h5>

                        {{--<hr class="col-1">--}}
                        <div class="d-inline-block" style="width: 50px; height: 1px; background: green"></div>

                        <p>Get on with our articles</p>
                    </div>
                </div>
            </div>


            <!--- Fixed background -->


            <!--- Emoji Section -->


            <!--- Meet the team -->


            <!--- Cards -->

            <div class="container padding2">
                <div class="row padding">
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('img/photo.png') }}" alt="">
                            <div class="card-body">
                                <h4 class="card-title"><a href="#">The Counsellor Vol 14 (August 1996) - Some Te ..</a></h4>
                                <p class="card-text">At The importance of good family life cannot be over-emphasized ..</p>
                                <a href="#" class="btn btn-outline-secondary">Download</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('img/photo.png') }}" alt="">
                            <div class="card-body">
                                <h4 class="card-title"><a href="#">The Counsellor Vol 3 (August 1980) - The Inev ..</a></h4>
                                <p class="card-text">At The awareness of the need for Guidance and Counselling, as a ..</p>
                                <a href="#" class="btn btn-outline-secondary">Download</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('img/photo.png') }}" alt="">
                            <div class="card-body">
                                <h4 class="card-title"><a href="#">The Counsellor Vol 11 No 1 (August 1992) ..</a></h4>
                                <p class="card-text">At Generally, the record of political leadership in modern Afri ..</p>
                                <a href="#" class="btn btn-outline-secondary">Download</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <!--- Three Column Section -->


            <section class="mb-lg-5" style="background: #f7f7f7">
                <div class="container">
                    <div class="row justify-content-center mb-lg-5">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <h5>FOLLOW OUR LATEST NEWS</h5>
                                    <div class="d-inline-block" style="width: 50px; height: 1px; background: green"></div>
                                    <p class="lead mb-0">We bring to you updates of our news and events.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <article>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6 col-lg-4 mb-lg-3">
                                    <img class="img-fluid" src="{{ asset('img/photo2.png') }}" alt="">
                                    <div class="card pl-4">
                                        <p class="card-text mt-2">NOV. 16, 2018</p>
                                        <div class="card-title">
                                            <h5> CASSON BILL</h5>
                                        </div>
                                        <p>CASSON Bill receives successful stakeholders public hearing</p>
                                        <a class="mb-4" href="#">read more...</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 mb-lg-3">
                                    <img class="img-fluid" src="{{ asset('img/photo2.png') }}" alt="">
                                    <div class="card pl-4">
                                        <p class="card-text mt-2">MAY 13, 2018</p>
                                        <div class="card-title">
                                            <h5> Prof. Egbochuku Appeals Strong Support for CASSON Secretariat Building</h5>
                                        </div>
                                        <p>The President updated NDC on the progress so far on the N...</p>
                                        <a class="mb-4" href="#">read more...</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 mb-lg-3">
                                    <img class="img-fluid" src="{{ asset('img/photo2.png') }}" alt="">
                                    <div class="card pl-4">
                                        <p class="card-text mt-2">MAY 13, 2018</p>
                                        <div class="card-title">
                                            <h5> National University Commission (NUC) Backs Counselling Practitioners Council Bill</h5>
                                        </div>
                                        <p>National University Commission (NUC) Backs Counselling Pr...</p>
                                        <a class="mb-4" href="#">read more...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <hr class="my-4">
            </section>



            <!--- Connect -->

            <div class="container padding">
                <div class="col-12 social padding">
                    <div class="row justify-content-center text-center padding">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>


            <!--- Footer -->


    @endsection
</x-master>
