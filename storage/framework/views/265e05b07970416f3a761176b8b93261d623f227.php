<div>
    <section class="tp-banner-container">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid hero-img" src="<?php echo e(asset('images/1-1.png')); ?>" alt="">
                <div class="position-absolute top-0 start-0 w-100  d-flex align-items-center"
                    style="background: rgba(53, 53, 53, .7);">
                </div>
                <div class="filter-title">
                    <div class="title-header">
                        <h1 style="" style="color:#1597e5;">Welcome To VS Home Services </h1>
                        <p class="lead">Book On Demand Home Services On Your Finger Tip</p>

                    </div>

                    <?php if(Route::has('login')): ?>
                        <?php if(auth()->guard()->check()): ?>
                            <?php if(Auth::user()->u_type === 'ADM'): ?>
                                <div class="filter-header">
                                    <form id="sform" action="<?php echo e(route('searchService')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <input type="text" id="q" name="q" required="required"
                                            placeholder="What Services do you want?" class="input-large typeahead"
                                            autocomplete="off">
                                        <button type="submit" name="submit" value="Search"
                                            class="search btn-hover color-hover "> Search
                                        </button>
                                    </form>
                                </div>
                            <?php elseif(Auth::user()->u_type === 'SPV'): ?>
                                <div class="filter-header">
                                    <form id="sform" action="<?php echo e(route('searchService')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <input type="text" id="q" name="q" required="required"
                                            placeholder="What Services do you want?" class="input-large typeahead"
                                            autocomplete="off">
                                        <button type="submit" name="submit" value="Search"
                                            class="search btn-hover color-hover  "> Search
                                        </button>
                                    </form>
                                </div>
                            <?php else: ?>
                                <div class="filter-header">
                                    <form id="sform" action="<?php echo e(route('searchService')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <input type="text" id="q" name="q" required="required"
                                            placeholder="What Services do you want?" class="input-large typeahead"
                                            autocomplete="off">
                                        <button type="submit" name="submit" value="Search"
                                            class="search btn-hover color-hover  "> Search
                                        </button>
                                    </form>
                                </div>
                            <?php endif; ?>
                        <?php else: ?>
                            <button type="submit" name="submit" value="Search" class="search btn-hover color-hover "
                                style="margin:auto; display:block; box-shadow:0px 0px 5px #000;"> <a
                                    href="<?php echo e(route('register')); ?>" style="text-decoration: none; color:white;">Register
                                </a>
                            </button>
                        <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid hero-img" src="<?php echo e(asset('images/2-1.png')); ?>" alt="">
                    <div class="position-absolute top-0 start-0 w-100  d-flex align-items-center"
                        style="background: rgba(53, 53, 53, .7);">
                    </div>
                    <div class="filter-title">
                        <div class="title-header">
                            <h1 style="" style="color:#1597e5;"> Are You Looking For A Home Services</h1>
                            <p class="lead">Find Variety Of Services At One Place, </p>

                        </div>
                        <?php if(Route::has('login')): ?>
                            <?php if(auth()->guard()->check()): ?>
                                <?php if(Auth::user()->u_type === 'ADM'): ?>
                                    <div class="filter-header">
                                        <form id="sform" action="<?php echo e(route('searchService')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <input type="text" id="q" name="q" required="required"
                                                placeholder="What Services do you want?" class="input-large typeahead"
                                                autocomplete="off">
                                            <button type="submit" name="submit" value="Search" class="search "> Search
                                            </button>
                                        </form>
                                    </div>
                                <?php elseif(Auth::user()->u_type === 'SPV'): ?>
                                    <div class="filter-header">
                                        <form id="sform" action="<?php echo e(route('searchService')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <input type="text" id="q" name="q" required="required"
                                                placeholder="What Services do you want?" class="input-large typeahead"
                                                autocomplete="off">
                                            <button type="submit" name="submit" value="Search" class="search "> Search
                                            </button>
                                        </form>
                                    </div>
                                <?php else: ?>
                                    <div class="filter-header">
                                        <form id="sform" action="<?php echo e(route('searchService')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <input type="text" id="q" name="q" required="required"
                                                placeholder="What Services do you want?" class="input-large typeahead"
                                                autocomplete="off">
                                            <button type="submit" name="submit" value="Search" class="search "> Search
                                            </button>
                                        </form>
                                    </div>
                                <?php endif; ?>
                            <?php else: ?>
                                <button type="submit" name="submit" value="Search" class="search btn-hover color-hover "
                                    style="margin:auto; display:block; box-shadow:0px 0px 5px #000;"> <a
                                        href="<?php echo e(route('register')); ?>" style="text-decoration: none; color:white;">Join Us</a>
                                </button>
                            <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid hero-img" src="<?php echo e(asset('images/3-1.png')); ?>" alt="">
                        <div class="position-absolute top-0 start-0 w-100  d-flex align-items-center"
                            style="background: rgba(53, 53, 53, .7);">
                        </div>
                        <div class="filter-title">
                            <div class="title-header">
                                <h1 style="" style="color:#1597e5;">BooK A Quality Service</h1>
                                <p class="lead">Book A Service At Very Affordable Price, </p>

                            </div>
                            <?php if(Route::has('login')): ?>
                                <?php if(auth()->guard()->check()): ?>
                                    <?php if(Auth::user()->u_type === 'ADM'): ?>
                                        <div class="filter-header">
                                            <form id="sform" action="<?php echo e(route('searchService')); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <input type="text" id="q" name="q" required="required"
                                                    placeholder="What Services do you want?" class="input-large typeahead"
                                                    autocomplete="off">
                                                <button type="submit" name="submit" value="Search" class="search "> Search
                                                </button>
                                            </form>
                                        </div>
                                    <?php elseif(Auth::user()->u_type === 'SPV'): ?>
                                        <div class="filter-header">
                                            <form id="sform" action="<?php echo e(route('searchService')); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <input type="text" id="q" name="q" required="required"
                                                    placeholder="What Services do you want?" class="input-large typeahead"
                                                    autocomplete="off">
                                                <button type="submit" name="submit" value="Search" class="search "> Search
                                                </button>
                                            </form>
                                        </div>
                                    <?php else: ?>
                                        <div class="filter-header">
                                            <form id="sform" action="<?php echo e(route('searchService')); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <input type="text" id="q" name="q" required="required"
                                                    placeholder="What Services do you want?" class="input-large typeahead"
                                                    autocomplete="off">
                                                <button type="submit" name="submit" value="Search" class="search "> Search
                                                </button>
                                            </form>
                                        </div>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <button type="submit" name="submit" value="Search" class="search btn-hover color-hover "
                                        style="margin:auto; display:block; box-shadow:0px 0px 5px #000;"> <a
                                            href="<?php echo e(route('register')); ?>" style="text-decoration: none; color:white;">Book
                                            Now</a>
                                    </button>
                                <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="tp-bannertimer"></div>
                </section>

                <section id="clients" class="clients">
                    <div class="container">
                        <div class="owl-carousel owl-theme " id="client">
                            <?php $__currentLoopData = $scategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="item owl-item-slider mini-slider" data-aos="fade-down">
                                    <a href="<?php echo e(route('home.services_by_category', ['category_slug' => $scategory->slug])); ?>"><img
                                            src="<?php echo e(asset('images/services-categories')); ?>/<?php echo e($scategory->image); ?>"
                                            alt="<?php echo e($scategory->name); ?>"></a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </section>

                <div class="section best-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="titles text-center">
                                        <h2 class="head-title hh-secondary head-primary" data-aos="zoom-in">Best Offers %</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="products-tabs">
                                        <div id="tab1" class="tab-pane active">
                                            <div class="products-slick " data-nav="#slick-nav-1">
                                                <div class="product" data-aos="zoom-in-up">
                                                    <div class="product-img tb">
                                                        <img src="<?php echo e(asset('images/best-offer/cleaning-services.jpeg')); ?>"
                                                            alt="Home Cleaning">
                                                    </div>
                                                    <div class="product-body">
                                                        <h3 class="product-name"><a href="#">Home Cleaning</a>
                                                        </h3>
                                                        <h4 class="product-price">Upto 30% off
                                                            <div class="product-rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="product" data-aos="zoom-in-up">
                                                    <div class="product-img tb">
                                                        <img src="<?php echo e(asset('images/best-offer/salon-for-men.jpg')); ?>"
                                                            alt="Salon for Men">
                                                    </div>
                                                    <div class="product-body">
                                                        <h3 class="product-name"><a href="#">Salon for Men</a>
                                                        </h3>
                                                        <h4 class="product-price">Flat Rs.100 off
                                                            <div class="product-rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="product" data-aos="zoom-in-up">
                                                    <div class="product-img tb">
                                                        <img src="<?php echo e(asset('images/best-offer/auto-repair.jpg')); ?>"
                                                            alt="AutoCare">
                                                    </div>
                                                    <div class="product-body">
                                                        <h3 class="product-name"><a href="#">AutoCare</a>
                                                        </h3>
                                                        <h4 class="product-price">Flat 20% off
                                                            <div class="product-rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="product" data-aos="zoom-in-up">
                                                    <div class="product-img tb">
                                                        <img src="<?php echo e(asset('images/best-offer/painter.jpg')); ?>" alt="Painter">
                                                    </div>
                                                    <div class="product-body">
                                                        <h3 class="product-name"><a href="#">Painter</a>
                                                        </h3>
                                                        <h4 class="product-price">Consultation at Rs.99
                                                            <div class="product-rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="product " data-aos="zoom-in-up">
                                                    <div class="product-img tb">
                                                        <img src="<?php echo e(asset('images/best-offer/The-Science.jpg')); ?>"
                                                            alt="Painter">
                                                    </div>
                                                    <div class="product-body">
                                                        <h3 class="product-name"><a href="#">Disinfection</a>
                                                        </h3>
                                                        <h4 class="product-price">Upto 25% off
                                                            <div class="product-rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="slick-nav-1" class="products-slick-nav-1"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content_info category" style="padding-bottom:70px !important; padding-top: 0px !important;">
                    <div class="titles text-center ">
                        <h2 class="head-title hh-secondary head-primary " data-aos="zoom-in"> Top Categories</h2>
                    </div>
                    <div class="bg-dark color-white border-top">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 ">
                                    <div class="services-lines-info "
                                        data-aos="zoom-in"">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <h2 data-aos="
                                        zoom-in">
                                        WELCOME
                                        TO TOTAL
                                        SERVICE</h2>
                                        <p data-aos="zoom-in" class="lead">
                                            Book best services at one place.
                                            <span class="line"></span>
                                        </p>
                                        <p data-aos="zoom-in">Find a wide variety of home services.</p>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <ul class="services-lines" data-aos="zoom-in">
                                        <?php $__currentLoopData = $fscategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fscategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <a
                                                    href="<?php echo e(route('home.services_by_category', ['category_slug' => $fscategory->slug])); ?>">
                                                    <div class="item-service-line">
                                                        <i class="fa"><img class="icon-img"
                                                                src="<?php echo e(asset('images/services-categories')); ?>/<?php echo e($fscategory->image); ?>"
                                                                alt="<?php echo e($fscategory->name); ?>" width="80" height="80"></i>
                                                        <h5><?php echo e($fscategory->name); ?></h5>
                                                    </div>
                                                </a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ======= Counts Section ======= -->
                <section id="counts" class="counts">
                    <div class="container">

                        <div class="row">

                            <div class="col-lg-3 col-md-6 ">
                                <div data-aos="zoom-in-up" class="count-box count-shadow">
                                    <i class="bi bi-emoji-smile"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1"
                                        class="purecounter"></span>
                                    <p>Happy Clients</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                                <div data-aos="zoom-in-up" class="count-box">
                                    <i class="bi bi-journal-richtext"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1"
                                        class="purecounter"></span>
                                    <p>Services Done</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                                <div data-aos="zoom-in-up" class="count-box">
                                    <i class="bi bi-headset"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="123" data-purecounter-duration="1"
                                        class="purecounter"></span>
                                    <p>Hours Of Support</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                                <div data-aos="zoom-in-up" class="count-box">
                                    <i class="bi bi-people"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1"
                                        class="purecounter"></span>
                                    <p>Total Service</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </section><!-- End Counts Section -->

                <div class="section service-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="titles">
                                        <h2 class="head-title hh-secondary head-primary" data-aos="zoom-in">Choice Of Services</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="products-tabs ">
                                        <div id="tab1" class="tab-pane active">
                                            <div class="products-slick mb-5" data-nav="#slick-nav-2">
                                                <?php $__currentLoopData = $fserivces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="product hover-shadow" data-aos="zoom-in">
                                                        <a
                                                            href="<?php echo e(route('home.service_details', ['service_slug' => $service->slug])); ?>">
                                                            <div class="product-img tb">
                                                                <img src="<?php echo e(asset('images/services/thumbnails')); ?>/<?php echo e($service->thumbnail); ?>"
                                                                    alt="<?php echo e($service->name); ?>">
                                                            </div>
                                                            <div class="product-body">
                                                                <p class="product-category"><?php echo e($service->category->name); ?></p>
                                                                <h3 class="product-name"><a href="#"><?php echo e($service->name); ?></a>
                                                                </h3>
                                                                <h4 class="product-price">₹<?php echo e($service->price); ?>

                                                                    <div class="product-rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <button class="add-to-cart-btn btn-hover color-hover"
                                                                    style="margin-top:-0.2px">
                                                                    <a
                                                                        href="<?php echo e(route('home.service_details', ['service_slug' => $service->slug])); ?>"><i
                                                                            class="fa fa-shopping-cart"></i> Book Now</a></button>
                                                            </div>
                                                        </a>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                            <div id="slick-nav-2" class="products-slick-nav-2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="ftco-section">
                    <div class="container">
                        <div class="titles text-center ">
                            <h2 class="head-title hh-secondary head-primary" data-aos="fade-right"> Why Choose Us</h2>
                        </div>
                        <div class="row no-gutters ftco-services">
                            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services mb-md-0 mb-4" data-aos="fade-right">
                                    <div class="icon bg-color-1 d-flex justify-content-center align-items-center"
                                        style="margin-bottom: 10px">
                                        <span class="fas fa-award"></span>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="heading">Quality Service</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services mb-md-0 mb-4" data-aos="fade-right">
                                    <div class="icon bg-color-1 d-flex justify-content-center align-items-center "
                                        style="margin-bottom: 10px">
                                        <span class="fas fa-headphones-alt"></span>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="heading">24/7 Customer Support</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services mb-md-0 mb-4" data-aos="fade-right">
                                    <div class="icon bg-color-1 active d-flex justify-content-center align-items-center"
                                        style="margin-bottom: 10px">
                                        <span class="fas fa-drafting-compass"></span>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="heading">Free Consultation</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services mb-md-0 mb-4" data-aos="fade-right">
                                    <div class="icon bg-color-1 d-flex justify-content-center align-items-center"
                                        style="margin-bottom: 10px">
                                        <span class="fas fa-users"></span>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="heading">Verified Providers</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
            <div class="alan-btn"></div>


            <!-- Testimonial Start -->
            <div class="container-xxl  wow fadeInUp" data-wow-delay="0.1s" style="padding-top: 3rem;">
                <div class="container px-lg-5">
                    <div class="titles" style="margin-top:0 !important; margin-bottom:50px;">
                        <h2 class="head-title hh-secondary head-primary" data-aos="zoom-in">What Our Clients Says!</h2>
                    </div>
                    <div class="owl-carousel testimonial-carousel">
                        <?php $__currentLoopData = $testimonial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="testimonial-item bg-light rounded gradient-box" data-aos="fade-right">
                                <p class="fs-5"><i
                                        class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i><?php echo e($testimonial_item->feedback_description); ?>

                                </p>
                                <div class="d-flex align-items-center">
                                    <?php if($testimonial_item->profile_pic): ?>
                                        <img class="img-fluid flex-shrink-0 rounded-circle"
                                            src="<?php echo e(asset('images/customer')); ?>/<?php echo e($testimonial_item->profile_pic); ?>"
                                            style="width: 65px; height: 65px;">
                                    <?php else: ?>
                                        <img class="img-fluid flex-shrink-0 rounded-circle"
                                            src="<?php echo e(asset('images/sproviders/default.png')); ?>"
                                            style="width: 65px; height: 65px;">
                                    <?php endif; ?>
                                    <div class="ps-4">
                                        <h5 class="mb-1"><?php echo e($testimonial_item->name); ?></h5>
                                        <span><?php echo e($testimonial_item->feedback_title); ?></span>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>
            
            <!-- Testimonial End -->
            </div>
            <?php $__env->startPush('scripts'); ?>
                <script type="text/javascript">
                    var path = "<?php echo e(route('autocomplete')); ?>";

                    $('input.typeahead').typeahead({
                        source: function(query, process) {
                            return $.get(path, {
                                query: query
                            }, function(data) {
                                return process(data);
                            })
                        }
                    });
                </script>
            <?php $__env->stopPush(); ?>
<?php /**PATH C:\Users\Shah\Videos\master\testing\Total_Services\resources\views/livewire/home-component.blade.php ENDPATH**/ ?>