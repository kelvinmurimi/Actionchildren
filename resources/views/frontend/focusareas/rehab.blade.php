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
                        <h4 class="text-info">Access to Justice Legal Aid Programme (AJLAP)
                        </h4>
                        <P style="font-weight:900; color:orange;">
                            Access to Justice Legal Aid Programme (AJLAP) is a specific program by Action for Children in
                            Conflict
                            that seeks to promote access to justice, strengthen the rule of law, promote human rights and
                            significantly reduce all forms of violence in the society.
                        </P>
                        <div>
                            <img src="{{ asset('media/trcobj.jpg') }}" />
                        </div>

                        <strong class="text-warning">MAIN OBJECTIVES</strong> <br>

                        <strong>
                            <p>To prevent children from dropping out of school to the streets because of lack of basic
                                provision
                                through economically empowering their guardian.
                            </p>
                            <p>To help parents regain the self-esteem they have lost through poverty and their inability to
                                meet
                                their children’s basic needs, giving them a legitimate income to support themselves and
                                their
                                dependants.</p>

                            <p>To offer legal aid services in children matters ranging from custody and maintenance to land
                                and
                                succession issues.</p>

                            <p>To be a major policy and legislation influencer on children rights issues both at national
                                and
                                county levels of government.</p>
                            <p>To inform and create awareness on issues of child rights

                                <strong>>(.)</strong>To promote access to justice for and by children victims and/or
                                offenders.
                            </p>

                        </strong>

                        <div>
                            <h1 class="text-info">How We Do It</h1>
                            <img src="{{ asset('media/trcobj1.jpg') }}" />
                            <strong class="text-orange">

                                Awareness Campaigns & Outreach Programmes, Training and Capacity Building

                            </strong>


                            <p> The program conducts clinics and for a in the community aimed at sensitizing the

                                community on child rights, gender based violence and access to justice.

                                In addition, we hold training with various players in the justice system including the

                                judiciary, the police and other court users with a view to informing court users of court
                                processes and
                                reducing corruption and bribery in the justice system. In addition, it promotes the
                                development of
                                effective, accountable and transparent institutions Moreover, the program is engaged with
                                establishment of
                                child rights clubs in local primary schools with the view entrenching human rights issues
                                and rule of law
                                in the children to make them human rights champions of today and the future.

                            </p>


                            <p>

                                <strong class="orange">

                                  Legal Aid Services

                                </strong>



                                Legal aid services are offered to clients through public interest litigation, institution of court
                                proceedings, training on court procedures & the art of self-representation and offering of free legal
                                advice to clients. Further, we watch brief for children and women victims of crimes such as defilement,
                                rape, domestic violence and cases involving child offenders, to ensure that the criminal

                                process is conducted well to bring about just outcomes and protect against shoddy and haphazard
                                prosecutions, also deterring corrupt prosecutors or judicial officers.

                              </p>

                              <p>

                                <strong class="orange">

                                  Alternative Dispute Resolution Mechanisms

                                </strong>



                                Alternative Dispute Resolution is encouraged to enhance access to justice. This is more so in matters of
                                child support and maintenance to reduce instances of child neglect, abuse, exploitation and/or torture.





                                <strong class="orange">

                                  Advocacy and Policy Formulation

                                </strong>

                                AJLAP is involved and participates in stakeholder meetings touching on legislation and

                                policies at both national and county levels of government. This promotes responsive,

                                inclusive, participatory representative decision-making as well as promotion and

                                enforcement of non-discriminatory laws and policies, bringing about sustainable

                                development..



                              </p>



                        </div>




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
