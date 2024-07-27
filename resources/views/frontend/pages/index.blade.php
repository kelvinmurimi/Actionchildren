@extends('frontend.base')
@section('content')
      <!-- Carousel Start -->
      <div class="container-fluid overflow-hidden px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1s" style="animation-delay: 1s;">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ asset('frontend/slider/up.jpg') }}" class="img-fluid w-100" alt="First slide"/>
                    <div class="carousel-caption">
                        <p class="text-uppercase text-secondary fs-4 mb-0 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1s" style="animation-delay: 1s;">Action for Children in Conflict</p>
                        <h1 class="display-1 text-capitalize text-white mb-4 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.3s" style="animation-delay: 1.3s;">MAKE A DIFFERENCE IN A CHILD'S LIFE</h1>
                        <p class="mb-5 fs-5 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.5s;">Action for Children in Conflict is dedicated to the improvement of the lives of vulnerable children, women and communities by promoting their access to quality education, health, food, safe and clean environment, economic empowerment and the protection of their rights and fundamental freedoms.
                        </p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-primary d-flex py-3 px-5 me-2 flex-shrink-0 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;" href="#">Our Centers</a>
                            <a class="btn btn-secondary d-inline-block py-3 px-5 ms-2 flex-shrink-0 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;" href="#">About Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('frontend/slider/edu1.jpg') }}" class="img-fluid w-100" alt="Second slide"/>
                    <div class="carousel-caption">
                        <p class="text-uppercase text-secondary fs-4 mb-0 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1s" style="animation-delay: 1s;">Afcic</p>
                        <h1 class="display-1 text-capitalize text-white mb-4 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.3s" style="animation-delay: 1.3s;">Our programs focus on the following outcomes: </h1>
                        <p class="mb-5 fs-5 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.5s;"> rehabilitation and reintegration, economic empowerment, access to justice, education empowerment and climate change and safe environment.  The programs are all connected and essential to ending the cycle of poverty.
                        </p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-primary d-flex py-3 px-5 me-2 flex-shrink-0 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;" href="#">Volunteer</a>
                            <a class="btn btn-secondary d-inline-block py-3 px-5 ms-2 flex-shrink-0 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;" href="#">Donate</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('frontend/slider/up.jpg') }}" class="img-fluid w-100" alt="Third slide"/>
                    <div class="carousel-caption">
                        <p class="text-uppercase text-secondary fs-4 mb-0 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1s" style="animation-delay: 1s;">Our Vision</p>
                        <h1 class="display-1 text-capitalize text-white mb-4 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.3s" style="animation-delay: 1.3s;">Our Vission</h1>
                        <p class="mb-5 fs-5 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.5s;">A world of opportunities, equal and sustainable for every child.
                        </p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-primary d-flex py-3 px-5 me-2 flex-shrink-0 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;" href="#">Partner With us</a>
                           <!-- <a class="btn btn-secondary d-inline-block py-3 px-5 ms-2 flex-shrink-0 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;" href="#">Read More</a>-->
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon btn-lg-square fadeInLeft animate__animated" aria-hidden="true" data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;"><i class="fas fa-chevron-left fa-2x"></i></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon btn-lg-square fadeInRight animate__animated" aria-hidden="true" data-animation="fadeInRight" data-delay="1.1s" style="animation-delay: 1.3s;"><i class="fas fa-chevron-right fa-2x"></i></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->
      <!-- About Start -->
      <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="about-item-image d-flex">
                        <img src="{{asset('frontend/slider/s2.jpg')}}" class="img-1 img-fluid w-50"  alt="">
                        <img src="{{asset('frontend/homeimg/second.jpg')}}" class="img-2 img-fluid w-50"  alt="">
                        <div class="about-item-image-content">
                            <img src="{{asset('frontend/homeimg/six.jpg')}}" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.1s">
                    <div class="about-item-content">
                        <p class="text-uppercase text-secondary fs-5 mb-0">continue Touching a Childs Life.</p>
                        <h2 class="display-4 text-capitalize mb-3">MWho we Are.</h2>
                        <p class="mb-4 fs-5">We are a leading child protection, health and development organization that promotes access to equal and sustainable opportunities to children and vulnerable families.
                        </p>
                        <div class="pb-4 mb-4 border-bottom">
                            <div class="row g-4">
                                <div class="col-lg-4">
                                    <div class="about-item-content-img">
                                        <img src="{{asset('frontend/homeimg/second.jpg')}}" class="img-fluid w-100" alt="">
                                    </div>
                                </div>
                               <!-- <div class="col-lg-8">
                                    <div class="d-flex mb-4">
                                        <div class="text-secondary">
                                            <i class="fas fa-user-shield fa-3x"></i>
                                        </div>
                                        <h4 class="ms-3">Building quality standards</h4>
                                    </div>
                                    <div class="d-flex">
                                        <div class="text-secondary">
                                            <i class="fas fa-users-cog fa-3x"></i>
                                        </div>
                                        <h4 class="ms-3">Certified engineer’s team</h4>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                        <!--<div class="row gy-0 gx-4 justify-content-between pb-4">
                            <div class="col-lg-6">
                                <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> 100% Satisfaction</p>
                                <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> Trained Emploies</p>
                            </div>
                            <div class="col-lg-6">
                                <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> Annual Pass Programs</p>
                                <p class="text-dark mb-0"><i class="fas fa-check text-secondary me-1"></i> Flexible and cost effective</p>
                            </div>
                        </div>-->
                        <a class="btn btn-secondary d-inline-block py-3 px-5 me-2 flex-shrink-0 wow fadeInUp" data-wow-delay="0.1s" href="#">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <div class="alert alert-sucess">
        ActionChildren

