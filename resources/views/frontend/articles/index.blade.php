@extends('frontend.base')

@section('content')
@include('frontend.includes.banner')

  @php
     // dd($resourcePageTitle)
    // dd($articles)
  @endphp

                <!-- Blog Start -->
                <div class="blog">
                    <div class="container">
                        <div class="section-header text-center">
                            <p>{{$resourcePageTitle->name}}</p>
                            <h2>Latest <b class="orange">{{$resourcePageTitle->name}}</b>  directly from our Resources</h2>
                        </div>
                        <div class="row">

                            @foreach ($articles as $article)
                                  <div class="col-lg-4">
                                <div class="blog-item">
                                    <div class="blog-img">
                                        <img src="{{asset($article->image)}}" alt="Image">
                                    </div>
                                    <div class="blog-text">
                                        <h3 class="blue"><a   class="blue" href="{{ route('blog.show',$article->id) }}">{{ $article->title }}</a></h3>
                                        <p>
                                            {{ Str::limit($article->excerpt,100) }}
                                        </p>
                                    </div>
                                    <div class="blog-meta">
                                        <p><i class="fa fa-arrow-rightr"></i><a class="btn btn-primary" style="color:#ffff;"    href="{{ route('blog.show',$article->id) }}" >More Details</a></p>
                                       
                                    </div>
                                </div>
                            </div>
                            @endforeach

                          
                        </div>
                        {{ $articles->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                <!-- Blog End -->
                @include('frontend.includes.BecomeVolunteer')
@endsection
