
        <!-- Donate Start -->
        <div class="donate" data-parallax="scroll" data-image-src="{{ asset('frontend/ui/img/donate.jpg') }}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="donate-content">
                            <div class="section-header">
                                <p>Donate Now</p>
                                <h2>Let's Continue Touching Children's lives</h2>
                            </div>
                            <div class="donate-text">
                                <p>
                                    Your support has the power to change lives. By donating today, you help provide crucial rehabilitation, economic opportunities, and access to justice for support, growth and development of children, young people and their families by facilitating access to justice, education, health, and their psychosocial and economic support. Every contribution, no matter the size, brings us one step closer to a brighter future for vulnerable women and children.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="donate-form">
                            <form action="{{ route('donation.data') }}"  method="POST">
                                @csrf
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Name" name="name"
                                    />
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Name" name="phone"
                                    />
                                    @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" placeholder="Email"  name="email"/>
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div>
                                    <button class="btn btn-custom btn-primary" type="submit">Donate Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Donate End -->
