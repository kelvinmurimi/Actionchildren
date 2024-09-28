@extends('frontend.base')

@section('content')
    @include('frontend.includes.banner')
    <!-- Single Post Start-->
    <div class="single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-content">
                        <img src="{{ asset('media/trc.jpg') }}" />
                        <h4 class="text-info">Temporary Rescue Center (TRC)
                        </h4>
                        <P style="font-weight:900; color:orange;">
                            The rehabilitation center which is located at Karibaribi, Ngoigwa, Thika in Kiambu County,
                            serves as a safe haven where street children rescued from Streets. In the center they are provided with food,
                            shelter, clothing and a formal and non-informal education in a protective and nurturing
                            environment.
                        </P>
                        <div>
                            <img src="{{ asset('media/trcobj.jpg') }}" />
                        </div>
                        <p>
                            <strong class="text-warning">Progam Activities</strong> <br>

                            <strong>
                                <li> a) Provide accommodation for the children.</li>
                                <li> b) To educate and equip the children with life skills.</li>
                                <li> c) To equip the children with self-expression skills which in turn improves their
                                    self-esteem.</li>
                                <li> d) To detoxify the children and mitigate the impact of long-term use of alcoholic and
                                    drugs substance.</li>
                                <li> e) Education which for instance basic numeracy and literacy skills, fashion and art,
                                    photography, videography.</li>
                                <li> f) Sports, education, educational entertainment for example dance, theater and music.
                                </li>
                                <li> g) Provide counselling and cater for spiritual, and psychological needs for the
                                    children and families</li>
                                <li> h) Reintergration and home visits</li>

                     `       </strong>
                        </p>
                        <p>
                           <h1 class="text-info">Main Objectives</h1>
                           <img src="{{ asset('media/trcobj1.jpg') }}" />
                           <ul class="list-unstyled">
                            <b>
                                <li> 1. Rescue,rehabilitate,resocialize street and vulnerable children</li>
                                <li>2. Re-integrate the children with their families and back in school</li>
                                <li> 3. Provide a homely environment for the children</li>
                                <li> 4. Equip boys with basic life and literacy skills</li>
                                <li> 5. Prepare boys for school life</li>
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
