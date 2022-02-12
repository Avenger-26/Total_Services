<div>
    <?php echo $__env->make('../layouts/sprovider/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <!--Basic User Details Starts-->
                <section id="user-profile">
                    <div class="row">
                        <div class="col-md-11 col-sm-11 mx-auto">
                            <div class="card profile-with-cover shadow">
                                <div class="card-img-top img-fluid bg-cover height-300"
                                    style="background: url(<?php echo e(asset('app-assets/img/photos/14.jpg')); ?>) 50%;"></div>
                                <div class="media profil-cover-details row">
                                    <div class="col-5">
                                        <div class="align-self-start halfway-fab pl-3 pt-2">
                                            <div class="text-left">
                                                <h3 class="card-title white"><i class="fa fa-user-circle"></i>
                                                    <?php echo e($sprovider->name); ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="align-self-center halfway-fab text-center">
                                            <a class="profile-image">
                                                <?php if($sprovider->image): ?>
                                                    <img src="<?php echo e(asset('images/sproviders')); ?>/<?php echo e($sprovider->image); ?>"
                                                        width="100" height="100" alt=""
                                                        class="rounded-circle img-border gradient-summer">

                                                <?php else: ?>
                                                    <img src="<?php echo e(asset('images/sproviders/default.jpg')); ?>" alt=""
                                                        class="rounded-circle img-border gradient-summer width-100">
                                                <?php endif; ?>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                    </div>
                                    <div class="profile-cover-buttons">
                                        <div class="media-body halfway-fab align-self-end">

                                            <div class="text-right d-block d-sm-block d-md-block d-lg-none">
                                                <button type="button" class="btn btn-primary btn-raised mr-2"><i
                                                        class="fa fa-plus"></i></button>
                                                <button type="button" class="btn btn-success btn-raised mr-3"><i
                                                        class="fa fa-dashcube"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-section">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5 ">
                                            <ul class="profile-menu no-list-style">
                                                <li>
                                                    <a href="#about" class="primary font-medium-2 font-weight-600"> <i
                                                            class="fa fa-user"></i> About</a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="col-lg-2 col-md-2 text-center">
                                            <span class="font-medium-2 text-uppercase" style="margin-top:10px;
                                                    margin-bottom:10px"><?php echo e($sprovider->name); ?></span>
                                            <p class="grey font-md-4">
                                                <?php if($sprovider->service_category_id): ?>
                                                    <?php echo e($sprovider->category->name); ?>

                                                <?php endif; ?>
                                            </p>
                                        </div>
                                        <div class="col-lg-5 col-md-5">
                                            <ul class="profile-menu no-list-style">

                                                <li>
                                                    <a href="<?php echo e(route('sprovider.edit_profile')); ?>"
                                                        class="primary font-medium-2 font-weight-600">
                                                        <i class="fa fa-pencil"></i>
                                                        Edit Profile</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Basic User Details Ends-->
                <!--About section starts-->
                <section id="about">
                    
                    <div class="row">
                        <div class="col-md-11 col-sm-11 mx-auto">
                            <div class="card shadow gradient-border">
                                <div class="card-header">
                                    <h5>Personal Information</h5>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        
                                        <hr>
                                        <div class="row">
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <ul class="no-list-style">
                                                    <li class="mb-2">
                                                        <span class="text-bold-500 primary"><a><i
                                                                    class="ft-mail font-small-3"></i> Email:</a></span>
                                                        <span
                                                            class="d-block overflow-hidden"><?php echo e($sprovider->email); ?></span>
                                                    </li>
                                                    <li class="mb-2">
                                                        <span class="text-bold-500 primary"><a><i
                                                                    class="ft-globe font-small-3"></i> Lives
                                                                in:</a></span>
                                                        <span
                                                            class="d-block overflow-hidden"><?php echo e($sprovider->address); ?></span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <ul class="no-list-style">
                                                    <li class="mb-2">
                                                        <span class="text-bold-500 primary"><a><i
                                                                    class="ft-smartphone font-small-3"></i> Phone
                                                                Number:</a></span>
                                                        <a
                                                            class="d-block overflow-hidden"><?php echo e($sprovider->phone); ?></a>
                                                    </li>
                                                    <li class="mb-2">
                                                        <span class="text-bold-500 primary"><a><i
                                                                    class="ft-user font-small-3"></i>
                                                                Gender:</a></span>
                                                        <span
                                                            class="d-block overflow-hidden"><?php echo e($sprovider->gender); ?></span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <ul class="no-list-style">
                                                    <li class="mb-2">
                                                        <span class="text-bold-500 primary"><a><i
                                                                    class="ft-book font-small-3"></i> Provider
                                                                Profession:</a></span>
                                                        <span class="d-block overflow-hidden">
                                                            <?php if($sprovider->service_category_id): ?>
                                                                <?php echo e($sprovider->category->name); ?>

                                                            <?php endif; ?>
                                                        </span>
                                                    </li>
                                                    <li class="mb-2">
                                                        <span class="text-bold-500 primary"><a><i
                                                                    class="ft-codepen font-small-3"></i>
                                                                Provide Service</a></span>
                                                        <span class="d-block overflow-hidden">
                                                            <?php if($sprovider->slug_id): ?>
                                                                <?php echo e($sprovider->slug->name); ?>

                                                            <?php endif; ?>
                                                        </span>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!--About section ends-->


            </div>
        </div>
        <!-- END : End Main Content-->

        <!-- BEGIN : Footer-->
        <footer class="footer footer-static footer-light">
            <p class="clearfix text-muted text-sm-center px-2"><span>Copyright &copy; 2021 <a
                        href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" id="pixinventLink"
                        target="_blank" class="text-bold-800 primary darken-2">Team 26 </a>, All rights
                    reserved. </span></p>
        </footer>
        <!-- End : Footer-->

    </div>
</div>
</div>
<?php /**PATH C:\Users\cws\Documents\Master Laravel Project\Total-Services\resources\views/livewire/sprovider/sprovider-profile-component.blade.php ENDPATH**/ ?>