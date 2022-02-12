<div>
    <?php echo $__env->make('../../layouts/admin/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <section id="extended">
                    <div class="row justify-content-md-center">
                        <div class="col-md-11">
                            <div class="card shadow">
                                <div class="card-header py-3">
                                    <div class="row">
                                        <div class="col-md-6 ">
                                            <h4 class="text-info font-weight-bold ">All User List</h4>
                                        </div>

                                    </div>
                                </div>

                                <div class="card-content">
                                    <div class="">

                                        <?php if(Session::has('message')): ?>
                                            <div class="alert alert-primary alert-dismissible mb-2" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong><?php echo e(Session::get('message')); ?></strong>
                                            </div>

                                    </div>
                                    <?php endif; ?>
                                    <table class="table text-center table-responsive table-striped table-hover shadow ">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Location</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><span
                                                            class="badge badge-success mt-3">#U0<?php echo e($user->id); ?></span>
                                                    </td>
                                                    <td>
                                                        <?php if($user->image): ?>
                                                            <img src="<?php echo e(asset('images/customer')); ?>/<?php echo e($user->image); ?>"
                                                                alt="" width="100" height="100"
                                                                class="rounded-circle img-border gradient-summer">
                                                        <?php else: ?>
                                                            <img src="<?php echo e(asset('images/sproviders/default.png')); ?>"
                                                                alt=""
                                                                class="rounded-circle img-border gradient-summer width-100">
                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?php echo e($user->name); ?></td>
                                                    <td><?php echo e($user->email); ?></td>
                                                    <td><?php echo e($user->phone); ?></td>

                                                    <td><?php echo e($user->address); ?></td>
                                                    
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>

                                    <div class="Export-btn ml-2">
                                        <?php echo e($users->links('pagination.custom')); ?>

                                        <a href="<?php echo e(route('admin.export_customer')); ?>"
                                            class="btn btn-success pull-left ml-1 ">Export Data <i
                                                class="fa fa-file-excel-o" aria-hidden="true"></i></a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>

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
<style>
    .w-5 {
        display: none;
    }

</style>
</div>
<?php /**PATH C:\Users\Shah\Videos\master\testing\Total_Services\resources\views/livewire/admin/admin-users-component.blade.php ENDPATH**/ ?>