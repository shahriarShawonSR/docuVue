@extends('web.app')
@section('title','TMSS Admin')

@section('content')
  <!--------------HEADER AREA END----------------->
  
        <!--banner area Start-->
        <section class="banner-area">
            <!--            <video class="video-area" autoplay loop src="video/bannerJ.mp4"></video>-->
            <video class="video-area" autoplay muted loop id="myVideo">
                <source src="{{URL::asset('la-assets/web/video/bannerJ.mkv')}}" type="video/mp4">
            </video>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner-content">
                            <h1>Stay with us and Safe your Documents</h1>
                            <h2>Be progressive. Make impact. Get noticed.</h2>
                            <div class="banner-buttons">
                                <a href="{{url('/demo_reg')}}" class="button big blue">Get Started Now</a>
                                <!--<a href="{{url('/demo_reg')}}" class="button big white">DEMO</a>-->
                            </div>
                        </div>
                        <div class="scroll">
                            <a href="#">SCROLL TO LEARN MORE<div class="trDwn"><i class="fas fa-angle-down"></i></div></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--banner area End-->
        <!--partners area Start-->
        <section class="partners-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2><a href="">Our Partners </a></h2>
                            <p>We have great Document Management Software and culture</p>
                        </div>
                        <div class="partners-carousel">
                            <div class="single-partner-img">
                                <img src="{{URL::asset('la-assets/web/images/a2i-logo.png')}}" alt="Customer 3 logo">
                            </div>
                            <div class="single-partner-img">
                                <img src="{{URL::asset('la-assets/web/images/gov_logo_t.png')}}" alt="Customer 3 logo">
                            </div>
                            <div class="single-partner-img">
                                <img src="{{URL::asset('la-assets/web/images/prothom-alo.png')}}" alt="Customer 3 logo">
                            </div>
                            <div class="single-partner-img">
                                <img src="{{URL::asset('la-assets/web/images/channel-i-bangla.png')}}" alt="Customer 3 logo">
                            </div>
                            <div class="single-partner-img fix-width">
                                <img src="{{URL::asset('la-assets/web/images/Dutch-Bangla_Bank_Limited_b3cOuFO.png')}}" alt="Customer 3 logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--partners area End-->


        <!--make area Start-->
        <section class="make-area section-padding imgright darkblue mpb0 ">
            <div class="container">
                <div class="make-area-content">
                    <div class="info">
                        <h2>Make DMSs more meaningful</h2>
                        <p>TMSS&reg; Keeping your paperless office documents only on your computer or local server poses the risks of hard drive failure, fire, flood or burglary. And what if you want to access one of those important files away from the office? Meet Folderit. The ultimate online document management system for small businesses and organizations, the most user-friendly DMS in the world! We didn’t bulk it up with features real people never need. So, you can find the documents you need much more easily!
                        </p>
                    </div>
                    <div class="middle">
                        <div class="img">
                            <img src="{{URL::asset('la-assets/web/images/dashboard-hr.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--make area End-->

       <!--bgwhite area Start-->
        <section class="client-say-area bgwhite">
            <div class="container">
                <div class="client-carousel quote mb40 showtooltip">
                    <p class="current">
                        <img src="http://honeycombhr.org/images/M-K-Islam.png" alt="Photo of customer Nublue" />
                        "Everything I need to know in regards to my financials and benefits, I can access through Workforce Now. I really do love it." - M. K. Islam
                    </p>
                    <p class="current">
                        <img src="http://honeycombhr.org/images/nublue.png" alt="Photo of customer Nublue" />
                        "70%-80% of our manual work has been moved to Honey-Comb. It is all in the cloud now, so we have access wherever we go." - Abdul Karim
                    </p>
                </div>
            </div>
        </section>
        <!--bgwhite area End-->
        <section class="employee-area imgleft darkblue section-padding">
            <div class="container">
                <div class="employee-area-content">
                    <div class="middle">
                        <div class="employee-img img">
                            <img src="{{URL::asset('la-assets/web/images/employee_records.png')}}" alt="HR Software Employee Portal">
                        </div>
                    </div>
                    <div class="info">
                        <h2><a href="/blog/index.php/2018/03/14/people-ranked-in-top-3-hr-software-of-2018-2/">The Most User-Friendly DMSs in the World</a></h2>
                        <p>Paperless document management is a clear and easy part of everyday business for many companies and organizations worldwide. For those who have chosen Folderit.</p>
                        <ul class="icons">
                            <li><a href="#"><i class="fab fa-windows"></i></a></li>
                            <li><a href="#"><i class="fab fa-apple"></i></a></li>
                            <li><a href="#"><i class="fab fa-android"></i></a></li>
                        </ul>
                        <span class="clear"></span>
                        <a href="hr_software.html" class="button big blue">Explore The Software</a>
                    </div>
                </div>
            </div>
        </section>
        <!--employee area End-->



