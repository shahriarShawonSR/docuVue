@extends('web.app')
@section('title','TMSS Admin')
@section('content')
 <!--header area-->

        <section class="inner-hero-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner-content">
                            <br>
                            <br>
                             <br>
                            <br>
                           
                            <h1>Full Features</h1>
                            <p><a href="index.html">Home</a> <span class="divider">/</span> Features</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="partners-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       <div class="section-title">
                            <h2><a href="">Our Media Partners </a></h2>
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
        <div class="featured-area" id="featured">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                        <div class="featured-mobile">
                            <img src="{{URL::asset('la-assets/web/images/featured-mobile.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8 offset-lg-1 col-md-12 wow fadeInRight margin-left-30" style="visibility: visible; animation-name: fadeInRight;">
                        <div class="featured-right-item">
                            <div class="featured-title">
                                <h2>Features</h2>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="featured-single-items">
                                        <div class="featured-single">
                                            <img src="{{URL::asset('la-assets/web/images/featured-icon1.png')}}" alt="">
                                            <div class="featured-single-text">
                                                <h4>Document and Form Management</h4>
                                                <p><i class="fa fa-circle"></i>Document Archiving and Indexing</p>
                                                <p><i class="fa fa-circle"></i>Indexing of all document</p>
                                                <p><i class="fa fa-circle"></i>Custom Automatic Document</p>
                                            </div>
                                        </div>
                                        <div class="featured-single">
                                            <img src="{{URL::asset('la-assets/web/images/featured-icon2.png')}}" alt="">
                                            <div class="featured-single-text">
                                                <h4>Numbering</h4>
                                                <p><i class="fa fa-circle"></i>Content recognition and indexing</p>
                                            </div>
                                        </div>
                                        <div class="featured-single">
                                            <img src="{{URL::asset('la-assets/web/images/featured-icon3.png')}}" alt="">
                                            <div class="featured-single-text">
                                                <h4>Categorical Search and Text Search</h4>
                                                <p><i class="fa fa-circle"></i>Safe and Powerful Search</p>
                                                <p><i class="fa fa-circle"></i>Advanced search on all document attribute.</p>
                                            </div>
                                        </div>
                                        <div class="featured-single">
                                            <img src="{{URL::asset('la-assets/web/images/featured-icon4.png')}}" alt="">
                                            <div class="featured-single-text">
                                                <h4>Document Security</h4>
                                                <p><i class="fa fa-circle"></i>Audit Trial</p>
                                                <p><i class="fa fa-circle"></i>User and Roles</p>
                                                <p><i class="fa fa-circle"></i>Advanced Access rights attributes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="featured-single-items">
                                        <div class="featured-single">
                                            <img src="{{URL::asset('la-assets/web/images/featured-icon5.png')}}" alt="">
                                            <div class="featured-single-text">
                                                <h4>Customizable Software</h4>
                                                <p><i class="fa fa-circle"></i>Generate Custom Fields and Reports</p>
                                                <p><i class="fa fa-circle"></i>Add custom Document Attributes</p>
                                            </div>
                                        </div>
                                        <div class="featured-single">
                                            <img src="{{URL::asset('la-assets/web/images/featured-icon6.png')}}" alt="">
                                            <div class="featured-single-text">
                                                <h4>Role Based Access Control</h4>
                                                <p><i class="fa fa-circle"></i>Role Based Access Control</p>
                                            </div>
                                        </div>
                                        <div class="featured-single">
                                            <img src="{{URL::asset('la-assets/web/images/featured-icon7.png')}}" alt="">
                                            <div class="featured-single-text">
                                                <h4>Benifits</h4>
                                                <p><i class="fa fa-circle"></i>Electronic Archive of Documents with facility to search and retrieve</p>
                                                <p><i class="fa fa-circle"></i>Share and Collaborate Documents</p>
                                                <p><i class="fa fa-circle"></i>On the go document review</p>
                                            </div>
                                        </div>
<!--
                                        <div class="featured-single">
                                            <img src="images/featured-icon8.png" alt="">
                                            <div class="featured-single-text">
                                                <h4>Extra Booster</h4>
                                                <p><i class="fa fa-circle"></i>Role Based Access Control</p>
                                            </div>
                                        </div>
-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <section class="product-area section-padding" style="border-top:1px solid #f1f1f1;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2><a href="/blog/index.php/2018/03/14/people-ranked-in-top-3-hr-software-of-2018-2/">Other Softwares</a></h2>
                            <p>We have NEW functionable softwares</p>
                        </div>

                        <div class="product-images">
                            <div class="single-product-img">
                                <img src="{{URL::asset('la-assets/web/images/mikrof_logo.png')}}" class="awrda" />
                            </div>
                            <div class="single-product-img">
                                <img src="{{URL::asset('la-assets/web/images/imikrof.png')}}" class="awrda" />
                            </div>
                            <div class="single-product-img">
                                <img src="{{URL::asset('la-assets/web/images/CA.png')}}" class="awrd" />
                            </div>
                            <div class="single-product-img">
                                <img src="{{URL::asset('la-assets/web/images/Education.png')}}" class="awrda" />
                            </div>
                            <div class="single-product-img">
                                <img src="{{URL::asset('la-assets/web/images/erp.png')}}" class="awrd" />
                            </div>
                            <div class="single-product-img">
                                <img src="{{URL::asset('la-assets/web/images/coop-desk.png')}}" class="awrdb" />
                            </div>
                            <div class="single-product-img">
                                <img src="{{URL::asset('la-assets/web/images/doc-vue.png')}}" class="awrdb" />
                            </div>
                            <div class="single-product-img">
                                <img src="{{URL::asset('la-assets/web/images/land.png')}}" class="awrdc" />
                            </div>
                            <div class="single-product-img">
                                <img src="{{URL::asset('la-assets/web/images/mart-rise-logo.png')}}" class="awrdd" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      

            
            <section class="bgwhite secguide what-area" style="border-top:1px solid #f1f1f1;">
            <div class="buyCall">
                <div class="container">
                    <div class="what-area">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title section-title2">
                                    <h2>What is Document Management (DMS)?</h2>
                                </div>
                            </div>
                        </div>
<p>Document management, often referred to as Document Management Systems (DMS), is the use of a computer system and software to store, manage and track electronic documents and electronic images of paper based information captured through the use of a document scanner.
                        </p>
                        <p>Document management is how your organization stores, manages and tracks its electronic documents.</p>
                        <p>According to ISO 12651-2, a document is "recorded information or object which can be treated as a unit". While this sounds a little complicated, it is quite simply what you have been using to create, distribute and use for years.</p>
                        
                        <p>Now, we can define document management as the software that controls and organizes documents throughout an organization. It incorporates document and content capture, workflow, document repositories, COLD/ERM, and output systems, and information retrieval systems. Also, the processes used to track, store and control documents.</p>
                                                </p>
                    </div>
                </div>
            </div>
            <!-- guide Start-->
            <!-- guide End-->
        </section>
            <!-- guide End-->
        </section>
        <!--What area End-->


   
@endsection
