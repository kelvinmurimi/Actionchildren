@extends('frontend.base')

@section('content')
    @include('frontend.includes.banner')
    <!-- Single Post Start-->
    <div class="single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- start single content -->
                    <div class="single-content">
                        <img src="{{ asset('media/trcobj.jpg') }}" />
                       
                       <p>
                        <h3 class="blue">RESCUE AND REHABILITATION</h3>
                        Our Temporary Rescue and Rehabilitation Center is a safe space for street-connected children and youth, offering immediate shelter, care, and a nurturing environment that fosters hope, growth, and transformation. Guided by our core values of compassion, dignity, and resilience, we empower children to reclaim their lives and reach their full potential.
                        Our dedicated team of social workers, educators, and volunteers works tirelessly to create a supportive environment where every child feels safe and loved. With diverse expertise and a shared vision, we aim to make a lasting impact on the lives of these vulnerable children.
                       <p class="orange">At the center, we provide comprehensive services tailored to each child's unique needs, including:</p> 
                        
                        <ul>
                            <li>Emergency rescue and shelter </li>
                            <li>Counseling and psychological support</li>
                            <li>Education and skills development</li>
                            <li>Health and wellness programs</li>
                            <li>Family reunification and reintegration</li>
                            <li>Recreational and creative arts activities</li>
                        </ul>
                       </p>
                     

                        <div>
                            <h5 class="text-info">Children At TRC.</h5>
                            <img src="{{ asset('media/trcobj1.jpg') }}" />
                    
                        </div>




                    </div><!-- end single content -->


                    <div class="single-related">
                        <h2>Recent Posts</h2>
                        <div class="owl-carousel related-slider">
                            @foreach ($articles as $article)
                                <div class="post-item">
                                    <div class="post-img">
                                        <img src="{{ asset($article->image) }}" />
                                    </div>
                                    <div class="post-text">
                                        <a href="">{{ $article->title }}</a>
                                        <!-- <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Web Design</a></p>
                                                </div>-->
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>


                </div>

                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <div class="search-widget">
                                <form>
                                    <input class="form-control" type="text" placeholder="Search Keyword">
                                    <button class="btn"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <h2 class="widget-title">Our Team </h2>
                            <div class="recent-post">
                                @foreach ($youngfriends as $friend)
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="{{ asset($friend->image) }}" />
                                        </div>
                                        <div class="post-text">
                                            <a href="">{{ $friend->name }}</a>
                                            <!-- <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Web Design</a></p>
                                                </div>-->
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                        @include('frontend.includes.imagewidget')

                        <!-- <div class="sidebar-widget">
                                    <div class="tab-post">
                                        <ul class="nav nav-pills nav-justified">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="pill" href="#featured">Featured</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="pill" href="#popular">Popular</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="pill" href="#latest">Latest</a>
                                            </li>
                                        </ul>

                                        <div class="tab-content">
                                            <div id="featured" class="container tab-pane active">
                                                <div class="post-item">
                                                    <div class="post-img">
                                                        <img src="img/post-1.jpg" />
                                                    </div>
                                                    <div class="post-text">
                                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                        <div class="post-meta">
                                                            <p>By<a href="">Admin</a></p>
                                                            <p>In<a href="">Web Design</a></p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div id="popular" class="container tab-pane fade">

                                            </div>
                                            <div id="latest" class="container tab-pane fade">

                                            </div>
                                        </div>
                                    </div>
                                </div>-->

                        @include('frontend.includes.imagewidget')

                        <div class="sidebar-widget">
                            <h2 class="widget-title">Our Partners</h2>
                            <div class="category-widget">
                                @foreach ($partners as $partner)
                                    <ul>
                                        <li><a href="">{{ $partner->name }}</a></li>

                                    </ul>
                                @endforeach

                            </div>
                        </div>

                        @include('frontend.includes.imagewidget')

                        <!--<div class="sidebar-widget">
                                    <h2 class="widget-title">Quick Links</h2>
                                    <div class="tag-widget">
                                        <a href="">National</a>
                                        <a href="">International</a>
                                        <a href="">Economics</a>
                                        <a href="">Politics</a>
                                        <a href="">Lifestyle</a>
                                        <a href="">Technology</a>
                                        <a href="">Trades</a>
                                    </div>
                                </div>-->

                        @include('frontend.includes.QuoteDay')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Post End-->
    @include('frontend.includes.BecomeVolunteer')
@endsection
