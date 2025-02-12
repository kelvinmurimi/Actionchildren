@extends('frontend.base')

@section('content')
@include('frontend.includes.banner')

  <!-- Sort  Start -->
  <div class="about">
    <div class="container">
        <div class="row align-items-center">
           
            <div class="col-lg-6">
                <div class="section-header">
                   
                    <p>Awesome guys behind our charity activities</p>
                </div>
                <div class="about-tab">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#tab-content-1">Sort</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  active" data-toggle="pill" href="#tab-content-2">All Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#tab-content-3">Partners</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="tab-content-1" class="container tab-pane ">
                           @foreach ($departments as $department)
                               <a class="btn btn-primary" href="{{route('frontend.departments.index',$department->id)}}">{{$department->department_name}}</a>,,<hr>
                           @endforeach
                        </div>
                        <div id="tab-content-2" class="container tab-pane fade">
                            <p class="blue">We believe that we can save more lifes with you</p>
                        </div>
                        <div id="tab-content-3" class="container tab-pane fade active">
                            <a class="btn btn-custom" href="{{route('partners')}}">Our Partners</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sort  End -->

<div class="main1">
    <div class="containerp">
        @foreach ($staff as $team)
        <div class="card">
            <div class="content">
                <div class="imgBx">
                    <img src="{{ asset($team->image)}}" alt="">
                </div>
                <div class="contentBx">
                    <div class="text-staff">
                        <strong><span style="color:#ff914D !important;">{{$team->name}}</span></strong>
                        <span style="color:#3871c1 !important;">{{$team->position}}</span>
                    </div>
                    {{ Str::limit($team->bio,100) }}
                    <a class="btn btn-primary" href="{{ route('team.show',$team->id) }}">About Me<i class="fa fa-arrow-right"></i></a>
                </div>
                <div class="sci">
                </div>
            </div>
        </div>

        @endforeach

        {{--}} 0745954947 --}}
    </div>
</div>

@include('frontend.includes.BecomeVolunteer')
@endsection
