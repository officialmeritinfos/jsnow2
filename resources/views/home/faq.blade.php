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

    <!-- FAQ area starts -->
    <section class="faq-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
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

                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse3" aria-expanded="false" aria-controls="collapseTwo">
                                        How long does my deposit take before it can reflect on my {{$siteName}} account dashboard?
                                    </button>
                                </h2>
                                <i class="fas fa-plus"></i>
                            </div>
                            <div id="collapse3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Your deposit will be reflected immediately once it is confirmed on the blockchain network</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse4" aria-expanded="false" aria-controls="collapseTwo">
                                        How do I make a withdrawal?
                                    </button>
                                </h2>
                                <i class="fas fa-plus"></i>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>To make a withdrawal request click the WITHDRAW button at the top center of your {{$siteName}} account dashboard and input the required details to withdraw</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse5" aria-expanded="false" aria-controls="collapseTwo">
                                        How long does it take to process my withdrawal?
                                    </button>
                                </h2>
                                <i class="fas fa-plus"></i>
                            </div>
                            <div id="collapse5" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Once we receive your withdrawal request we process immediately and send to your bitcoin wallet</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse6" aria-expanded="false" aria-controls="collapseTwo">
                                        Can I have more than one account?
                                    </button>
                                </h2>
                                <i class="fas fa-plus"></i>
                            </div>
                            <div id="collapse6" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>No you cannot have more than one account only investors on the vip plan are allowed to do so</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse7" aria-expanded="false" aria-controls="collapseTwo">
                                        Is this company properly registered?
                                    </button>
                                </h2>
                                <i class="fas fa-plus"></i>
                            </div>
                            <div id="collapse7" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Yes we are officially and properly registered with the United Kingdom and registered with the name {{$siteName}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ area ends -->

@endsection
