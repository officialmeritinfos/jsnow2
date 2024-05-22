@extends('home.base')
@section('content')
    <!-- Hero area starts-->
    <section class="hero-area ">
        <div class="hero-banner">
            <div class="inner-hero">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="hero-text">
                                <h2>{{$pageName}}</h2>
                                <span><a href="{{url('/')}}" class="home">Home</a> | <a href="#" class="disabled">About</a></span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero area ends -->

    <!-- Service Details starts -->
    <section class="service-details">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="service-detail-img">
                        <img src="{{asset('home/serv/'.$service->photo)}}" alt="men">
                    </div>
                </div>
                <div class="col-lg-12 mt-4">
                    <div class="service-detail-text">
                        <h5>{{$service->title}}</h5>
                        <p>
                            {!! str_replace('MYSITE',$siteName,$service->content) !!}
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>



@endsection
