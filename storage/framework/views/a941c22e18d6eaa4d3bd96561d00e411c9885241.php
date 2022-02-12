<div>
    <?php echo $__env->make('../layouts/customer/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style>
        th {
            vertical-align: top;
        }

        .dynamic-cards {
            transition: all 0.3s ease-in-out;
        }

        .dynamic-cards:hover {
            transform: translate3d(0, -10px, 0);
        }

    </style>
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-11 mx-auto ">
                        <div class="card gradient-blackberry shadow dynamic-cards">
                            <div class="card-content">
                                <div class="card-body pt-2 pb-2">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <h3 class="font-large-2 mb-0"><b><?php echo e($totalServices); ?></b></h3>
                                            <span class="font-medium-4"><b>Total Booked Services</b></span>
                                        </div>
                                        <div class="media-right white text-right">
                                            <i class="fa ft-briefcase  fa-4x"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="Widget-line-chart"
                                    class="height-80 WidgetlineChart WidgetlineChartshadow mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-11 mx-auto h-50 ">
                        <div class="card gradient-ibiza-sunset  shadow dynamic-cards">
                            <div class="card-content">
                                <div class="card-body pt-2 pb-2">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <h3 class="font-large-2 mb-0"><b>₹<?php echo e($totalCost); ?></b></h3>
                                            <span class="font-medium-4"><b>Total Services Cost</b></span>
                                        </div>
                                        <div class="media-right white text-right">
                                            <i class="icon-wallet fa-4x"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="Widget-line-chart1"
                                    class="height-80 WidgetlineChart WidgetlineChartshadow mb-2">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <div class="row match-height justify-content-md-center">
                    <div class="col-xl-12 col-lg-8 col-md-8 col-sm-12">
                        <div class="card shadow ">
                            <div class="card-header pb-2">
                                <h4 class="card-title text-info"
                                    style="text-align:center;font-weight:500; font-size:1.7rem;">
                                    <i class="ft-shopping-cart fa-1x"> </i> Booking History
                                </h4>
                            </div>
                            <div class="card-content">
                                <table class="table table-responsive-sm text-center table-striped table-hover shadow ">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Service Name</th>
                                            <th>Order Id</th>
                                            <th>Service Provider</th>
                                            <th>Amount</th>
                                            <th>Booking Data</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                     
                                            <?php $__currentLoopData = $paytms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paytm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($paytm->user_id === Auth::user()->id): ?>
                                                    <tr>
                                                        <td><span
                                                                class="badge badge-success mt-2 ">#BH0<?php echo e($paytm->id); ?></span>
                                                        </td>
            
                                                        <td><?php echo e($paytm->slug_name); ?></td>
                                                        <td><?php echo e($paytm->order_id); ?></td>
                                                        <td><?php echo e($paytm->sprovider_name); ?></td>
                                                        <td><?php echo e($paytm->price); ?></td>
                                                        <td><?php echo e($paytm->created_at); ?></td>
                                                        <td>
                                                            <a href="#"
                                                                onclick="confirm('Are you sure, you want to delete this booking histroy!')||event.stopImmediatePropagation()"
                                                                wire:click.prevent="deleteService(<?php echo e($paytm->id); ?>)">
                                                                <i class="ft-trash-2 text-danger font-medium-3"></i>
                                                            </a>
                                                            <a href="#"
                                                                onclick="confirm('Are you sure, you want to cancel this service')||event.stopImmediatePropagation()"
                                                                wire:click.prevent="deleteService(<?php echo e($paytm->id); ?>)">
                                                                <i class="
                                                                ft-x text-seconuday font-medium-3"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php endif; ?>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <?php echo e($paytms->links('pagination.custom')); ?>

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
<?php /**PATH C:\Users\cws\Documents\Master Laravel Project\Total-Services\resources\views/livewire/customer/customer-dashboard-component.blade.php ENDPATH**/ ?>