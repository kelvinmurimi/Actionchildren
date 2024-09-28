@extends('frontend.base')

@section('content')
    @include('frontend.includes.banner')
    <!-- Single Post Start-->
    <div class="single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-content">
                       
                        <h4 class="text-info">WORKING CHILDREN CENTER (OPVC)-OUTREACH PROGRAMME FOR
                            VULNERABLE CHILDREN)
                        </h4>
                            <P style="font-weight:900; color:orange;">
                                The program has been encouraging street children to attend our
                                Outreach Programme for Vulnerable Children centre (OPVC) daily from morning untill late afternoon, to keep
                                them away from the streets whilst involving them in activities like life skills, art and sports.
                            </P>
                            <img src="{{ asset('media/wcc1.jpg') }}" />
                        <p>
                          <strong class="text-warning">Progam Activities</strong>  <br>

                         <strong>

                            <li>
                                1.Conducting street walk. This in a bid to identify children   to be placed or referred to the temporary
                                rescue center.
                            </li>
                            <li>
                              2.Street work which involves identification of cases of child abuse, taking older street children to
                              technical and vocational training.
                            </li>
                            <li>
                              3 .Identifying new young street children.</li>
                            <li>4. Cleaning up activities at the center and surrounding community</li>
                            <li>5. Identifying and helping street children in need of medical care.</li>
                            <img src="{{ asset('media/wcc2.jpg') }}" />
                            <li>6. Feeding program which entails provision of food ie; porridge in the morning, food during lunch time.
                            </li>
                            <li>7. Women mobilization and empowerment through table banking.</li>
                            <li>8. Provision of sanitary towels and diapers to girls and mothers in the streets.</li>
                            <li>9. Teen mother programs where they are educated on different family planning methods.</li>
                            <li>10. Following up on older ,re-integrated children (beneficiaries of AfCiC).</li>
                            <li>11. Providing important services to the community by working together with various service providers
                            </li>
                        </strong>
                        </p>
                        <p> 
                            <h1 class="text-info">Main Objectives</h1> 
                            <img src="{{ asset('media/feeding.jpg') }}" />
                       
                        <ul class="list-unstyled">
<b>
                            <li>1. Improve the children’s hygiene and sanitation</li>
                            <li>2. Improve nutrition where there is a feeding programme</li>
                            <li>3. Improve literacy and numeracy levels</li>
                            <li>4. Improve access, retention and progress of children academically</li>
                            <li>5. Provide a safe environment for innovations of escaping and eradicating poverty and basic skills</li></b>
                            
                
                
                          </ul>
                        </p>

                        <p>

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
