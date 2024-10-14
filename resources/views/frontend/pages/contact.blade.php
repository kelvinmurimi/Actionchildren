@extends('frontend.base')
@section('content')
    @include('frontend.includes.banner')
    @if (session('success'))
        <div class="container">
            <div class="row">
                <div class="col-">
                    <div class="alert alert-success ">
                        <span>{{ session('success') }}</span>
                    </div>
                </div>
            </div>
        </div>
    @endif


    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="section-header text-center">
                <p>Get In Touch</p>
                <h2>Contact Us For Any Query</h2>
            </div>
            <div class="contact-img">
                <img src="{{ asset('media/contact.jpg') }}" alt="Image">
            </div>
            <div class="contact-form">
                <div id="success"></div>
                <form name="sentMessage" id="contactForm" novalidate="novalidate" action="{{ route('contact.send') }}"
                    method="post">
                    @csrf
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name"
                            required="required" data-validation-required-message="Please enter your name" />
                        @error('name')
                            <p class="help-block text-danger">{{ $message }}</p>
                        @enderror

                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" name="phone" placeholder="phone Number"
                            required="required" data-validation-required-message="Please enter your name" />
                        @error('phone')
                            <p class="help-block text-danger">{{ $message }}</p>
                        @enderror

                    </div>
                    <div class="control-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                            required="required" data-validation-required-message="Please enter your email" />
                        @error('email')
                            <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="control-group">
                        <textarea class="form-control" name="content" id="message" placeholder="Message" required="required"
                            data-validation-required-message="Please enter your message"></textarea>
                        @error('content')
                            <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <button class="btn btn-custom" type="submit" id="sendMessageButton">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    @include('frontend.includes.BecomeVolunteer')
@endsection
