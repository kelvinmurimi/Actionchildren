   <div class="row justify-content-md-center">

                  <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
          
                    <p class="text-center" style="color:#5b5d5f;">
                     <h3 class="blue">Meet The Team Behide Our Mission</h3>
                     
                      <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
                    </p>
                   
                  </div>
          
               </div>
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
         

        </div>
       
        </div>
      </div>
