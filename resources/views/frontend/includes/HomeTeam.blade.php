 <!-- Team Start -->
 <div class="team">
    <div class="container">
        <div class="section-header text-center">
            <p>Meet Our Team</p>
            <h2>Meet the Passionate People Behind Our Mission
            </h2>
        </div>
        <div class="row">
            @foreach ($staff as $team)
                 <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{ asset($team->image)}}" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <strong class="text-primary" style="color: #3871c1 !important;">{{ $team->department }}</strong><br>
                        <strong class="text-primary">{{ $team->position }}</strong><br>ccc
                       <a href="{{ route('team.show',$team->id) }}" class="btn btn-primary">
                        About Me
                       </a>
                   </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>
<!-- Team End -->
