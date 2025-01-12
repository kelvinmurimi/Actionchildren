@extends('frontend.base')

@section('content')
@include('frontend.includes.banner')

<!--Alternating cards -->
<div class="altcards">
    <div class="container">
      <div class="card-group vgr-cards">
        @foreach ($projects as $project)
        <div class="card">
            <div class="card-img-body">
            <img class="card-img" src="{{ asset($project->image) }}" alt="Card image cap">
            </div>
            <div class="card-body">
              <h4 class="card-title">{{ $project->title }}</h4>
              <p class="card-text">{{Str::limit($project->description , 100, '....') }}</p>
              <a href="{{ route('projects.show',$project->slug) }}" class="btn btn-outline-primary">View Details</a>
            </div>
          </div>
        @endforeach
        
       <!-- <div class="card">
          <div class="card-img-body">
            <img class="card-img" src="https://picsum.photos/400/200" alt="Card image cap"></div>
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This card has supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-outline-primary">Primary</a>
          </div>
        </div>-->
        <!--<div class="card">
          <div class="card-img-body">
            <img class="card-img" src="https://picsum.photos/450/250" alt="Card image cap"></div>
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action. This is a wider card with supporting text below as a natural lead-in
              to additional content. This content is a little bit longer.</p>
            <a href="#" class="btn btn-outline-primary">Primary</a>
          </div>
        </div>-->
      </div>
    </div>
    
    
    
    </div>
    
    <!-- end alternating cards -->
@endsection
