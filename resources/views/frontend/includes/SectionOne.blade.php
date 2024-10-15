
        <!-- About Start -->
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
        <!-- About End -->
