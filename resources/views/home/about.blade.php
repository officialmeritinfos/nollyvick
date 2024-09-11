@extends('home.base')
@section('content')

    <!-- page-banner start -->
    <section class="page-banner pt-xs-60 pt-sm-80 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-banner__content mb-xs-10 mb-sm-15 mb-md-15 mb-20">
                        <div class="transparent-text">{{$pageName}}</div>
                        <div class="page-title">
                            <h1>{{$pageName}}</h1>
                        </div>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$pageName}}</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-6">
                    <div class="page-banner__media mt-xs-30 mt-sm-40">
                        <img src="{{asset('home/img/page-banner/page-banner-start.svg')}}" class="img-fluid start" alt="">
                        <img src="{{asset('home/img/page-banner/page-banner.jpg')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page-banner end -->

    <!-- about-us start -->
    <section class="about-us pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-us__content  mb-lg-60 mb-md-50 mb-sm-40 mb-xs-30">
                        <span class="sub-title fw-500 color-yellow text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block"><img src="{{asset('home/img/team-details/badge-line-yellow.svg')}}" class="img-fluid mr-10" alt=""> About Us</span>
                        <h2 class="title color-secondary mb-20 mb-sm-15 mb-xs-10">Experienced. Specialized. Professional.</h2>

                        <div class="description font-la mb-50 mb-sm-40 mb-xs-30">
                            <p>
                                Founded in 2012, we are a global investment agency helping individuals build their financial dreams into reality. From a humble beginning, we have grown to become a notable force in the investment industry with over 40K+ users.
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

                        <div class="circle-chart__wrapper d-flex flex-wrap justify-content-between mb-60 mb-md-50 mb-sm-40 mb-xs-30">
                            <div class="circle-chart__item d-flex align-items-center">
                                <div class="chart-wrapper">
                                    <div class="chart" data-percent="87" data-scale-color="#ffb400">87%</div>
                                </div>
                                <h6 class="title color-secondary">Digital Consultancy</h6>
                            </div>

                            <div class="circle-chart__item d-flex align-items-center">
                                <div class="chart-wrapper">
                                    <div class="chart" data-percent="79" data-scale-color="#ffb400">79%</div>
                                </div>
                                <h6 class="title color-secondary">Financial Management</h6>
                            </div>
                        </div>

                        <a href="{{url('about')}}" class="theme-btn  btn-yellow-transparent fw-600">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="about-us__media d-flex align-content-center justify-content-center align-items-center">
                        <div class="media">
                            <img src="{{asset('home/img/home-2/about-media.png')}}" class="img-fluid" alt="">
                        </div>

                        <div class="expert-team expert-team-one text-center" style="background-image: url({{asset('home/img/home-2/expert-team-1.png')}})">
                            <div class="number color-white mb-10 mb-xs-5 fw-600"><span>100</span>+</div>
                            <h6 class="title font-la color-white">Expert Team Members</h6>
                        </div>

                        <div class="expert-team expert-team-two text-center" style="background-image: url({{asset('home/img/home-2/expert-team-2.png')}})">
                            <div class="number color-white mb-10 mb-xs-5 fw-600"><span>46</span>k</div>
                            <h6 class="title font-la color-white">Clients Satisfaction Survey In Consulting Organization</h6>
                        </div>

                        <div class="expert-team expert-team-three text-center" style="background-image: url({{asset('home/img/home-2/expert-team-3.png')}})">
                            <div class="number color-white mb-10 mb-xs-5 fw-600"><span>8</span>+</div>
                            <h6 class="title font-la color-white">Years Experiance Our Company</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <a href="{{asset('home/certificate.jpg')}}" target="_blank">
                        <img src="{{asset('home/certificate.jpg')}}">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- about-us end -->

    <!-- our-provide start -->
    <section class="similar-work services-work bg-dark_white pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-135 pb-120 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="employee-friendly__content mb-65 mb-md-50 mb-sm-40 mb-xs-30 text-center">
                        <span class="sub-title fw-500 color-yellow text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block"><img src="{{asset('home/img/team-details/badge-line-yellow.svg')}}" class="img-fluid mr-10" alt=""> Services</span>
                        <h2 class="title color-d_black">Services we provide</h2>
                    </div>
                </div>
            </div>

            <div class="row mb-minus-30">
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <div class="similar-work__item mb-30 d-flex justify-content-between flex-column">
                            <div class="top d-flex align-items-center">
                                <div class="icon color-white text-center bg-yellow">
                                    <i class="fal fa-analytics"></i>
                                </div>

                                <h4 class="title color-secondary"><a href="{{route('service.details',['id'=>$service->id])}}">{{$service->title}}</a></h4>
                            </div>

                            <div class="bottom">
                                <div class="media overflow-hidden">
                                    <img src="{{asset('home/serv/'.$service->photo)}}" class="img-fluid" alt="">
                                </div>

                                <div class="text pt-30 pr-30 pb-30 pl-30 pt-sm-20 pt-xs-15 pr-sm-20 pr-xs-15 pb-sm-20 pb-xs-15 pl-sm-20 pl-xs-15 font-la">
                                    <p> {{$service->short}}</p>
                                </div>

                                <a href="{{route('service.details',['id'=>$service->id])}}" class="theme-btn text-center fw-600 btn-yellow">Discover More <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
    </section>
    <!-- our-provide end -->

@endsection
