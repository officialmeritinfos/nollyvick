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
        background: rgba(255, 156, 0, 0.9);
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
        border-top: 50px solid rgba(255, 156, 0, 0.9);
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

    .deal-bottom ul li {
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
        background: rgba(255, 156, 0, 0.9);
        padding: 8px 64px;
        margin-top: 32px;
        border-radius: 4px;
        margin-bottom: 40px;
        text-transform: uppercase;
        font-weight: bold;
        text-decoration: none;
    }


    .single-price:hover {
        background: rgba(255, 156, 0, 0.9);
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


    .link-area {
        position: fixed;
        bottom: 20px;
        left: 20px;
        padding: 15px;
        border-radius: 40px;
        background: rgba(255, 156, 0, 0.9);
    }

    .link-area a {
        text-decoration: none;
        color: #fff;
        font-size: 25px;
    }

    small {
        font-size: 12px;
        text-transform: initial;
    }
</style>
@endpush


<!-- banner slider start -->
<section class="banner-slider__wrapper pt-0 pb-0 overflow-hidden">
    <div class="slider-controls">
        <div class="banner-slider-arrows d-flex flex-column"></div>
    </div>

    <div class="banner-slider overflow-hidden">
        <div class="slider-item" style="background-image: url({{asset('home/img/banner/banne-slider-1.png')}});">
            <div class="number" data-animation="fadeInUp" data-delay="0.6s">01</div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner__content text-center">
                            <h6 class="sub-title color-white mb-15 mb-sm-15 mb-xs-10" data-animation="fadeInUp"
                                data-delay="0.5s"><span>Trade </span> Like a Pro</h6>
                            <h1 class="title color-white mb-sm-30 mb-xs-20 mb-40" data-animation="fadeInUp"
                                data-delay="1s">
                                Trade like a Pro with {{$siteName}}
                            </h1>

                            <div class="theme-btn__wrapper d-flex justify-content-center">
                                <a href="{{route('register')}}" class="theme-btn btn-sm" data-animation="fadeInUp"
                                    data-delay="1.3s">Create Account<i class="fas fa-long-arrow-alt-right"></i></a>
                                <a href="{{route('login')}}" class="theme-btn btn-sm btn-white"
                                    data-animation="fadeInUp" data-delay="1.5s">Login <i
                                        class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url({{asset('home/img/banner/banne-slider-1.png')}});">
            <div class="number" data-animation="fadeInUp" data-delay="0.6s">01</div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner__content text-center">
                            <h6 class="sub-title color-white mb-15 mb-sm-15 mb-xs-10" data-animation="fadeInUp"
                                data-delay="0.5s"><span>8+ Years</span> Of Successful Financial Trading</h6>
                            <h1 class="title color-white mb-sm-30 mb-xs-20 mb-40" data-animation="fadeInUp"
                                data-delay="1s">A big Opportutnity for your Financial Growth</h1>

                            <div class="theme-btn__wrapper d-flex justify-content-center">
                                <a href="{{route('register')}}" class="theme-btn btn-sm" data-animation="fadeInUp"
                                    data-delay="1.3s">Create Account<i class="fas fa-long-arrow-alt-right"></i></a>
                                <a href="{{route('login')}}" class="theme-btn btn-sm btn-white"
                                    data-animation="fadeInUp" data-delay="1.5s">Login <i
                                        class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url({{asset('home/img/banner/banne-slider-1.png')}});">
            <div class="number" data-animation="fadeInUp" data-delay="0.6s">01</div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner__content text-center">
                            <h6 class="sub-title color-white mb-15 mb-sm-15 mb-xs-10" data-animation="fadeInUp"
                                data-delay="0.5s"><span>Retirement</span> Made Easy</h6>
                            <h1 class="title color-white mb-sm-30 mb-xs-20 mb-40" data-animation="fadeInUp"
                                data-delay="1s">
                                Plan for Retirement with Retirement Investing
                            </h1>

                            <div class="theme-btn__wrapper d-flex justify-content-center">
                                <a href="{{route('register')}}" class="theme-btn btn-sm" data-animation="fadeInUp"
                                    data-delay="1.3s">Create Account<i class="fas fa-long-arrow-alt-right"></i></a>
                                <a href="{{route('login')}}" class="theme-btn btn-sm btn-white"
                                    data-animation="fadeInUp" data-delay="1.5s">Login <i
                                        class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner slider end -->

<!-- about-us start -->
<section class="about-us pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-us__content  mb-lg-60 mb-md-50 mb-sm-40 mb-xs-30">
                    <span class="sub-title fw-500 color-yellow text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block"><img
                            src="{{asset('home/img/team-details/badge-line-yellow.svg')}}" class="img-fluid mr-10"
                            alt=""> About Us</span>
                    <h2 class="title color-secondary mb-20 mb-sm-15 mb-xs-10">Experienced. Specialized. Professional.
                    </h2>

                    <div class="description font-la mb-50 mb-sm-40 mb-xs-30">
                        <p>
                            We are a business inclined profitable investment company with all the right tools and
                            experts
                            to help you grow your investment.
                        </p>
                        <p>We Run Promotions And Ranks Platforms that will support and grow more funds for our reputable
                            Clients.</p>
                        <p>With our easy to use online platform, you’ll have more control over your financial position.
                            You and your financial adviser can manage your investments online, react more
                            quickly to market developments and alter your asset choice whenever you want.</p>
                    </div>

                    <div
                        class="circle-chart__wrapper d-flex flex-wrap justify-content-between mb-60 mb-md-50 mb-sm-40 mb-xs-30">
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

                    <a href="{{url('about')}}" class="theme-btn  btn-yellow-transparent fw-600">Read More <i
                            class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="about-us__media d-flex align-content-center justify-content-center align-items-center">
                    <div class="media">
                        <img src="{{asset('home/img/home-2/about-media.png')}}" class="img-fluid" alt="">
                    </div>

                    <div class="expert-team expert-team-one text-center"
                        style="background-image: url({{asset('home/img/home-2/expert-team-1.png')}})">
                        <div class="number color-white mb-10 mb-xs-5 fw-600"><span>100</span>+</div>
                        <h6 class="title font-la color-white">Expert Team Members</h6>
                    </div>

                    <div class="expert-team expert-team-two text-center"
                        style="background-image: url({{asset('home/img/home-2/expert-team-2.png')}})">
                        <div class="number color-white mb-10 mb-xs-5 fw-600"><span>46</span>k</div>
                        <h6 class="title font-la color-white">Clients Satisfaction Survey In Consulting Organization
                        </h6>
                    </div>

                    <div class="expert-team expert-team-three text-center"
                        style="background-image: url({{asset('home/img/home-2/expert-team-3.png')}})">
                        <div class="number color-white mb-10 mb-xs-5 fw-600"><span>8</span>+</div>
                        <h6 class="title font-la color-white">Years Experiance Our Company</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-us end -->

<!-- our-provide start -->
<section
    class="similar-work services-work bg-dark_white pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-135 pb-120 overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="employee-friendly__content mb-65 mb-md-50 mb-sm-40 mb-xs-30 text-center">
                    <span class="sub-title fw-500 color-yellow text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block"><img
                            src="{{asset('home/img/team-details/badge-line-yellow.svg')}}" class="img-fluid mr-10"
                            alt=""> Services</span>
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

                        <h4 class="title color-secondary"><a
                                href="{{route('service.details',['id'=>$service->id])}}">{{$service->title}}</a></h4>
                    </div>

                    <div class="bottom">
                        <div class="media overflow-hidden">
                            <img src="{{asset('home/serv/'.$service->photo)}}" class="img-fluid" alt="">
                        </div>

                        <div
                            class="text pt-30 pr-30 pb-30 pl-30 pt-sm-20 pt-xs-15 pr-sm-20 pr-xs-15 pb-sm-20 pb-xs-15 pl-sm-20 pl-xs-15 font-la">
                            <p> {{$service->short}}</p>
                        </div>

                        <a href="{{route('service.details',['id'=>$service->id])}}"
                            class="theme-btn text-center fw-600 btn-yellow">Discover More <i
                                class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>

    </div>
</section>
<!-- our-provide end -->

<!-- why-choose start -->
<section class="why-choose pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="why-choose__media-wrapper d-flex flex-column">
                    <div class="gallery-bar bg-yellow"></div>

                    <div class="why-choose__media">
                        <img src="{{asset('home/img/services/why-choose-1.png')}}" alt="" class="img-fluid">
                    </div>

                    <div class="global-country text-center bg-yellow">
                        <div class="number mb-5 color-white"><span class="counter">120</span>+</div>
                        <h6 class="title color-white font-la">Global Country in <br>Our Company</h6>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="why-choose__content mt-lg-60 mt-md-50 mt-sm-40 mt-xs-35">
                    <div class="why-choose__text mb-40 mb-md-35 mb-sm-30 mb-xs-30">
                        <span
                            class="sub-title d-block fw-500 color-yellow text-uppercase mb-sm-10 mb-xs-5 mb-md-15 mb-lg-20 mb-25"><img
                                src="{{asset('home/img/team-details/badge-line-yellow.svg')}}" class="img-fluid mr-10"
                                alt=""> Why choose us</span>
                        <h2 class="title color-pd_black">Making Investments easy and stress-free</h2>

                        <div class="description font-la mt-20 mt-sm-15 mt-xs-10">
                            <p>
                                Our goal is to provide our investors with a reliable source of high income, while
                                minimizing any possible risks and offering a high-quality service..
                            </p>
                        </div>
                    </div>

                    <div class="why-choose__item-wrapper d-grid justify-content-between">
                        <div class="why-choose__item">
                            <div class="icon mb-15 mb-md-10 mb-xs-5 color-yellow">
                                <i class="icon-consultation"></i>
                            </div>

                            <h5 class="title color-secondary fw-500 mb-10">Legal Company</h5>

                            <div class="description font-la">
                                <p>
                                    Our company conducts absolutely legal activities in the legal field. We
                                    are certified to operate investment business, we are legal and safe..
                                </p>
                            </div>
                        </div>

                        <div class="why-choose__item">
                            <div class="icon mb-15 mb-md-10 mb-xs-5 color-yellow">
                                <i class="icon-lawyer"></i>
                            </div>

                            <h5 class="title color-secondary fw-500 mb-10">High reliability</h5>

                            <div class="description font-la">
                                <p>
                                    We are trusted by a huge number of people. We are working hard constantly to
                                    improve the level of our security system and minimize possible risks..
                                </p>
                            </div>
                        </div>

                        <div class="why-choose__item">
                            <div class="icon mb-15 mb-md-10 mb-xs-5 color-yellow">
                                <i class="icon-financial"></i>
                            </div>

                            <h5 class="title color-secondary fw-500 mb-10">Quick Withdrawal</h5>

                            <div class="description font-la">
                                <p>
                                    Our all retreats are treated spontaneously once requested. There are
                                    high maximum limits. The minimum withdrawal amount is only $10 ..
                                </p>
                            </div>
                        </div>

                        <div class="why-choose__item">
                            <div class="icon mb-15 mb-md-10 mb-xs-5 color-yellow">
                                <i class="icon-management"></i>
                            </div>

                            <h5 class="title color-d_black secondary-500 mb-10">24/7 Support</h5>

                            <div class="description font-la">
                                <p>
                                    We provide 24/7 customer support through e-mail and telegram.
                                    Our support representatives are periodically available to elucidate any
                                    difficulty..
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- why-choose end -->

<!-- counter-area start -->
<div class="counter-area pb-xs-80 pb-sm-100 pb-md-100 pb-120 overflow-hidden">
    <div class="container">
        <div class="row mb-minus-30 justify-content-center">
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="counter-area__item counter-area__item-two d-flex align-items-center">
                    <div class="icon color-yellow">
                        <i class="icon-process-1"></i>
                    </div>

                    <div class="text text-center">
                        <div class="number fw-600 color-yellow"><span class="counter">56</span>M+</div>
                        <div class="description font-la">Successful Investments</div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="counter-area__item counter-area__item-two d-flex align-items-center">
                    <div class="icon color-yellow">
                        <i class="icon-support-2"></i>
                    </div>

                    <div class="text text-center">
                        <div class="number fw-600 color-yellow"><span class="counter">100</span>+</div>
                        <div class="description font-la">Expert Agents</div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="counter-area__item counter-area__item-two d-flex align-items-center">
                    <div class="icon color-yellow">
                        <i class="icon-teamwork-1"></i>
                    </div>

                    <div class="text text-center">
                        <div class="number fw-600 color-yellow"><span class="counter">39</span>K+</div>
                        <div class="description font-la">Clients</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- counter-area end -->
<!-- work-process end -->
<section class="work-process pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-100 overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pricing__content mb-60 mb-sm-40 mb-xs-30 text-center">
                    <span
                        class="sub-title d-block fw-500 color-yellow text-uppercase mb-sm-10 mb-xs-5 mb-md-15 mb-lg-20 mb-25"><img
                            src="{{asset('home/img/team-details/badge-line-yellow.svg')}}" class="img-fluid mr-10"
                            alt=""> Our Work Process</span>
                    <h2 class="title color-d_black">How Our Investment Work</h2>
                </div>
            </div>
        </div>

        <div class="row mb-minus-30">
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="work-process__item mb-70 text-center">
                    <div class="icon mx-auto">
                        <i class="icon-research"></i>
                    </div>

                    <div class="text">
                        <h6 class="title color-secondary mb-15 mb-sm-10 mb-xs-5">Create account</h6>

                        <div class="description font-la">
                            <p>Create a secured account on {{$siteName}}</p>
                        </div>
                    </div>

                    <button class="theme-btn btn-black text-uppercase">Step - 1</button>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="work-process__item mb-70 text-center">
                    <div class="icon mx-auto">
                        <i class="icon-worker-1"></i>
                    </div>

                    <div class="text">
                        <h6 class="title color-secondary mb-15 mb-sm-10 mb-xs-5">Initiate Investment & Fund</h6>

                        <div class="description font-la">
                            <p>Fund your investment package. You can select any of our packages to start with.</p>
                        </div>
                    </div>

                    <button class="theme-btn btn-black text-uppercase">Step - 2</button>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="work-process__item mb-70 text-center">
                    <div class="icon mx-auto">
                        <i class="icon-outline"></i>
                    </div>

                    <div class="text">
                        <h6 class="title color-secondary mb-15 mb-sm-10 mb-xs-5">
                            Follow-up Investment
                        </h6>

                        <div class="description font-la">
                            <p>
                                Depending on the package, your investment will return on a daily or weekly basis.
                            </p>
                        </div>
                    </div>

                    <button class="theme-btn btn-black text-uppercase">Step - 3</button>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="work-process__item mb-70 text-center">
                    <div class="icon mx-auto">
                        <i class="icon-target-2"></i>
                    </div>

                    <div class="text">
                        <h6 class="title color-secondary mb-15 mb-sm-10 mb-xs-5">Withdraw</h6>

                        <div class="description font-la">
                            <p>
                                At the end of the investment cycle, withdraw your earnings.
                            </p>
                        </div>
                    </div>

                    <button class="theme-btn btn-black text-uppercase">Step - 4</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- work-process end -->

<!-- testimonial start -->
<section
    class="testimonial bg-dark_yellow pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-9">
                <div class="employee-friendly__content">
                    <span class="sub-title fw-500 color-yellow text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block">
                        <img src="{{asset('home/img/team-details/badge-line-yellow.svg')}}" class="img-fluid mr-10"
                            alt=""> testimonials</span>
                    <h2 class="title color-secondary">Check what clients say</h2>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="slider-controls mt-xs-15">
                    <div class="testimonial-slider-arrows d-flex align-content-center justify-content-sm-end"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="testimonial-slider-home-2 mt-65 mt-md-50 mt-sm-40 mt-xs-30">
                    <div class="slider-item">
                        <div class="testimonial__item testimonial-item-two">
                            <div
                                class="testimonial__item-header d-flex justify-content-between align-items-center mb-35 mb-sm-25 mb-xs-20">
                                <div class="left d-flex align-items-center">
                                    <div class="media overflow-hidden">
                                        <img src="{{asset('testimonial/testimonial-4.png')}}" class="img-fluid" alt="">
                                    </div>

                                    <div class="meta">
                                        <h6 class="name fw-500 text-uppercase color-d_black">Elizabeth Linda</h6>
                                        <span class="position font-la fw-500 color-d_black">Investor</span>
                                    </div>
                                </div>

                                <div class="right">
                                    <i class="fal fa-quote-right"></i>
                                </div>
                            </div>

                            <div class="description font-la mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                                <p>
                                    “Great company With great investment services keep up the good work”
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="slider-item">
                        <div class="testimonial__item testimonial-item-two">
                            <div
                                class="testimonial__item-header d-flex justify-content-between align-items-center mb-35 mb-sm-25 mb-xs-20">
                                <div class="left d-flex align-items-center">
                                    <div class="media overflow-hidden">
                                        <img src="{{asset('home/img/testimonial/testimonial-1.png')}}" class="img-fluid"
                                            alt="">
                                    </div>

                                    <div class="meta">
                                        <h6 class="name fw-500 text-uppercase color-d_black">Md Ashikul Islam</h6>
                                        <span class="position font-la fw-500 color-d_black">Investor</span>
                                    </div>
                                </div>

                                <div class="right">
                                    <i class="fal fa-quote-right"></i>
                                </div>
                            </div>

                            <div class="description font-la mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                                <p>
                                    “I keep recommending to my friends and family because of their overwhelmingly
                                    impressive financial services”
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="slider-item">
                        <div class="testimonial__item testimonial-item-two">
                            <div
                                class="testimonial__item-header d-flex justify-content-between align-items-center mb-35 mb-sm-25 mb-xs-20">
                                <div class="left d-flex align-items-center">
                                    <div class="media overflow-hidden">
                                        <img src="{{asset('home/img/testimonial/testimonial-3.png')}}" class="img-fluid"
                                            alt="">
                                    </div>

                                    <div class="meta">
                                        <h6 class="name fw-500 text-uppercase color-d_black">Stephen Larry</h6>
                                        <span class="position font-la fw-500 color-d_black">Investorr</span>
                                    </div>
                                </div>

                                <div class="right">
                                    <i class="fal fa-quote-right"></i>
                                </div>
                            </div>

                            <div class="description font-la mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                                <p>
                                    “After trading and mining I was able to withdraw my profits without any issues”
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="slider-item">
                        <div class="testimonial__item testimonial-item-two">
                            <div
                                class="testimonial__item-header d-flex justify-content-between align-items-center mb-35 mb-sm-25 mb-xs-20">
                                <div class="left d-flex align-items-center">
                                    <div class="media overflow-hidden">
                                        <img src="{{asset('home/img/testimonial/testimonial-2.png')}}" class="img-fluid"
                                            alt="">
                                    </div>

                                    <div class="meta">
                                        <h6 class="name fw-500 text-uppercase color-d_black">Ivy L</h6>
                                        <span class="position font-la fw-500 color-d_black">Investor</span>
                                    </div>
                                </div>

                                <div class="right">
                                    <i class="fal fa-quote-right"></i>
                                </div>
                            </div>

                            <div class="description font-la mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                                <p>
                                    “Everything went just as they promised. I got my returns without issues, and
                                    withdrew them seamlessly.”
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial end -->

<div class="pricing-area" style="margin-bottom: 5rem;margin-top: 5rem;">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Our Packages</span>
            <h2>Specialized Investment Packages</h2>
        </div>
        <div class="row justify-content-center">
            @foreach($packages as $package)
            @inject('option','App\Defaults\Custom')
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-price">
                    <div class="deal-top">
                        <h3>{{$package->name}}</h3>
                        <h4> {{$package->roi}}%/ <span
                                class="sup">{{$option->getReturnType($package->returnType)}}</span> </h4>
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
</div>


<!-- Start Blog Area -->
<div class="blog-area pt-100 pb-70" style="margin-bottom: 5rem;">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Latest Transactions</span>
            <h2>Most Recent Transactions</h2>
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
    <!-- End News One -->
</div>

<!-- blog-news start -->
<section class="blog-news pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden"
    style="background-image: url({{asset('home/img/home-3/blog-new-bg.png')}});">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="blog-news__content text-center">
                    <span class="sub-title fw-500  text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block color-yellow"><img
                            src="{{asset('home/img/team-details/badge-line-yellow.svg')}}" class="img-fluid mr-10"
                            alt=""> Blog & News</span>
                    <h2 class="title color-d_black">{{$siteName}} Latest Blog & News</h2>
                </div>
            </div>
        </div>

        <div class="blog-news__bottom mt-60 mt-sm-50 mt-xs-40">
            <div class="row mb-minus-30">

                <div class="col-xl-12 col-md-12 col-12">
                    <div class="blog-item blog-item-two mb-30">
                        <rssapp-wall id="tUnw8WjWtYT1oJ3Z"></rssapp-wall>
                        <script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- blog-news end -->


@endsection