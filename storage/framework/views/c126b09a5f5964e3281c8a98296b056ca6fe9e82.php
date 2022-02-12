<div>

    <?php echo $__env->make('../../layouts/admin/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <div class="row justify-content-md-center">
                    <div class="col-md-8 col-sm-11 mx-auto  ">
                        <div class="card shadow">
                            <div class="card-header px-3">
                                <h4 class="card-title text-center" style="font-size:28px; font-weight:bolder"
                                    id="from-actions"><i class="fa fa-key"></i> Admin Change Password</h4>
                            </div>
                            <br>
                            <div class="card-content  px-4">
                                <?php if(Session::has('message')): ?>
                                    <script>
                                        Swal.fire({
                                            icon: 'success',
                                            title: "<?php echo Session::get('message'); ?>",
                                            text: 'Great Job!',
                                        });
                                    </script>
                                <?php endif; ?>

                                <form method="post" wire:submit.prevent="updatePassword">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="current_password">Current Password</label>
                                        <input type="password" class="form-control" id="current_password"
                                            placeholder="Curent Password" name="current_password" required
                                            wire:model="current_password">
                                    </div>

                                    <div class="form-group ">
                                        <label for="new_password">New Password</label>
                                        <input type="password" class="form-control" id="new_password"
                                            placeholder="New Password" wire:model="new_password" name="new_password"
                                            required>
                                    </div>
                                    <div class="form-group ">
                                        <label for="confirm_password"> Confirm Password</label>
                                        <input type="password" class="form-control" id="confirm_password"
                                            placeholder=" Confirm Password" name="confirm_password" required
                                            wire:model="confirm_password">
                                    </div>

                                    <div class=" mx-auto">
                                        <button type="submit" class="btn-hover color-hover  mx-auto">Submit </button>
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

</div>
</div>

</div>
<?php /**PATH C:\Users\Shah\Videos\master\testing\Total_Services\resources\views/livewire/admin/admin-change-password-component.blade.php ENDPATH**/ ?>