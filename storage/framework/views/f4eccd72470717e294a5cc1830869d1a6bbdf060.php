<div>

    <?php echo $__env->make('../../layouts/admin/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <div class="row justify-content-md-center">
                    <div class="col-md-8 col-sm-11 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-center" style="font-size:28px; font-weight:bolder"
                                    id="from-actions">
                                    <i class="fa fa-user-plus"></i>
                                    Update Profile
                                </h4>
                            </div>
                            <br>
                            <div class="card-content px-3">
                                <div class="px-3">
                                    <?php if(Session::has('message')): ?>
                                        <script>
                                            Swal.fire({
                                                icon: 'success',
                                                title: "<?php echo Session::get('message'); ?>",
                                                text: 'Great Job!',
                                            });
                                        </script>
                                    <?php endif; ?>
                                    <form enctype="multipart/form-data" method="post"
                                        wire:submit.prevent="updateProfile">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <label for="inputAddress">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" required
                                                wire:model="name" value="<?php echo e($adminData->email); ?>">
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Email</label>
                                                <input type="email" class="form-control" id="inputEmail4"
                                                    value="<?php echo e($adminData->email); ?>" wire:model="email" name="email"
                                                    required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="gender">Gender</label>
                                                <select class="form-control" id="gender" name="gender" required
                                                    wire:model="gender">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control" id="phone"
                                                placeholder="Phone Number" name="phone" required wire:model="phone">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress">Address</label>
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="1234 Main St" name="address" required wire:model="address">
                                        </div>

                                        <div class="form-group">
                                            <label for="newimage" class="col-md-3 label-control">Profile Image :
                                            </label>
                                            <div class="col-md-9">
                                                <input class="form-control-file border-primary" type="file"
                                                    id="newimage" name="newimage" wire:model="newimage">
                                                <?php if($newimage): ?>
                                                    <img src="<?php echo e($newimage->temporaryUrl()); ?>" alt="" width="100"
                                                        height="100"
                                                        class="rounded-circle img-border gradient-summer my-3">
                                                <?php elseif($image): ?>
                                                    <img src="<?php echo e(asset('images/sproviders')); ?>/<?php echo e($image); ?>"
                                                        alt="" width="100" height="100"
                                                        class="rounded-circle img-border gradient-summer my-3">
                                                <?php else: ?>
                                                    <img src="<?php echo e(asset('images/sproviders/default.png')); ?>" alt=""
                                                        class="rounded-circle img-border gradient-summer width-100 my-3">
                                                <?php endif; ?>
                                            </div>
                                        </div>



                                        
                                        <div class=" mx-auto">
                                            <center> <button type="submit" class="btn-hover color-hover mx-auto">Submit
                                                </button></center>
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
                        href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" id="pixinventLink"
                        target="_blank" class="text-bold-800 primary darken-2">Team 26 </a>, All rights
                    reserved. </span></p>
        </footer>
        <!-- End : Footer-->

    </div>
</div>

</div>
<?php /**PATH C:\Users\Shah\Videos\master\testing\Total_Services\resources\views/livewire/admin/admin-update-profile-component.blade.php ENDPATH**/ ?>