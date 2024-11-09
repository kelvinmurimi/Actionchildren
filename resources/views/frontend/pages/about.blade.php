@extends('frontend.base')

@section('content')
    @include('frontend.includes.banner')
       <!-- About Start -->
       <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img" data-parallax="scroll" data-image-src="{{ asset('frontend/homeimg/six.jpg') }}"></div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header">
                        <p>Learn About Us</p>
                        <h2>Continue Touching Child's Life</h2>
                    </div>
                    <div class="about-tab">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#tab-content-1">Our Mission</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#tab-content-2">Our Goals</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#tab-content-3">Make A Difference</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="tab-content-1" class="container tab-pane active">
                                Enhance and support the growth and development of children, young people and their families by facilitating access to justice, education, health, and their psychosocial and economic support. Putting communities at the center and fostering their growth through fair and sustainable opportunities.
                            </div>
                            <div id="tab-content-2" class="container tab-pane fade">
                               - Develop and support community development projects.

                               - Consolidate all forms of reconciliation and peace-building activities in order to promote constructive opportunities for Thika and more generally for Kenya.

                                -Strengthen the capacities of local communities so that, despite the social context being vulnerable and fragile, they are able to carry out projects aimed at improving environmental degradation.

                                -Support political advocacy actions to develop changes in established practices and mentalities.
                            </div>
                            <div id="tab-content-3" class="container tab-pane fade">
                                Action for Children in Conflict is dedicated to the improvement of the lives of vulnerable children, women and communities by promoting their access to quality education, health, food, safe and clean environment, economic empowerment and the protection of their rights and fundamental freedoms.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

       <!-- About Start -->
       <div class="about">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="section-header">
                        <p>More About Us</p>
                        <h2>Our Story</h2>
                    </div>
                    <div class="about-tab">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#tab-content-1">Action For Children In Conflict</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#tab-content-2">Our Vision</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="tab-content-1" class="container tab-pane active">
                                Action for Children in Conflict (AfCiC) is a Kenyan non-governmental organization (NGO) that has been operating since 2004 in Thika (45 km north-east of Nairobi), in the Kiambu, Muranga and other nearby counties, supporting projects aimed at preventing, supporting and rehabilitating children and street children who live situations of high social marginality every day.

                                Thika has a population of approximately over 645,000 people. It is an industrial town with extensive coffee and pineapple plantations dominating the geographical landscape. However, with the collapse of the Kenyan coffee market in the 1990’s continued economic decline caused unemployment rates to increase and a rapid growth in neighbouring slums such as Kiandutu (the largest slum in Thika), Kiang’ombe, Gacagi, and Madharau.

                                Impoverished conditions resulted in an increase in the number of children living and working on the streets where they face numerous challenges as their rights are constantly violated.

                                The children have difficulties accessing basic services such as food and healthcare and only a few of them benefit from any formal education.

                                In this situation, they also become socially excluded becoming trapped in a cycle of poverty, violence, and abuse. This in turn leads to a community in which a high number of youth are unemployed and with a high illiteracy level.

                                As a result Action for Children in Conflict was established in order to improve the livelihood of children, vulnerable families and marginalized communities through promotion of accessibility to quality education, better healthcare, economic empowerment and advocacy of human rights and fundamental freedom as well as policy change. In the last ten years AfCiC has grown a lot by developing projects of legal support, prevention and treatment of HIV / AIDS, implementing adoptions, food aid and promoting the capacity for growth and economic development of the communities.
                            </div>

                            <div id="tab-content-2" class="container tab-pane fade">
                                A world of opportunities, equal and sustainable for every child.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-img" data-parallax="scroll" data-image-src="{{ asset('frontend/homeimg/second.jpg') }}"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    @include('frontend.includes.teamcard')
    @include('frontend.includes.BecomeVolunteer')
@endsection
