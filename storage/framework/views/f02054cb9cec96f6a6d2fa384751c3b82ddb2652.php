<div>
    <?php echo $__env->make('../layouts/sprovider/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <section id="extended">
                    <div class="row justify-content-md-center">
                        <div class="col-md-11 col-sm-11 mx-auto ">
                            <div class="card shadow">
                                <div class="card-header py-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class=" ">
                                            <h4 class="font-weight-bolder text-info">All Service</h4>
                                        </div>
                                        <div class="marge">
                                            <a href="<?php echo e(route('sprovider.add_service')); ?>"
                                                class="btn-hover color-hover">
                                                <i class="fa fa-plus-circle "></i>Add New</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-content">
                                    <div class=" table-responsive">

                                        <?php if(Session::has('message')): ?>
                                            <script>
                                                Swal.fire({
                                                    icon: 'success',
                                                    title: "<?php echo Session::get('message'); ?>",
                                                    text: 'Great Job!',
                                                });
                                            </script>
                                        <?php endif; ?>
                                        <table class="table text-center table-striped table-hover shadow ">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Price</th>
                                                    <th>Status</th>
                                                    <th>Featured</th>
                                                    <th>Category</th>
                                                    <th>Created At</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(!$services == null): ?>
                                                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><span
                                                                    class="badge badge-info mt-2">#SER0<?php echo e($service->id); ?></span>
                                                            </td>
                                                            <td><img src="<?php echo e(asset('images/services/thumbnails')); ?>/<?php echo e($service->thumbnail); ?>"
                                                                    width="80" alt=""></td>
                                                            <td><?php echo e($service->name); ?></td>
                                                            <td><?php echo e($service->price); ?></td>
                                                            <td>
                                                                <?php if($service->status): ?>
                                                                    <span class="badge badge-success">Active</span>
                                                                <?php else: ?>
                                                                    Inactive
                                                                <?php endif; ?>
                                                            </td>
                                                            <td>
                                                                <?php if($service->featured): ?>
                                                                    Yes
                                                                <?php else: ?>
                                                                    No
                                                                <?php endif; ?>
                                                            </td>
                                                            <td><?php echo e($service->category->name); ?></td>
                                                            <td><?php echo e($service->created_at); ?></td>
                                                            <td>
                                                                <a title="Edit"
                                                                    href="<?php echo e(route('sprovider.edit_service', ['service_slug' => $service->slug])); ?>"><i
                                                                        class="ft-edit fa-2x mr-2   text-info"></i></a>

                                                                <a type="button" title="Delete" class=""
                                                                    wire:click="deleteConfirm(<?php echo e($service->id); ?>)"><i
                                                                        class="ft-trash-2 fa-2x mr-2  text-danger"></i></a>

                                                            </td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php else: ?>
                                                    <tr>
                                                        <td colspan="7" class="text-center">
                                                            <h4 class="text-danger font-weight-bolder">No Booking
                                                                History Found</h4>
                                                    </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>

                                        </tbody>
                                        </table>

                                        <div class="Export-btn ml-2">
                                            <?php echo e($services->links('pagination.custom')); ?>

                                            <a href="<?php echo e(route('sprovicer.export_all_services')); ?>"
                                                class="btn btn-success pull-left ml-2">Export Data
                                                <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                                            </a>
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
<?php /**PATH C:\Users\Shah\Videos\master\testing\Total_Services\resources\views/livewire/sprovider/sprovider-services-component.blade.php ENDPATH**/ ?>