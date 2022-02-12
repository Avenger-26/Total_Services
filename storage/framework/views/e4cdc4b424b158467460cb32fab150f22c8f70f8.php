

<div>
    <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
    <?php echo $__env->make('../../layouts/admin/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <section id="extended">
                    <div class="row justify-content-md-center">
                        <div class="col-md-11">
                            <div class="card">
                                <div class="card-header py-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class=" ">
                                            <h4 class="font-weight-bolder text-info">All Service Providers</h4>
                                        </div>
                                        <div class="marge">
                                            <a href="<?php echo e(route('admin.add_service_provider')); ?>"
                                                class="btn-hover color-hover mx-3 my-3"><i
                                                    class="fa fa-plus-circle"></i>Add New</a>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-content table-responsive">
                                    <div class="card-body">
                                        <?php if(Session::has('message')): ?>
                                            <script>
                                                Swal.fire({
                                                    icon: 'success',
                                                    title: "<?php echo Session::get('message'); ?>",
                                                    text: 'Great Job!',
                                                });
                                            </script>
                                        <?php endif; ?>
                                        <table
                                            class="table text-center  table-striped table-hover shadow ">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Profession</th>
                                                    <th>Phone</th>
                                                    <th>Location</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $sproviders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sprovider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><span
                                                                class="badge badge-success mt-3">#SP0<?php echo e($sprovider->id); ?></span>
                                                        </td>
                                                        <td>
                                                            <?php if($sprovider->image): ?>
                                                                <img src="<?php echo e(asset('images/sproviders')); ?>/<?php echo e($sprovider->image); ?>"
                                                                    width="80" height="80" alt=""
                                                                    class="rounded-circle img-border gradient-summer">

                                                            <?php else: ?>
                                                                <img src="<?php echo e(asset('images/sproviders/default.jpg')); ?>"
                                                                    alt=""
                                                                    class="rounded-circle img-border gradient-summer "
                                                                    width="80" height="80" />
                                                            <?php endif; ?>
                                                        </td>
                                                        <td><?php echo e($sprovider->name); ?></td>
                                                        <td>
                                                            <?php if($sprovider->service_category_id): ?>
                                                                <?php echo e($sprovider->category->name); ?>

                                                            <?php endif; ?>

                                                        </td>
                                                        <td><?php echo e($sprovider->phone); ?></td>
                                                        <td><?php echo e($sprovider->address); ?></td>
                                                        <td>

                                                            
                                                            <a type="button" title="Delete" class=""
                                                                wire:click="deleteConfirm(<?php echo e($sprovider->id); ?>)"><i
                                                                    class="ft-trash-2 fa-2x mr-2  text-danger"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>

                                        </table>
                                        <?php echo e($sproviders->links('pagination.custom')); ?>

                                        <div class="Export-btn">
                                            <a href="<?php echo e(route('admin.export_service_provider')); ?>"
                                                class="btn-success btn pull-left ml-2">Export Data</a>
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


    </div>
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
<?php /**PATH C:\Users\cws\Documents\Master Laravel Project\Total-Services\resources\views/livewire/admin/admin-service-provider.blade.php ENDPATH**/ ?>