<!--        <div class="pricng-area wow fadeInUp" id="pricing" style="visibility: visible; animation-name: fadeInUp;">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-md-12 text-center">-->
<!--                        <div class="section-title cta-pricing">-->
<!--                            <h2>Pricing</h2>-->
<!--                            <p>Most such devices are sold with several apps bundled as pre-installed software,-->
<!--                                <br> such as a web browser, email client, calendar, mapping program.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-10 offset-lg-1 col-md-12">-->
<!--                        <div class="row">-->
<!--                            <div class="col-md-4 text-center">-->
<!--                                <div class="single-pricing">-->
<!--                                    <h5>Basic</h5>-->
<!--                                    <h4>$10 <span>/mo</span></h4>-->
<!--                                    <ul>-->
<!--                                        <li>1 user</li>-->
<!--                                        <li>10 projects</li>-->
<!--                                        <li>access to all features</li>-->
<!--                                        <li>24/7 support</li>-->
<!--                                    </ul>-->
<!--                                    <a href="#" class="price-btn">ordre now</a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-md-4 text-center">-->
<!--                                <div class="single-pricing c-active">-->
<!--                                    <h5>Standard</h5>-->
<!--                                    <h4>$20 <span>/mo</span></h4>-->
<!--                                    <ul>-->
<!--                                        <li>3 user</li>-->
<!--                                        <li>20 projects</li>-->
<!--                                        <li>access to all features</li>-->
<!--                                        <li>24/7 support</li>-->
<!--                                    </ul>-->
<!--                                    <a href="#" class="price-btn">ordre now</a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-md-4 text-center">-->
<!--                                <div class="single-pricing">-->
<!--                                    <h5>Premium</h5>-->
<!--                                    <h4>$40 <span>/mo</span></h4>-->
<!--                                    <ul>-->
<!--                                        <li>7 user</li>-->
<!--                                        <li>10 projects</li>-->
<!--                                        <li>access to all features</li>-->
<!--                                        <li>24/7 support</li>-->
<!--                                    </ul>-->
<!--                                    <a href="#" class="price-btn">ordre now</a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--<section class="bgwhite secguide what-area" style="border-top:1px solid #f1f1f1;">-->
<!--            <div class="buyCall">-->
<!--                <div class="container">-->
<!--                    <div class="what-area">-->
<!--                        <div class="row">-->
<!--                            <div class="col-md-12">-->
<!--                                <div class="section-title section-title2">-->
<!--                                    <h2>What is Document Management (DMS)?</h2>-->
<!--                                    <br>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--     <p>Document management, often referred to as Document Management Systems (DMS), is the use of a computer system and software to store, manage and track electronic documents and electronic images of paper based information captured through the use of a document scanner.-->

<!--Document management is how your organization stores, manages and tracks its electronic documents.-->

<!--According to ISO 12651-2, a document is "recorded information or object which can be treated as a unit". While this sounds a little complicated, it is quite simply what you have been using to create, distribute and use for years.-->

<!--Now, we can define document management as the software that controls and organizes documents throughout an organization. It incorporates document and content capture, workflow, document repositories, COLD/ERM, and output systems, and information retrieval systems. Also, the processes used to track, store and control documents.                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <!-- guide Start-->
            <!-- guide End-->
<!--        </section>-->

        <!--What area End-->
        <!--product area Start-->
        <section class=".product-area section-padding" style="border-top:1px solid #f1f1f1;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2><a href="/blog/index.php/2018/03/14/people-ranked-in-top-3-hr-software-of-2018-2/">Other Softwares</a></h2>
                            <p>We have NEW functionable softwares</p>
                        </div>

                        <div class="product-images">
                            <div class="single-product-img">
                                <a href="http://www.mikrof.com"><img src="{{ asset('la-assets/web/images/mikrof_logo.png')}}" class="awrda" /></a>
                            </div>
                            <div class="single-product-img">
                                <a href="http://www.imikrof.com"><img src="{{ asset('la-assets/web/images/imikrof.png')}}" class="awrda" /></a>
                            </div>
                            <div class="single-product-img">
                                <a href="http://www.honeycombhr.org"><img src="{{ asset('la-assets/web/images/CA.png')}}" class="awrd" /></a>
                            </div>
                            <div class="single-product-img">
                                <a href="http://www.caccounts.com"><img src="{{ asset('la-assets/web/images/Education.png')}}" class="awrda" /></a>
                            </div>
                            <div class="single-product-img">
                                <a href="http://www.edu-desk.net"><img src="{{ asset('la-assets/web/images/erp.png')}}" class="awrd" /></a>
                            </div>
                            <div class="single-product-img">
                                <a href="http://www.docu-vue.com"><img src="{{ asset('la-assets/web/images/coop-desk.png')}}" class="awrdb" /></a>
                            </div>
                            <div class="single-product-img">
                                <a href="http://www.coop-desk.com"><img src="{{ asset('la-assets/web/images/doc-vue.png')}}" class="awrdb" /></a>
                            </div>
                            <div class="single-product-img">
                                <a href="http://www.land-mis.com"><img src="{{ asset('la-assets/web/images/land.png')}}" class="awrdc" /></a>
                            </div>
                            <div class="single-product-img">
                                <a href="http://www.martrise.com"><img src="{{ asset('la-assets/web/images/mart-rise-logo.png')}}" class="awrdd" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--product area End-->

 
@endsection
