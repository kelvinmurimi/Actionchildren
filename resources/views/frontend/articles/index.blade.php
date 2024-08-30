@extends('frontend.base')

@section('content')
   @include('inc.banner')

        <!-- Blog Start -->
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <p class="text-uppercase text-secondary fs-5 mb-0">News & Blog</p>
                    <h2 class="display-4 text-capitalize mb-3">Our latest news post and articles?</h2>
                </div>
                <div class="row g-4">
                    @if ($articles->count() > 0)
                        @foreach ($articles as $article)
                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="blog-item h-100">
                                <div class="blog-img">
                                    <img src="{{asset($article->image)}}" class="img-fluid w-100" alt="">
                                </div>
                                <div class="blog-content p-4">
                                    <div class="d-flex justify-content-between mb-3">
                                        <p class="mb-0"><i class="fa fa-calendar-check text-secondary me-1"></i> {{$article->updated_at}}</p>
                                        <p class="mb-0"><i class="fa fa-user text-secondary me-1"></i> Admin</p>
                                    </div>
                                    <a href="#" class="h4 d-block mb-4">{{ $article->title }}</a>
                                    <p>
                                        {{ Str::limit($article->excerpt,100) }}
                                    </p>
                                    <a class="btn btn-secondary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif


                </div>
            </div>
        </div>
        <!-- Blog End -->
@endsection
