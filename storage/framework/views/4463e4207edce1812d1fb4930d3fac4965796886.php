<div>
    <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->

    <?php echo $__env->make('../../layouts/admin/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <section id="extended">
                    <div class="row justify-content-md-center ">
                        <div class="col-md-12  ">
                            <div class="card shadow-lg">
                                <div class="card-header py-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class=" ">
                                            <h4 class="font-weight-bolder text-info">All User Queries</h4>
                                        </div>
                                        <div class="">

                                        </div>
                                    </div>
                                </div>

                                <div class="card-content">
                                    <div class="table-responsive">
                                        <table class="table text-center  table-striped table-hover shadow">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Message</th>
                                                    <th>Received</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if($contacts != null): ?>

                                                    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><span
                                                                    class="badge badge-success ">#QU0<?php echo e($contact->id); ?></span>
                                                            </td>
                                                            <td><?php echo e($contact->name); ?></td>
                                                            <td><?php echo e($contact->email); ?></td>
                                                            <td><?php echo e($contact->phone); ?></td>
                                                            <td><?php echo e($contact->message); ?></td>
                                                            <td><?php echo e($contact->created_at); ?></td>
                                                            <td> <a type="button" title="Delete" class=""
                                                                    wire:click="deleteConfirm(<?php echo e($contact->id); ?>)"><i
                                                                        class="ft-trash-2 fa-2x mr-2  text-danger"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php else: ?>
                                                    <td colspan="6" class="text-center">
                                                        <h4 class="text-danger font-weight-bolder">No Query Found</h4>
                                                    </td>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                        <?php echo e($contacts->links('pagination.custom')); ?>

                                        <div class="Export-btn">
                                            <a href="<?php echo e(route('admin.export_contacts')); ?>"
                                                class="btn btn-success pull-left ml-3">Export Data <i
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

    <style>
        .w-5 {
            display: none;
        }

    </style>
</div>
<script>
    window.addEventListener('Swal.fire:confirm', event => {
        Swal.fire({
            title: event.detail.title,
            text: event.detail.text,
            icon: event.detail.type,
            buttons: true,
            dangerMode: true,
            showCancelButton: event.detail.showCancelButton,
            confirmButtonColor: event.detail.confirmButtonColor,
            cancelButtonColor: event.detail.cancelButtonColor,
            confirmButtonText: event.detail.confirmButtonText,
        }).then((willDelete) => {
            if (willDelete) {

                window.livewire.emit('delete', event.detail.id);

            }
        });
    });
</script>
<?php /**PATH C:\Users\Shah\Videos\master\testing\Total_Services\resources\views/livewire/admin/admin-contact-component.blade.php ENDPATH**/ ?>