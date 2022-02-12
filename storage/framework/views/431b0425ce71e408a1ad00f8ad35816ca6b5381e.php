<div>

    <?php echo $__env->make('../../layouts/admin/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">

                <section id="extended">
                    <div class="row justify-content-md-center">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header py-3 ">
                                    <div class="d-flex align-items-center justify-content-between ">
                                        <div class=" ">
                                            <h4 class="font-weight-bolder text-info">Add New Service Category</h4>
                                        </div>
                                        <div class="marge" >
                                            <a href="<?php echo e(route('admin.service_categories')); ?>"
                                                class="btn-hover color-hover ">All Categories</a>
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
                                    <div class="px-2">
                                        <form class=" form form-horizontal" wire:submit.prevent="createNewCategory">
                                            <?php echo csrf_field(); ?>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label for="name" class="label-control ">Category Name:
                                                        </label>

                                                        <input id="name" type="text" class="form-control border-primary"
                                                            name="name" wire:model="name" wire:keyup="generateSlug()" />
                                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?></p>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label for="name" class="label-control ">Category Slug:
                                                        </label>

                                                        <input id="slug" type="text" class="form-control border-primary"
                                                            name="slug" wire:model="slug" />
                                                        <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?></p>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label for="image" class=" label-control ">Category
                                                            Image:
                                                        </label>

                                                        <input id="image" type="file" class=""
                                                            name="image" wire:model="image" />
                                                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?>

                                                            </p>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        <?php if($image): ?>
                                                            <img src="<?php echo e($image->temporaryUrl()); ?>" alt="" width="60">
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn-hover color-hover mx-auto d-flex">Add
                                                Category</button>
                                        </form>
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

</div>
<?php /**PATH C:\Users\Shah\Videos\master\testing\Total_Services\resources\views/livewire/admin/admin-add-service-category-component.blade.php ENDPATH**/ ?>