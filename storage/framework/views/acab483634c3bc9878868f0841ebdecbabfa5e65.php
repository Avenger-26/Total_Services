<div>
    <?php echo $__env->make('../layouts/sprovider/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Navbar (Header) Ends-->
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">

                <section id="extended">
                    <div class="row justify-content-md-center">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header py-3">
                                    <div class=" d-flex align-items-center justify-content-between">
                                        <div class="">
                                            <h4 class="font-weight-bolder text-info">Edit Service</h4>
                                        </div>
                                        <div class="marge">
                                            <a href="<?php echo e(route('sprovider.all_services')); ?>"
                                                class="btn-hover color-hover ">All Services</a>
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

                                            })
                                        </script>
                                    <?php endif; ?>
                                    <div class="px-2">
                                        <form class="form-horizontal" wire:submit.prevent="updateService">
                                            <?php echo csrf_field(); ?>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="name" class=" control-label text-light ">Name: </label>
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
                                                    <label for="name" class=" control-label text-light ">Slug: </label>
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
                                                    <label for="name" class=" control-label text-light ">Tagline:
                                                    </label>
                                                    <input id="tagline" type="text" class="form-control border-primary"
                                                        name="tagline" wire:model="tagline" />
                                                    <?php $__errorArgs = ['tagline'];
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
                                                    <label for="service_category_id"
                                                        class=" control-label text-light ">Service

                                                        Category: </label>
                                                    <select name="service_category_id" id="service_category_id"
                                                        class="form-control border-primary"
                                                        wire:model="service_category_id">
                                                        <option value="">Select Service Category</option>
                                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($category->id); ?>">
                                                                <?php echo e($category->name); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    <?php $__errorArgs = ['service_category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger">
                                                        <?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="name" class=" control-label text-light ">Price: </label>
                                                    <input id="price" type="text" class="form-control border-primary"
                                                        name="price" wire:model="price" />
                                                    <?php $__errorArgs = ['price'];
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
                                                    <label for="name" class=" control-label text-light ">Discount:
                                                    </label>
                                                    <input id="discount" type="text" class="form-control border-primary"
                                                        name="discount" wire:model="discount" />
                                                    <?php $__errorArgs = ['discount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?>

                                                        </p>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="name" class=" control-label text-light ">Discount Type:

                                                    </label>
                                                    <select name="discount_type" id="discount_type"
                                                        class="form-control border-primary" wire:model="discount_type">
                                                        <option value="">Select Service Category</option>
                                                        <option value="fixed">Fixed</option>
                                                        <option value="percent">Percent</option>
                                                    </select>
                                                    <?php $__errorArgs = ['discount_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger">
                                                            <?php echo e($message); ?>

                                                    </p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="name" class=" control-label text-light ">Featured:

                                                    </label>
                                                    <select name="featured" id="featured"
                                                        class="form-control border-primary" wire:model="featured">
                                                        <option value="0">No</option>
                                                        <option value="1">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="name" class=" control-label text-light ">Description:
                                                    </label>
                                                    <textarea name="description" id="description"
                                                        class="form-control border-primary"
                                                        wire:model="description"></textarea>
                                                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?>

                                                        </p>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="name" class=" control-label text-light ">Inclusion:
                                                    </label>
                                                    <textarea name="inclusion" id="inclusion"
                                                        class="form-control border-primary"
                                                        wire:model="inclusion"></textarea>
                                                    <?php $__errorArgs = ['inclusion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?>

                                                        </p>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="name" class=" control-label text-light ">Exclusion:
                                                    </label>
                                                    <textarea name="exclusion" id="exclusion"
                                                        class="form-control border-primary"
                                                        wire:model="exclusion"></textarea>
                                                    <?php $__errorArgs = ['exclusion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?>

                                                        </p>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="thumbnail" class=" control-label text-light ">Thumbnail:

                                                    </label>
                                                    <input id="newthumbnail" type="file"
                                                        class="form-control border-primary" name="thumbnail"
                                                        wire:model="newthumbnail" />
                                                    <?php $__errorArgs = ['newthumbnail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger">
                                                            <?php echo e($message); ?></p>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    <?php if($newthumbnail): ?>
                                                        <img src="<?php echo e($newthumbnail->temporaryUrl()); ?>" alt=""
                                                            width="60">
                                                    <?php else: ?>
                                                        <img src="<?php echo e(asset('images/services/thumbnails')); ?>/<?php echo e($thumbnail); ?>"
                                                            alt="" width="60">
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="image" class=" control-label text-light ">Image:
                                                    </label>
                                                    <input id="newimage" type="file" class="form-control border-primary"
                                                        name="image" wire:model="newimage" />
                                                    <?php $__errorArgs = ['newimage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?>

                                                        </p>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    <?php if($newimage): ?>
                                                        <img src="<?php echo e($newimage->temporaryUrl()); ?>" alt=""
                                                            width="150">
                                                    <?php else: ?>
                                                        <img src="<?php echo e(asset('images/services')); ?>/<?php echo e($image); ?>"
                                                            alt="" width="100">
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn-hover color-hover d-flex mx-auto">Update
                                                </button>
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
<?php /**PATH C:\Users\cws\Documents\Master Laravel Project\Total-Services\resources\views/livewire/sprovider/sprovider-edit-services-component.blade.php ENDPATH**/ ?>