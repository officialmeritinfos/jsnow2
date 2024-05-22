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
    <!-- About Area Starts -->
    <section class="about" style="margin-top: -5rem;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <div class="sub-heading">
                                <img src="{{asset('home/images/section-title-icon.png')}}" alt="caret">
                                <p>Who we are</p>
                            </div>
                            <h2>Sustainable Strategy based on AI</h2>
                        </div>

                        <div class="text-content">
                            <p>
                                At {{$siteName}}, we are at the forefront of the investment landscape,
                                leveraging the unparalleled capabilities of artificial intelligence (AI) to
                                drive success. With a focus on stocks,trading, mining, oil and gas, as well as gold and
                                precious metal mining, we empower investors to unlock transformative opportunities
                                for growth and profitability. Our AI algorithms harness the power of big data,
                                enabling us to analyze market trends, identify emerging sectors, and make
                                data-driven investment decisions that deliver exceptional results.
                            </p>

                            <div class="progress-wrapper">
                                <div class="progress-one">
                                    <div class="progress-bar" data-percent="98" data-duration="1000"></div>
                                    <h5>Client Satisfied</h5>
                                </div>

                                <div class="progress-two">
                                    <div class="progress-bar" data-percent="97" data-duration="1000"></div>
                                    <h5>Strategic
                                        Efficiency</h5>
                                </div>
                            </div>

                            <p >
                                Powered by advanced artificial intelligence (AI) algorithms, {{$siteName}} provides
                                cutting-edge solutions to help clients earn from the dynamic world of cryptocurrencies
                                with confidence and success.<br/>
                                With our AI-driven investment strategies, we analyze extensive market data, historical
                                trends, and real-time indicators to make informed investment decisions and optimize
                                portfolio performance.
                            </p>
                            <p>
                                Founded in early 2009, we are a global investment agency helping individuals build their financial dreams into reality. From a humble beginning, we have grown to become a notable force in the investment industry with over 40K+ users.
                            </p>
                            <p class="about-one__text-2">{{$siteName}} stands as one of the largest and most seasoned international private equity firms. Our accomplished team of investment professionals is primarily dedicated to strategic investments.</p>
                            <p class="about-one__text-2">
                                {{$siteName}} is managed by a team of trading experts specializing in generating profits through currency, stocks, options, and commodities trading on the foreign exchange market. We employ a variety of trading techniques to meet client goals.
                            </p>
                            <p class="about-one__text-2">
                                The {{$siteName}} team comprises financial market professionals assembled to provide the best possible trading conditions. Our specialists played a key role in developing technical specifications for a modern platform suitable for both beginners and experienced traders.
                            </p>
                            <p class="about-one__text-2">
                                Throughout our existence, we've aimed to balance lower risk and higher profits for our customers through innovative analysis, information dispersion, and expert assistance. Our team includes experienced professionals with diverse and in-depth knowledge, enhancing the entire investing process.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 r-margin-top">

                    <div class="about-img">
                        <img src="{{asset('home/images/rpa1.jpeg')}}" alt="team">
                        <img src="{{asset('home/images/abt-overlay.png')}}" alt="overlay" class="overlay">
                    </div>

                    <div class="experience">
                        <span>15</span>
                        <p>Years of experience</p>
                    </div>

                    <div class="quote">
                        <h5>We’re Committed For Creating Change.</h5>
                        <div class="quote-info">
                            <img src="{{asset('home/images/small-image.png')}}" alt="man">

                            <div class="meta-info">
                                <p>Joseph Colman</p>
                                <span>CEO & Founder</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- About area ends -->

    <!-- Offer area starts -->
    <section class="offer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <div class="sub-heading">
                            <img src="{{asset('home/images/section-title-icon.png')}}" alt="caret">
                            <p>Services</p>
                        </div>
                        <h2>Sectors & Industry of Interest</h2>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                @foreach($services as $service)
                    <div class="col-md-4 mt-3">
                        <div class="card">
                            <img src="{{asset('home/serv/'.$service->photo)}}" class="card-img-top" />
                            <div class="card-body">
                                <h5 class="card-title">{{$service->title}}</h5>
                                <p class="card-text">
                                    {{\Illuminate\Support\Str::words($service->short,30)}}
                                </p>

                                <a href="{{route('service.details',['id'=>$service->id])}}" class="btn_2"> Read Details <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Offer area ends -->
    <!-- Offer area starts -->
    <section class="offer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <div class="sub-heading">
                            <img src="{{asset('home/images/section-title-icon.png')}}" alt="caret">
                            <p>Why Choose Us</p>
                        </div>
                        <h2>Excellence at its Best</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 r-mb">
                    <div class="offer-wrapper">
                        <iconify-icon icon="fluent-mdl2:design"></iconify-icon>
                        <h5>AI-Driven Expertise</h5>
                        <p>
                            Our advanced AI algorithms enable us to make data-driven investment decisions, optimizing
                            returns and minimizing risks.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 r-mb">
                    <div class="offer-wrapper">
                        <iconify-icon icon="fluent-mdl2:design"></iconify-icon>
                        <h5>Extensive Industry Knowledge</h5>
                        <p>
                            Our team of experts brings years of experience and deep understanding of the agriculture,
                            real estate, oil and gas, and mining sectors.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 r-mb">
                    <div class="offer-wrapper">
                        <iconify-icon icon="fluent-mdl2:design"></iconify-icon>
                        <h5>Diversified Portfolio</h5>
                        <p>
                            We offer a well-balanced portfolio across multiple sectors, ensuring risk mitigation and
                            maximizing potential returns.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 r-mb">
                    <div class="offer-wrapper">
                        <iconify-icon icon="fluent-mdl2:design"></iconify-icon>
                        <h5>Access to Lucrative Opportunities</h5>
                        <p>
                            Through our extensive network and market research, we identify and invest in high-potential
                            opportunities that may be inaccessible to individual investors.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 r-mb">
                    <div class="offer-wrapper">
                        <iconify-icon icon="fluent-mdl2:design"></iconify-icon>
                        <h5>Transparent Approach</h5>
                        <p>
                            We believe in open communication and provide our clients with clear and transparent reporting
                            on investment performance and strategy.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 r-mb">
                    <div class="offer-wrapper">
                        <iconify-icon icon="fluent-mdl2:design"></iconify-icon>
                        <h5>Sustainable Investment</h5>
                        <p>
                            We prioritize investments in sustainable and environmentally responsible ventures, aligning
                            with the growing demand for ethical investment options.
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- Offer area ends -->


@endsection
