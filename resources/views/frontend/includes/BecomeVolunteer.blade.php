 <!-- Volunteer Start -->
 <div class="volunteer" data-parallax="scroll" data-image-src="{{ asset('frontend/slider/up.jpg') }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="volunteer-form">
                    <form  action="{{route('volunteer.details')}}" method="POST">
                        @csrf
                        <div class="control-group">
                            <input type="text" class="form-control" name="name" placeholder="Name"  />
                            @error('name')
                            <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" name="email" placeholder="Email"  />
                            @error('email')
                            <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" name="phone" placeholder="phone number +...."  />
                            @error('phone')
                            <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" name="content" placeholder="Why you want to become a volunteer?" ></textarea>
                            @error('content')
                            <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                        <div>
                            <button class="btn btn-custom btn-primary" type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="volunteer-content">
                    <div class="section-header">
                        <p>Become A Volunteer| Partner With Us</p>
                        <h2> Let’s make a difference in the lives of Children</h2>
                    </div>
                    <div class="volunteer-text">
                        <p>
                            Whether you have skills to share, resources to offer, or simply a passion for helping others, your involvement is priceless. Together, we can amplify our impact, Your donation will enable us rescue more children from the streets, rehabilitate them at our Temporary Rescue Centre where they are provided basic needs and are finally reintegrated into the society. .

                            Take the first step—fill out our partnership/volunteer form today! Let’s work together to create lasting change in our communities.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Volunteer End -->
