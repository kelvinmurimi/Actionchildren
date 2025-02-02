 <!-- Partner Start -->
 <div class="volunteer" data-parallax="scroll" data-image-src="{{ asset('frontend/slider/up.jpg') }}">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-lg-7">
                 <div class="volunteer-content">
                     <div class="section-header">
                         <p>Partner With Us</p>
                         <h2 class="blue"> Let’s make a difference in the lives of Vulnerable Children.</h2>
                     </div>
                     <div class="volunteer-text">
                         <p>
                             Whether you have skills to share, resources to offer, or simply a passion for helping others, your involvement is priceless. Together, we can amplify our impact, Your donation will enable us rescue more children from the streets, rehabilitate them at our Temporary Rescue Centre where they are provided basic needs and are finally reintegrated into the society. .

                             Take the first step—fill out our volunteer form today! Let’s work together to create lasting change in our communities.
                         </p>
                     </div>
                 </div>
             </div>
             <div class="col-lg-5">
                 <div class="volunteer-form">
                     <form action="{{route('partner.data')}}" method="POST">
                         @csrf
                         <div class="control-group">
                             <input type="text" class="form-control" name="name" placeholder="Name" />
                             @error('name')
                             <p class="help-block text-danger">{{ $message }}</p>
                             @enderror
                         </div>
                         <div class="control-group">
                             <input type="email" class="form-control" name="email" placeholder="Email" />
                             @error('email')
                             <p class="help-block text-danger">{{ $message }}</p>
                             @enderror
                         </div>
                         <div class="control-group">
                             <input type="phone" class="form-control" name="phone" placeholder="phone number eg+254..." />
                             @error('phone')
                             <p class="help-block text-danger">{{ $message }}</p>
                             @enderror
                         </div>
                         <div class="control-group">
                             <textarea class="form-control" name="content" placeholder="Litle details About yourself"></textarea>
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

         </div>
     </div>
 </div>
 <!-- Volunteer End -->
