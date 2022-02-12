<div>
    <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
    <?php echo $__env->make('../../layouts/admin/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <section id="extended">
                    <div class="row justify-content-md-center">
                        <div class="col-md-11 ">
                            <div class="card shadow ">
                                <div class="card-header py-3 ">
                                    <div class="d-flex align-items-center justify-content-between ">
                                        <div class=" ">
                                            <h4 class="font-weight-bolder text-info">All Service Categories</h4>
                                        </div>
                                        <div class="marge">
                                            <a href="<?php echo e(route('admin.add_service_categories')); ?>"
                                                class="btn-hover color-hover mx-3 my-3"> <i
                                                    class="fa fa-plus-circle"></i> Add New</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-content">
                                    <?php if(Session::has('message')): ?>
                                        <script>
                                            Swal.fire({
                                                icon: 'success',
                                                title: "<?php echo Session::get('message'); ?>",
                                                text: 'Great Job!',
                                            });
                                        </script>
                                    <?php endif; ?>

                                    <table class="table text-center table-striped table-hover shadow">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Slug</th>
                                                <th>Featured</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $scategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><span
                                                            class="badge badge-success mt-3">#SC0<?php echo e($scategory->id); ?></span>
                                                    </td>
                                                    <td><img class="rounded-circle img-border"
                                                            src="<?php echo e(asset('images/services-categories')); ?>/<?php echo e($scategory->image); ?>"
                                                            width="80" height="80" alt=""></td>
                                                    <td><?php echo e($scategory->name); ?></td>
                                                    <td><?php echo e($scategory->slug); ?></td>
                                                    <td>
                                                        <?php if($scategory->featured): ?>
                                                            Yes
                                                        <?php else: ?>
                                                            No
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo e(route('admin.services_by_category', ['category_slug' => $scategory->slug])); ?>"
                                                            style="margin-left:15px"><i
                                                                class="fa fa-list-alt text-warning  fa-2x mr-2 text-light"></i></a>

                                                        <a
                                                            href="<?php echo e(route('admin.edit_service_categories', ['category_id' => $scategory->id])); ?>"><i
                                                                class="fa fa-pencil-square-o text-info fa-2x   mr-2"></i></a>
                                                        <a type="button" title="Delete" class=""
                                                            wire:click="deleteConfirm(<?php echo e($scategory->id); ?>)"><i
                                                                class="ft-trash-2 fa-2x mr-2  text-danger"></i></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>

                                    <div class="Export-btn ml-2">
                                        <?php echo e($scategories->links('pagination.custom')); ?>

                                        <a href="<?php echo e(route('admin.export_service_categories')); ?>"
                                            class="btn btn-success pull-left ml-2">Export Data <i
                                                class="fa fa-file-excel-o" aria-hidden="true"></i></a>
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
            showCancelButton: event.detail.showCancelButton,
            confirmButtonColor: event.detail.confirmButtonColor,
            cancelButtonColor: event.detail.cancelButtonColor,
            // reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                // swalWithBootstrapButtons.fire(
                //     'Deleted!',
                //     'Your file has been deleted.',
                //     'success'
                // )
                window.livewire.emit('delete', event.detail.id)
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                Swal.fire(
                    'Cancelled',
                    'Your imaginary file is safe ',
                    'error'
                );
            }
        })
    });
</script>
<?php /**PATH C:\Users\Shah\Videos\master\testing\Total_Services\resources\views/livewire/admin/admin-service-category-component.blade.php ENDPATH**/ ?>