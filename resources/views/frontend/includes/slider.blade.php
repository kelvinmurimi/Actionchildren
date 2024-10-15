  <!-- Carousel Start -->
  <div class="carousel">
    <div class="container-fluid">
        <div class="owl-carousel">
            <div class="carousel-item">
                <div class="carousel-img">
                    <img src="{{ asset('updates/slider1w.jpg') }}" alt="Image">
                </div>
                <div class="carousel-text">
                    <h1>Who we are</h1>
                    <p>
                        We are a leading child protection, health and development organization that promotes access to equal and sustainable opportunities to children and vulnerable families.
                    </p>
                    <div class="carousel-btn">
                        <a class="btn btn-custom" href="{{ route('focusareas') }}">Our Focus Areas</a>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img">
                    <img src="{{ asset('frontend/slider/up.jpg') }}" alt="Image">
                </div>
                <div class="carousel-text">
                    <h1>What We Do</h1>
                    <p>
                        We implement projects at the heart of the community aimed at child protection, education empowerment, health and community empowerment
                    </p>
                    <div class="carousel-btn">
                        <a class="btn btn-custom" href="{{ route('centers.trc') }}">Our Centers</a>
                        <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/watch?v=NNCH07KZdLU" data-target="#videoModal">Watch Video</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img">
                    <img src="{{ asset('updates/slider3.jpg') }}" alt="Image">
                </div>
                <div class="carousel-text">
                    <h1>Why we do it</h1>
                    <p>
                        Through our programs we are ending the cycle of poverty by empowering children and impacting the community for future generations.
                    </p>
                    <div class="carousel-btn">
                        <a  class="btn btn-custom" href="{{ route('donation.form') }}">Donate</a>
                        <a  href="{{ route('donation.form') }}" class="btn btn-custom btn-play">Donation Causes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

 <!-- Video Modal Start-->
 <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->
