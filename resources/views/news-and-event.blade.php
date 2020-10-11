<x-master>

    @section('content')

        <section class="mb-1" style="background: #f7f7f7">
            <div class="container">
                <div class="text- d-sm-flex">
                    <div class="align-text-center">
                        <h3 class="p-4" style="font-weight: 100; ">News and Events</h3>
                    </div>
                    <div class="align-text-center center-no-height ml-auto p-4">
                        <span class="text-link"><a href="{{ route('home') }}">Home </a></span>
                        <span> / News and Events</span>
                    </div>
                </div>
            </div>
        </section>


        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <article>
                        <div class="container">
                            <div class="row">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-6 mb-lg-3">
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
                                    <div class="col-sm-6 col-lg-6 mb-lg-3">
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
                                </div>

                                <div class="col-sm-6 col-lg-6 mb-lg-3">
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

                {{--                <div class="verticalLine"></div>--}}

                <div class="col-lg-3 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center"><h4>Quick links</h4></div>
                        </div>
                        <div class="card-body">
                            <div class="list-group justify-content-between ">
                                <a class="list-group-item active" href="{{ route('news.event') }}">
                                    <i class="fa fa-arrow"></i>
                                    News and Event
                                </a>
                                <a class="list-group-item" href="">
                                    <i class="fa fa-arrow"></i>
                                    Gallery
                                </a>
                                <a class="list-group-item" href="">
                                    <i class="fa fa-cursor"></i>
                                    Contact Us
                                </a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>



        @endsection

</x-master>
