@extends('frontend.base')

@section('content')
    @include('frontend.includes.banner')
    <!-- Single Post Start-->
    <div class="single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-content">
                      
                        <h4 class="text-info">School Dropout Prevention Programme
                        </h4>
                        <P style="font-weight:900; color:orange;">
                            Action for Children in Conflict’s Education Empowerment Programme seeks to prevent children from dropping out of school, improve education levels in public primary schools, and reduce the number of street children.
                        </P>
                        <img src="{{ asset('media/sfp1.jpg') }}" />
                        
                        <p>
                            <strong class="text-warning">Progam Activities</strong> <br>

                            <strong>
                                      <li> a. Providing meals at St. Patrick’s with the help of the local women who have been employed to do so.</li>
                                    <li>b. Monitoring with the school management in collaboration with the board of management at the organisation.</li>
                                    <li>c. Holding debates annually with the participation of other schools. This increases their confidence, get a chance to interact with other children, develop and nurture debate skills, encourages sharing. This also creates a child friendly environment for the school going children.</li>
                                    <li>
                                        d. Child rights training where they are taught,sensitized and fully become aware of their right</li>
                             
                           </strong>
                        </p>
                        <div>
                            <img src="{{ asset('frontend/homeimg/fourth.jpg') }}" />
                        </div>
                        <p>
                           <h1 class="text-info">Main Objectives</h1>
                           <img src="{{ asset('frontend/homeimg/six.jpg') }}" />
                           <ul class="list-unstyled">
                            <b>
                                <li> 1. Keeping children away from the streets</li>
                                <li>2. Improving the nutritional status of the children attending school at St.Patricks</li>
                                <li>
                                    3. Monitoring with the school management in collaboration with the board of management at the organisation</li>
                                <li>4. Improving access,enrollment,retention,progression and successful completion of the children attending school thereby improving their grades</li>
                            </b>
                            </p>


                           </ul>
                        </p>

                       


                    </div>


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
                            <h2 class="widget-title">Young Friends </h2>
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
