@extends('frontend.base')

@section('content')
@include('frontend.includes.banner')



                <!-- Blog Start -->
                <div class="blog">
                    <div class="container">
                        <div class="section-header text-center">
                            <p>Our Partners</p>
                            <h2>........</h2>
                        </div>
                        <div class="row">

                            @foreach ($partners as $partner)
                                  <div class="col-lg-4">
                                <div class="blog-item">
                                    <div class="blog-img">
                                        <img src="{{asset($partner->image)}}" alt="Image">
                                    </div>
                                    <div class="blog-text">
                                        <h3><a href="{{ route('partners') }}">{{ $partner->name }}</a></h3>
                                        <p>
                                            {{ Str::limit($partner->description,100) }}
                                        </p>
                                    </div>
                                    <div class="blog-meta">
                                        <p><a class="btn btn-primary" href="{{ $partner->linkurl }}">visit Website<i class="fa fa-arrow-right"></i></a></p>
                                        <p><i class="fa fa-comments"></i><a href="">{{$partner->updated_at}}</a></p>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>

                    </div>
                </div>
                <!-- Blog End -->
                @include('frontend.includes.BecomeVolunteer')
@endsection
