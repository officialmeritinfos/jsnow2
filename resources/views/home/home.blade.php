@extends('home.base')
@section('content')
    @push('css')
        <style>
            .single-price {
                text-align: center;
                background: #262626;
                transition: .7s;
                margin-top: 20px;
            }
            .single-price h3 {
                font-size: 30px;
                color: #000;
                font-weight: 600;
                text-align: center;
                margin: 0;
                margin-top: -80px;
                margin-bottom: 1rem;
                font-family: poppins;
                color: #fff;
            }
            .single-price h4 {
                font-size: 20px;
                font-weight: 500;
                color: #fff;
            }
            .single-price h4 span.sup {
                vertical-align: text-top;
                font-size: 15px;
            }
            .deal-top {
                position: relative;
                background: #104547;
                font-size: 16px;
                text-transform: uppercase;
                padding: 136px 24px 0;
            }
            .deal-top::after {
                content: "";
                position: absolute;
                left: 0;
                bottom: -50px;
                width: 0;
                height: 0;
                border-top: 50px solid #104547;
                border-left: 175px solid transparent;
                border-right: 183px solid transparent;
            }
            .deal-bottom {
                padding: 56px 16px 0;
            }
            .deal-bottom ul {
                margin: 0;
                padding: 0;
            }
            .deal-bottom  ul li {
                font-size: 16px;
                color: #fff;
                font-weight: 300;
                margin-top: 16px;
                border-top: 1px solid #E4E4E4;
                padding-top: 16px;
                list-style: none;
            }
            .btn-area a {
                display: inline-block;
                font-size: 18px;
                color: #fff;
                background: #104547;
                padding: 8px 64px;
                margin-top: 32px;
                border-radius: 4px;
                margin-bottom: 40px;
                text-transform: uppercase;
                font-weight: bold;
                text-decoration: none;
            }


            .single-price:hover {
                background: #104547;
            }
            .single-price:hover .deal-top {
                background: #262626;
            }
            .single-price:hover .deal-top:after {
                border-top: 50px solid #262626;
            }
            .single-price:hover .btn-area a {
                background: #262626;
            }
            /* ignore the code below */


            .link-area
            {
                position:fixed;
                bottom:20px;
                left:20px;
                padding:15px;
                border-radius:40px;
                background:#104547;
            }
            .link-area a
            {
                text-decoration:none;
                color:#fff;
                font-size:25px;
            }
            small {
                font-size: 12px;
                text-transform: initial;
            }
        </style>
    @endpush



    <!-- Hero area starts-->
    <section class="hero-area">
        <div class="hero-slider">
            <div class="active-slider">
                <div class="single-slider-one hero-utility">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8">
                                <div class="hero-text">
                                    <p> <i class="fas fa-angle-double-right"></i>
                                        Utilize cutting-edge AI technology to identify and engage in
                                        high-potential ventures
                                    </p>
                                    <h1>
                                        Harnessing the Power of Artificial Intelligence for <br>
                                        <span>Sustainable and Profitable</span> Investments
                                    </h1>
                                </div>

                                <div class="hero-cta d-flex align-items-center">
                                    <a href="{{route('register')}}" class="button header-cta">Get Started</a>

                                    <a href="{{route('login')}}" class="link">Login to Account</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="single-slider-two hero-utility">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8">
                                <div class="hero-text">
                                    <p> <i class="fas fa-angle-double-right"></i> Unlock the Wealth of  <span>Tomorrow</span></p>
                                    <h1>
                                        At {{$siteName}}, we harness the power of AI to unlock the untapped potentials.
                                    </h1>
                                </div>

                                <div class="hero-cta d-flex align-items-center">
                                    <a href="{{route('register')}}" class="button header-cta">Get Started</a>

                                    <a href="{{route('login')}}" class="link">Login to Account</a>

                                </div>

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


                            <a href="{{url('about')}}" class="button header-cta about-btn">Learn More</a>
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
    <!-- Blog starts -->
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <div class="sub-heading">
                            <img src="{{asset('home/images/section-title-icon.png')}}" alt="caret">
                            <p>Investment Packages</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                @foreach($packages as $package)
                    @inject('option','App\Defaults\Custom')
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-price">
                            <div class="deal-top">
                                <h3>{{$package->name}}</h3>
                                <h4> {{$package->roi}}%/ <span class="sup">{{$option->getReturnType($package->returnType)}}</span> </h4>
                                <small class="text-white">{{$package->note}}</small>
                            </div>
                            <div class="deal-bottom">
                                <ul class="deal-item">
                                    <li>
                                        Price: ${{number_format($package->minAmount,2)}} - @if($package->isUnlimited !=1)
                                            ${{number_format($package->maxAmount,2)}}
                                        @else
                                            Unlimited
                                        @endif
                                    </li>
                                    <li>Profit return: {{$package->roi}}% {{$option->getReturnType($package->returnType)}}</li>
                                    <li>Contract Duration: {{$package->Duration}}</li>
                                    <li>Referral Bonus: {{$package->referral}}% </li>
                                </ul>
                                <div class="btn-area">
                                    <a href="{{route('register')}}">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Blog Ends -->
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

    <!-- Counter starts -->
    <section class="counter">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 r-mb">
                    <div class="counter-img">
                        <img src="{{asset('home/images/counter-img.png')}}" alt="men">
                        <img class="overlay" src="{{asset('home/images/counter-overlay.png')}}" alt="overlay">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title">
                        <div class="sub-heading">
                            <img src="{{asset('home/images/section-title-icon.png')}}" alt="caret">
                            <p>Our achievements</p>
                        </div>
                        <h2>Building competitive business sectors</h2>
                    </div>

                    <div class="text-content">
                        <p>Ballan wrasse climbing gourami amur pike Arctic char, steelhead sprat sea lamprey grunion. Old World
                            knifefish pike
                            conger burbot pollock herring?</p>

                        <div class="counter-wrapper">
                            <div class="single-counter">
                                <h2>250+</h2>
                                <p>Projects completed in last 5 years</p>
                            </div>

                            <div class="single-counter pt-28">
                                <img src="{{asset('home/images/counter-arrow.png')}}" alt="arrow">
                                <h2>500+</h2>
                                <p>Happy Global Customers Who Trusted Us</p>
                            </div>

                            <div class="single-counter pt-28">
                                <h2>120+</h2>
                                <p>Intelligent minds behind the organization</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter ends -->

    <!-- Testimonials starts -->
    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 z-id-10">
                    <div class="row testimonial-slider">
                        <div class="testimonial-wrapper">
                            <i class="fas fa-quote-left"></i>
                            <p>" Investing with {{$siteName}} has been a game-changer for my financial world.
                                My first investment of $150 grew to yield over $1000 and that increased my faith in them.</p>

                            <div class="client-info">
                                <img src="https://ui-avatars.com/api/?name=Silver+alex" alt="man">
                                <div class="client-name">
                                    <h5>S. Alex</h5>
                                    <span>Investor</span>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-wrapper">
                            <i class="fas fa-quote-left"></i>
                            <p>"{{$siteName}} is simply the best. I started out trading cryptocurrencies on Binance but
                                after so many losses, I decided to seek for a real Broker to help me;{{$siteName}} has been
                                that real broker for me for the past 1 year</p>

                            <div class="client-info">
                                <img src="https://ui-avatars.com/api/?name=Sarah+T" alt="man">
                                <div class="client-name">
                                    <h5>Sarah T.</h5>
                                    <span>Investor</span>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-wrapper">
                            <i class="fas fa-quote-left"></i>
                            <p>"Navigating the world of financial freedom has been a hectic journey for me until I met with
                                {{$siteName}}. Since then, I just relax and plan my vacation from my returns on {{$siteName}}.</p>

                            <div class="client-info">
                                <img src="https://ui-avatars.com/api/?name=Elizabeth+L" alt="man">
                                <div class="client-name">
                                    <h5>Elizabeth L.</h5>
                                    <span>Investor</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title">
                        <div class="sub-heading">
                            <img src="{{asset('home/images/section-title-icon.png')}}" alt="caret">
                            <p>Testimonials</p>
                        </div>
                        <h2>What Clients are Saying about our services</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials ends -->

    <!-- Video starts -->
    <div class="video">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 padding-right">
                    <a href="https://www.youtube.com/watch?v=tK4Q85BNGto" class="pulse popup-hero" target="_blank">
                        <i class="fas fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Video ends -->

    <!-- FAQ starts -->
    <section class="faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 r-mb">
                    <div class="section-title">
                        <div class="sub-heading">
                            <img src="{{asset('home/images/section-title-icon.png')}}" alt="caret">
                            <p>FAQ</p>
                        </div>
                        <h2>Have any questions? ask us & get answer</h2>
                    </div>

                    <div class="faq-para">
                        <p>A few frequently asked questions and suitable answers to them</p>
                        <a href="{{url('faq')}}" class="button header-cta faq-btn">Explore More</a>
                    </div>

                </div>

                <div class="col-lg-7">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is {{$siteName}}?
                                    </button>
                                </h2>
                                <i class="fas fa-plus"></i>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>{{$siteName}} our company provides a full investment service focused on the bitcoin and cryptocurrency market We are among the best platforms to invest and grow your bitcoin and other cryptocurrency</p>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How do I create my account?
                                    </button>
                                </h2>
                                <i class="fas fa-plus"></i>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Registration process is very easy and will take a few moments to complete Simply click CREATE ACCOUNT button  and fill in all the required fields</p>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How do I make a deposit?
                                    </button>
                                </h2>
                                <i class="fas fa-plus"></i>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    To deposit funds in your trading account is quick and simple. For your
                                    convenience you may choose one of the several available deposit methods.
                                    To make a successful deposit please follow the steps below:<br>
                                    <ul>
                                        <li>Login to your account Click on the New Investment button in the
                                            DASHBOARD section.<br>
                                        </li>

                                        <li>Choose the deposit option And fill the form including the amount and
                                            the package.
                                        </li>
                                        <li>
                                            You will receive the wallet address to make payment to on the next page.
                                            After payment, contact support.
                                        </li>
                                        <li>
                                            Once your deposit has been confirmed, the status of the investment will change
                                            to <span class="text-primary">Ongoing</span> which means that it has been confirmed
                                            and your investment started.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ ends -->

    <!-- Blog starts -->
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <div class="sub-heading">
                            <img src="{{asset('home/images/section-title-icon.png')}}" alt="caret">
                            <p>Latest Transactions</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="sec-title_title" style="margin-bottom: 3rem;margin-top: 3rem;">Recent Deposits</div>
                    <table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                        <tr>
                            <th>Name</th>
                            <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($deposits as $deposit)
                            @inject('option','App\Defaults\Custom')
                            <tr>
                                <td>{{$option->getInvestor($deposit->user)}}</td>
                                <td>${{number_format($deposit->amount,2)}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>

                <div class="col-md-6">
                    <div class="sec-title_title" style="margin-bottom: 3rem;margin-top: 3rem;">Latest Withdrawals</div>
                    <table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                        <tr>
                            <th>Name</th>
                            <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($withdrawals as $withdrawal)
                            @inject('option','App\Defaults\Custom')
                            <tr>
                                <td>{{$option->getInvestor($withdrawal->user)}}</td>
                                <td>${{number_format($withdrawal->amount,2)}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </section>
    <!-- Blog Ends -->


    <!-- Blog starts -->
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <div class="sub-heading">
                            <img src="{{asset('home/images/section-title-icon.png')}}" alt="caret">
                            <p>Articles & News</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 r-mb">
                    <div class="blog-wrapper">
                        <rssapp-wall id="38kEBNRCi1vuK60z"></rssapp-wall>
                        <script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Blog Ends -->


@endsection
