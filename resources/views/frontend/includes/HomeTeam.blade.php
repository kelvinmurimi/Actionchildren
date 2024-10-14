 <!-- Team Start -->
 <div class="team">
    <div class="container">
        <div class="section-header text-center">
            <p>Meet Our Team</p>
            <h2>AMeet the Passionate People Behind Our Mission
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
                        <strong class="text-warning">{{ $team->department }}</strong><br>
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
