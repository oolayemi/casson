<x-master>
    @section('content')

        <section class="mb-1" style="background: #f7f7f7">
            <div class="container">
                <div class="text- d-sm-flex">
                    <div class="align-text-center">
                        <h3 class="p-4" style="font-weight: 100; ">Member Registration</h3>
                    </div>
                    <div class="align-text-center center-no-height ml-auto p-4">
                        <span class="text-link"><a href="{{ route('home') }}">Home </a></span>
                        <span> / Member Registration</span>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="text-center center" style="background-color: #9b9b9b; height: 33rem">

                        <div class="col">
                            <h3 style="color: #f7f7f7;">ENTER YOUR CASSON ID OR PHONE NUMBER (I.E +2348012345678) TO CONFIRM YOUR REGISTRATION.</h3>
                            <div class="center-no-height">
                                <div class="input-group text-center">
                                    <input class="form-control" type="text" placeholder="Enter here ">
                                    <span class="input-group-btn">
                                        <button class="btn btn2 btn-success">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

{{--                <div class="verticalLine"></div>--}}

                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center"><h4>Quick links</h4></div>
                        </div>
                        <div class="card-body">
                            <div class="list-group justify-content-between ">
                                <a class="list-group-item active" href="">
                                    <i class="fa fa-arrow"></i>
                                    Apply Now
                                </a>
                                 <a class="list-group-item" href="">
                                    <i class="fa fa-arrow"></i>
                                    NEws and Event
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
