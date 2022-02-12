<style>
    .avatar {
        border: 0.3rem solid rgba(#fff, 0.3);
        margin-top: -6rem;
        margin-bottom: 1rem;
        max-width: 9rem;
    }

</style>

<div>
    <?php echo $__env->make('../../layouts/admin/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">

                <section id="extended">
                    <div class="row justify-content-md-center">
                        <div class="col-md-10 ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-sm-8 col-md-6 col-lg-6 mx-auto ">
                                        <div class="card mt-5 shadow">
                                            
                                            <div class="card-body text-center  shadow">
                                                <img class="avatar rounded-circle img-border gradient-summer shadow  "
                                                    src="<?php echo e(asset('images/sproviders')); ?>/<?php echo e($admin->image); ?>"
                                                    alt="<?php echo e($admin->name); ?>">
                                                <h4 class="card-title  border-bottom pb-2"> <i
                                                        class="fa fa-user"></i> Name: <?php echo e($admin->name); ?></h4>
                                                <p class="card-text pt-2  border-bottom pb-2"><i
                                                        class="fa fa-envelope"></i> Email: <?php echo e($admin->email); ?></p>
                                                <p class="card-text border-bottom pb-2"> <i class="fa fa-phone"></i>
                                                    Phone :<?php echo e($admin->phone); ?></p>
                                                <p class="card-text border-bottom pb-2"> <i
                                                        class="fa fa-marke"></i>Address :<?php echo e($admin->address); ?></p>
                                                <p class="card-text border-bottom pb-2 mb-3 shadow"> <i
                                                        class="fa fa-users-cog"></i> Role : Admin</p>
                                                <a class="btn-hover color-hover px-4 py-2 "
                                                    href="<?php echo e(url('admin/Update_Profile')); ?>">
                                                    <i class="fa fa-pencil-square-o"></i> Update Profile
                                                </a>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </section>

    </div>
</div>
<?php /**PATH C:\Users\Shah\Videos\master\testing\Total_Services\resources\views/livewire/admin/admin-profile-component.blade.php ENDPATH**/ ?>