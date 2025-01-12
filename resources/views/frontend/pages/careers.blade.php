@extends('frontend.base')
@section('content')
@include('frontend.includes.banner')
    <!-- Blog Start -->
    <div class="blog">
        <div class="container">
            <div class="section-header text-center">
                <p>Available Jobs And Tenders</p>

            </div>
            <div class="row">
                @foreach ($careers as $job)
                    <div class="col-lg-4">
                    <div class="blog-item">

                        <div class="blog-text">
                            <h3><a href="{{ route('careers.show',$job->id) }}">{{ $job->title }}</a></h3>
                            <p>
                               {{ Str::limit($job->description, 100, '...') }}
                            </p>
                        </div>
                        <div class="blog-meta">
                            <p><a href="{{ route('careers.show',$job->id) }}" class="btn btn-primary"><i class="fa fa-arrow-right"></i>Details</a></p>

                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>
    <!-- Blog End -->

@endsection