Sorry We are currently conducting scheduled maintenance on Actionchildren.or.ke to enhance your experience. This maintenance began when this message was sent and will continue until today 11pm During this period, you may experience temporary unavailability or limited functionality
        </div>
    <!-- Projects Start -->
    <div class="container-fluid project py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <p class="text-uppercase text-secondary fs-5 mb-0">Our Focus Areas</p>
                <p class=" fs-5 text-capitalize mb-3">Our programs focus on the following outcomes: rehabilitation and reintegration economic empowerment, access to justice, education empowerment and climate change and safe environment.  The programs are all connected and essential to ending the cycle of poverty.</p>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="project-item">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="project-img">
                                    <img src="{{asset('frontend/economic/1.jpg')}}" class="img-fluid w-100 pt-3 ps-3" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="project-content mb-4">
                                    <p class="fs-5 text-secondary mb-2">01</p>
                                    <a href="#" class="h4">
                                        Economic Empowerment</a>
                                    <p class="mb-0 mt-3">The AfCiC Economic Empowerment programme is designed to give people the tools to be able to support themselves economically. Primarily, this part of our work is aimed not at children who live and work on the streets, more at youths and families, those who have the capacity to work and to forge livelihoods themselves</p>
                                </div>
                                <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="project-item">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="project-img">
                                    <img src="{{asset('frontend/rehab/1.jpg')}}" class="img-fluid w-100 pt-3 ps-3" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="project-content mb-4">
                                    <p class="fs-5 text-secondary mb-2">02</p>
                                    <a href="#" class="h4">Rehabilitation of Street Families</a>
                                    <p class="mb-0 mt-3">

                                        With the goal of eradicating extreme poverty for all people everywhere and ending hunger, it all begins with ending child poverty; and according all children including street children equal opportunities in quality education, sanitation, economic opportunities and good health.</p>
                                </div>
                                <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="project-item">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="project-img">
                                    <img src="{{asset('frontend/rehab/3.jpg')}}" class="img-fluid w-100 pt-3 ps-3" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="project-content mb-4">
                                    <p class="fs-5 text-secondary mb-2">03</p>
                                    <a href="#" class="h4">Safe Enviroment and Climate Change</a>
                                    <p class="mb-0 mt-3">

                                        As climate change is affecting every country on every continent, Kenya is no exception. As such, Kenya has in the last few years experienced changed weather patterns that have resulted in long periods of drought and erratic rainfalls that result floods hence in food shortages and food insecurity in the country. Therefore, the need for solutions that will reduce carbon emissions and increase adaptation efforts are eminent.</p>
                                </div>
                                <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="project-item">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="project-img">
                                    <img src="{{asset('frontend/ligal/1.jpg')}}" class="img-fluid w-100 pt-3 ps-3" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="project-content mb-4">
                                    <p class="fs-5 text-secondary mb-2">04</p>
                                    <a href="#" class="h4">Legal Aid/ Advocacy</a>
                                    <p class="mb-0 mt-3">Legal Aid/ Advocacy
                                        The Kenya Children’s Legal Aid Work (KCLAW) is a specific program by Action for Children in Conflict that seeks to promote access to justice, strengthen the rule of law, promote human rights and significantly reduce all forms of violence in the society.</p>
                                </div>
                                <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a class="btn btn-secondary py-3 px-5" href="#">Our Centers</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->
@endsection
