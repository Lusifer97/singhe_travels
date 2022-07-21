<section class="breadcrumb-main pb-20 pt-14" style="background-image: url(<?= PUBLIC_URL; ?>images/bg/bg1.jpg);">
    <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(<?= PUBLIC_URL; ?>images/shape8.png);"></div>
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h1 class="mb-3">Contact Us</h1>
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="dot-overlay"></div>
</section>


<section class="contact-main pt-6 pb-60">
    <div class="container">
        <div class="contact-info-main mt-0">
            <div class="row">
                <div class="col-lg-10 col-offset-lg-1 mx-auto">
                    <div class="contact-info bg-white">
                        <div class="contact-info-title text-center mb-4 px-5">
                            <h3 class="mb-1">INFORMATION ABOUT US</h3>
                        </div>
                        <div class="contact-info-content row mb-1">
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="info-item bg-lgrey px-4 py-5 border-all text-center rounded">
                                    <div class="info-icon mb-2">
                                        <i class="fa fa-map-marker-alt theme"></i>
                                    </div>
                                    <div class="info-content">
                                        <h3>Office Location</h3>
                                        <p class="m-0">102 "sagara", Ginmellahaga West, Gonapinuwala.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="info-item bg-lgrey px-4 py-5 border-all text-center rounded">
                                    <div class="info-icon mb-2">
                                        <i class="fa fa-phone theme"></i>
                                    </div>
                                    <div class="info-content">
                                        <h3>Phone Number</h3>
                                        <p class="m-0">+94-91-229-8444</p>
                                        <p class="m-0">+94-77-688-7408</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 mb-4">
                                <div class="info-item bg-lgrey px-4 py-5 border-all text-center rounded">
                                    <div class="info-icon mb-2">
                                        <i class="fa fa-envelope theme"></i>
                                    </div>
                                    <div class="info-content ps-4">
                                        <h3>Email Address</h3>
                                        <p class="m-0"><a href="#" class="__cf_email__" >info@singhetravels.com</a></p>
                                        <p class="m-0"><a href="#" class="__cf_email__" >ceo@singhetravels.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="contact-form1" class="contact-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="map rounded overflow-hiddenb rounded mb-md-4">
                                        <div style="width: 100%">
                                            <iframe height="500" width="600" src="https://www.google.com/maps/d/u/0/embed?mid=1GrHwJge1jr_8iKFTsY0BwGlY64xLFd4&ehbc=2E312F"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div id="contactform-error-msg"></div>
                                    <form onsubmit="addinquery(event,this)">
                                        <div class="form-group mb-2">
                                            <input type="text" name="name" class="form-control" id="fullname" placeholder="Name">
                                        </div>
                                         
                                        <div class="form-group mb-2">
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                        </div>
                                         
                                        <div class="textarea mb-2">
                                            <textarea name="inqurey" placeholder="Enter a message"></textarea>
                                        </div>
                                        <div class="comment-btn text-center">
                                            <input type="submit" class="nir-btn" id="contact_b" value="Send Message">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>