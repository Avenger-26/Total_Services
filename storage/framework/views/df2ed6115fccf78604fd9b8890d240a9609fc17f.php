<div>
    <?php echo $__env->make('../layouts/sprovider/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <div class="row justify-content-md-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-center" style="font-size:28px; font-weight:bolder"
                                    id="from-actions"><i class="fa fa-user-plus"></i>Update Profile</h4>
                            </div>
                            <hr>
                            <div class="card-content">
                                <div class="px-3">
                                    <?php if(Session::has('message')): ?>
                                        <script>
                                            Swal.fire({
                                                icon: 'success',
                                                title: "<?php echo Session::get('message'); ?>",
                                                text: 'Great Job!',

                                            })
                                        </script>
                                    <?php endif; ?>
                                    <form wire:submit.prevent="updateProfile" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="inputAddress">Name</label>
                                            <input type="text" class="form-control border-primary" id="name" name="name"
                                                required wire:model="name">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Email</label>
                                                <input type="email" class="form-control border-primary" id="inputEmail4"
                                                    wire:model="email" name="email" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="gender">Gender</label>
                                                <select class="form-control border-primary" id="gender" name="gender"
                                                    required wire:model="gender">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="label-control" for="phone">Contact Number:
                                            </label>
                                            <input type="text" id="phone" class="form-control border-primary"
                                                name="phone" placeholder="+91-7689XXXXXX" wire:model="phone">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class=" label-control" for="service_category_id">Provider
                                                    Profession:
                                                </label>
                                                <select id="service_category_id" name="service_category_id"
                                                    class="form-control border-primary"
                                                    wire:model="service_category_id">
                                                    <?php $__currentLoopData = $scategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($scategory->id); ?>">
                                                            <?php echo e($scategory->name); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label class="label-control" for="slug_id">Provider
                                                    Service: </label>
                                                <select id="slug_id" name="slug_id" class="form-control border-primary"
                                                    wire:model="slug_id">

                                                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($service->service_category_id == Auth::user()->service_category_id): ?>
                                                            <option value="<?php echo e($service->id); ?>"><?php echo e($service->name); ?>

                                                            </option>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class=" label-control" for="address">Address </label>
                                            <input type="text" id="address" class="form-control border-primary"
                                                name="address" placeholder="Your address" wire:model="address">
                                        </div>
                                        <div class="form-group">
                                            <label for="newimage" class=" label-control">Profile Image :
                                            </label>

                                            <input class="form-control-file border-primary" type="file" id="newimage"
                                                name="newimage" wire:model="newimage">
                                            <?php if($newimage): ?>
                                                <img src="<?php echo e($newimage->temporaryUrl()); ?>" alt="" width="100"
                                                    height="100" class="rounded-circle img-border gradient-summer my-3">
                                            <?php elseif($image): ?>
                                                <img src="<?php echo e(asset('images/sproviders')); ?>/<?php echo e($image); ?>" alt=""
                                                    width="100" height="100"
                                                    class="rounded-circle img-border gradient-summer my-3">
                                            <?php else: ?>
                                                <img src="<?php echo e(asset('images/sproviders/default.jpg')); ?>" alt=""
                                                    class="rounded-circle img-border gradient-summer width-100 my-3">
                                            <?php endif; ?>

                                        </div>
                                </div>

                            </div>

                            <div class="mx-auto">
                                <button type="submit" class="btn-hover color-hover">
                                    Update Profile
                                </button>
                            </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END : End Main Content-->

<!-- BEGIN : Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix text-muted text-sm-center px-2"><span>Copyright &copy; 2021 <a
                href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" id="pixinventLink" target="_blank"
                class="text-bold-800 primary darken-2">Team 26 </a>, All rights
            reserved. </span></p>
</footer>
<!-- End : Footer-->

</div>
</div>

</div>
<?php /**PATH C:\Users\cws\Documents\Master Laravel Project\Total-Services\resources\views/livewire/sprovider/edit-sprovider-profile-component.blade.php ENDPATH**/ ?>