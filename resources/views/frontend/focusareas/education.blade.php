
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
                        <img src="{{ asset('frontend/education/1.jpg') }}" />
                       
                       <p>
                        <h3 class="blue">1.	EDUCATION EMPOWERMENT </h3>
                        <p>
                            Education empowerment is a narrative that champions the transformative power of education in individuals and societies. It revolves around the idea to give the child access to quality education. AfCiC is able to contribute to this Global motive by sponsoring children from vulnerable backgrounds. In synchronicity with our vision, our Education Empowerment narrative emphasizes on the following;
                        </p>
                       <p class="orange">At the center, we provide comprehensive services tailored to each child's unique needs, including:</p> 
                        
                        <ul>
                            <li> Equal Opportunity: Every child deserves equal access to education, regardless of their background or circumstances. </li>
                            <li>Liberation from Ignorance: Education equips children with critical thinking, knowledge, and decision-making skills to challenge oppressive systems and advocate for change. Personal Growth: Education helps children discover their passions, unlock their potential, and develop essential life skills like communication, self-confidence, problem-solving, and resilience. </li>
                            <li>Economic Empowerment: It fosters entrepreneurship, innovation, and economic mobility, reducing poverty and promoting sustainable development. </li>
                            <li> Social Cohesion: Education promotes dialogue, collaboration, and mutual respect, paving the way for peaceful coexistence and community harmony.</li>
                           
                        </ul>


                       </p>
                     

                        <div>
                            <h5 class="text-info">..</h5>
                            <img src="{{ asset('frontend/education/3.jpg') }}" />
                    
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


