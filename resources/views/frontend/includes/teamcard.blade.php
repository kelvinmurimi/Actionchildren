


<style type="text/css">

    .main1{
       display: flex;
       justify-content: center;
       align-items: center;
       min-height: 100vh;
       width: 100%;
       background: #f2f3f7;
    }
    .containerp
    {
       display: flex;
       justify-content: center;
       align-items: center;
       flex-wrap: wrap;
    }
    .containerp .card
    {
       width: 370px;
       height: 480px;
       padding: 60px 30px;
       margin: 20px;
       background: #f2f3f7;
       box-shadow: 0.6em 0.6em 1.2em #d2dce9,
                   -0.5em -0.5em 1em #ffffff;
       border-radius: 20px;
    }
    .containerp .card .content
    {
       display: flex;
       justify-content: center;
       align-items: center;
       flex-direction: column;
    }
    .containerp .card .content .imgBx
    {
       width: 192px;
       height: 200px;
       border-radius: 50%;
       position: relative;
       margin-bottom: 20px;
       overflow: hidden;
    }
    .containerp .card .content .imgBx img
    {
       position: absolute;
       top: 0;
       left: 0;
       width: 100%;
       height: 100%;
       object-fit: cover;
    }
    .containerp .card .content .contentBx h4
    {
       color: #36187d;
       font-size: 1.7rem;
       font-weight: bold;
       text-align: center;
       letter-spacing: 1px;
    }
    .containerp .card .content .contentBx h5
    {
       color: #6c758f;
       font-size: 1.6rem;
       font-weight: bold;
       text-align: center;
    }
    .containerp .card .content .sci
    {
       margin-top: 20px;
    }
    .containerp .card .content .sci a
    {
       text-decoration: none;
       color: #6c758f;
       font-size: 30px;
       margin: 10px;
       transition: color 0.4s;
    }
    .containerp .card .content .sci a:hover
    {
       color: #0196e3;
    }




    /*   colors
             #f2f3f7
            #d2dce9
            #36187d
            #6c758f
            #0196e3
     */
    </style>

    <div class="main1">
     <div class="containerp">
        @foreach ($staff as $team)
            <div class="card">
                <div class="content">
                    <div class="imgBx">
                        <img src="{{ asset($team->image)}}" alt="">
                    </div>
                    <div class="contentBx">
                       <h5>{{$team->name}}</h5>
                       <strong>{{ $team->department }}</strong>
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
