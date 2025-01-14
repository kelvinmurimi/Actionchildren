
       {{---  <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img" data-parallax="scroll" data-image-src="{{ asset('slider/mission.jpg') }}"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <p>About Us</p>
                            <h2>MAKE A DIFFERENCE IN A CHILD'S LIFE</h2>
                        </div>
                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-2">Mission</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-3">Our Work</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="tab-content-1" class="container tab-pane active">
                                    <strong> <b class="text-primary">Action for Children in Conflict(AFIC)</b> is dedicated to the improvement of the lives of vulnerable children, women and communities by promoting their access to quality education, health, food, safe and clean environment, economic empowerment and the protection of their rights and fundamental freedoms.</strong>
                                    <div>
                                        <a href="{{ route('pages.about') }}" class="btn btn-primary ">Learn More  About Us</a>
                                    </div>
                                </div>
                                <div id="tab-content-2" class="container tab-pane fade">
                                    <b>

                                        Enhance and support the growth and development of children, young people and their families by facilitating access to justice, education, health, and their psychosocial and economic support. Putting communities at the center and fostering their growth through fair and sustainable opportunities.
                                    </b>
                                    <div>
                                        <a href="{{ route('centers.trc') }}" class="btn btn-custom ">Our Centers</a>
                                    </div>
                                </div>
                                <div id="tab-content-3" class="container tab-pane fade">
                                    Our programs focus on the following outcomes: rehabilitation and reintegration, economic empowerment, access to justice, education empowerment and climate change and safe environment.  The programs are all connected and essential to ending the cycle of poverty.
                                    <div>
                                        <a href="{{ route('focusareas') }}" class="btn btn-primary ">Our Focus Areas</a>
                                        <form action="https://www.paypal.com/donate" method="post" target="_top ">
                                            <input type="hidden" name="hosted_button_id" value="LU7GDTJZH7NLG" />
                                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif"
                                                border="0" name="submit"  class="paypal-button"  title="PayPal - The safer, easier way to pay online!"
                                                alt="Donate with PayPal button" />
                                            <img alt="" border="0" src="https://www.paypal.com/en_KE/i/scr/pixel.gif" width="1"
                                                height="1" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        --}}
        <!-- About 2 - Bootstrap Brain Component -->
<section class="py-3 py-md-5">
    <div class="container">
      <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
        <div class="col-12 col-lg-6">
          <img class="img-fluid rounded" loading="lazy" src="{{ asset('slider/mission.jpg') }}" alt="About 2">
        </div>
        <div class="col-12 col-lg-6">
          <div class="row justify-content-xl-center">
            <div class="col-12 col-xl-10">
              <h2 class="mb-3">MAKE A DIFFERENCE IN A CHILD'S LIFE</h2>
              <p class="lead fs-4 mb-3 mb-xl-5">
                <h5 class="blue">Our Mission</h5>
                Enhance and support the growth and development of children, young people and their families by facilitating access to justice, education, health, and their psychosocial and economic support. Putting communities at the center and fostering their growth through fair and sustainable opportunities.
                </p>
                <p class="lead fs-4 mb-3 mb-xl-5">
                    <h5 class="blue">About Us</h5>
                 Action for Children in Conflict is dedicated to the improvement of the lives of vulnerable children, women and communities by promoting their access to quality education, health, food, safe and clean environment, economic empowerment and the protection of their rights and fundamental freedoms.
                    </p>
             {{--- <div class="d-flex align-items-center mb-3">
                <div class="me-3 text-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                  </svg>
                </div>
                <div>
                  <p class="fs-5 m-0">Our evolution procedure is super intelligent.</p>
                </div>
              </div>
              <div class="d-flex align-items-center mb-3">
                <div class="me-3 text-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                  </svg>
                </div>
                <div>
                  <p class="fs-5 m-0">We deliver services beyond expectations.</p>
                </div>
              </div>
              <div class="d-flex align-items-center mb-4 mb-xl-5">
                <div class="me-3 text-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                  </svg>
                </div>
                <div>
                  <p class="fs-5 m-0">Let's hire us to reach your objectives.</p>
                </div>
              </div>--}}
              <a href="{{ route('pages.about') }}" class="btn bsb-btn-xl btn-outline-primary rounded-pill">More About Us</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
