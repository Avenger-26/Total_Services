<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            <?php echo $chartData; ?>
        ]);
        var options = {
            is3D: true,
            pieHole: 0.4,
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
</script>
<div>
    <?php echo $__env->make('../../layouts/admin/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <!--Statistics cards Starts-->
                <div class="row">
                    <div class="col-md-6 col-sm-11 h-100">
                        <div class="card gradient-blackberry dynamic-cards shadow">
                            <div class="card-content">
                                <div class="card-body pt-2 pb-0">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <h3 class="font-large-1 mb-0"><?php echo e($totalServiceProvider); ?></h3>
                                            <span>Total Service Providers</span>
                                        </div>
                                        <div class="media-right white text-right">
                                            <i class="fa fa-users fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="Widget-line-chart"
                                    class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-11 h-100">
                        <div class="card gradient-ibiza-sunset dynamic-cards shadow"
                            wire:click="location.href='/admin/service-provider'">
                            <div class="card-content">
                                <div class="card-body pt-2 pb-0">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <h3 class="font-large-1 mb-0"><?php echo e($totalUser); ?></h3>
                                            <span>Total Users</span>
                                        </div>
                                        <div class="media-right white text-right">
                                            <i class="fa fa-user text-shadow fa-3x"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="Widget-line-chart1"
                                    class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-11 h-100">
                        <div class="card gradient-green-tea shadow dynamic-cards">
                            <div class="card-content">
                                <div class="card-body pt-2 pb-0">
                                    <div class="media">

                                        <div class="media-body white text-left">
                                            <h3 class="font-large-1 mb-0"><?php echo e($totalServiceCategories); ?></h3>
                                            <span class="font-small-3">Total Service Categories</span>
                                        </div>
                                        <div class="media-right white text-right">
                                            <i class="fa ft-briefcase shadow  fa-2x"></i>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div id="Widget-line-chart2"
                                    class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-11 h-100">
                        <div class="card gradient-pomegranate shadow dynamic-cards">
                            <div class="card-content">
                                <div class="card-body pt-2 pb-0">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <h3 class="font-large-1 mb-0">₹<?php echo e($total); ?></h3>
                                            <span>Total Earning</span>
                                        </div>
                                        <div class="media-right white text-right">
                                            <i class="icon-wallet font-large-1"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="Widget-line-chart3"
                                    class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 col-sm-11 h-100">
                        <div class="card shadow w-100">
                            <div class="card-header">
                                <h4 class="card-title text-center text-info">Total Users and Service Providers </h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div id="piechart" style=" height: 400px; "></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-11 h-100">
                        <div class="card shadow">
                            <div class="card-header">
                                <h4 class="card-title text-center text-info">Total Users and Service Providers </h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div id="container"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row ">
                    <div class="col-md-12 col-sm-12">
                        <div class="card shadow">
                            <div class="card-header py-3">
                                <div class="row">
                                    <div class="col-md-6 ">
                                        <h4 class="text-info font-weight-bold ">All User List</h4>
                                    </div>

                                </div>
                            </div>

                            <div class="card-content">
                                <div class="table-responsive">

                                    <?php if(Session::has('message')): ?>
                                        <script>
                                            Swal.fire({
                                                icon: 'success',
                                                title: "<?php echo Session::get('message'); ?>",
                                                text: 'Great Job!',
                                            });
                                        </script>

                                </div>
                                <?php endif; ?>
                                <table class="table text-center  table-striped table-hover shadow ">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Location</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($users === null): ?>
                                            <tr>
                                                <td colspan="4" class="text-center">
                                                    <h4 class="text-danger font-weight-bolder">No Booking
                                                        History Found</h4>
                                                </td>

                                            <?php else: ?>
                                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                    <?php if($user->image): ?>
                                                        <img src="<?php echo e(asset('images/customer')); ?>/<?php echo e($user->image); ?>"
                                                            alt="" width="100" height="100"
                                                            class="rounded-circle img-border gradient-summer">
                                                    <?php else: ?>
                                                        <img src="<?php echo e(asset('images/sproviders/default.png')); ?>" alt=""
                                                            class="rounded-circle img-border gradient-summer width-100">
                                                    <?php endif; ?>
                                                </td>
                                                <td><?php echo e($user->email); ?></td>
                                                <td><?php echo e($user->phone); ?></td>
                                                <td><?php echo e($user->address); ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                                <?php echo e($users->links('pagination.custom')); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12  col-sm-12 ">
                    <div class="card shadow" style="overflow-x:auto;">
                        <div class="card-header py-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class=" ">
                                    <h4 class="font-weight-bolder text-info">All User Queries</h4>
                                </div>
                                <div class="">

                                </div>
                            </div>
                            <div class="card-content">
                                <div class="">
                                    <table class="table text-center table-striped table-hover shadow">
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
                                        </tbody>
                                    </table>
                                    <div class="Export-btn">
                                        <a href="<?php echo e(route('admin.export_contacts')); ?>"
                                            class="btn btn-success pull-right mx-3">Export Data <i
                                                class="fa fa-file-excel-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12 col-sm-12">
                    <div class="card shadow" style="overflow-x:auto;">
                        <div class="card-header py-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class=" ">
                                    <h4 class="font-weight-bolder text-info">All Service Providers</h4>
                                </div>

                            </div>
                        </div>
                        <div class="card-content ">
                            <div class="">
                                <?php if(Session::has('message')): ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo e(Session::get('message')); ?>

                                    </div>
                                <?php endif; ?>
                                <table class="table text-center table-striped table-hover  shadow px-3">
                                    <thead>
                                        <tr class="">
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
                                                            alt="" class="rounded-circle img-border gradient-summer "
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
                                                    <a href="#"
                                                        onclick="confirm('Are you sure, you want to delete this service Provider!')||event.stopImmediatePropagation()"
                                                        wire:click.prevent="deleteServiceProvider(<?php echo e($sprovider->id); ?>)"
                                                        style="margin-left:10px"><i
                                                            class="fa fa-trash fa fa-trash  text-danger  fa-2x   mr-2"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>

                                <div class="Export-btn">
                                    <a href="<?php echo e(route('admin.export_service_provider')); ?>"
                                        class="btn btn-success pull-right mx-3">Export Data <i
                                            class="fa fa-file-excel-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- END : End Main Content-->
</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    var users = <?php echo json_encode($new_users); ?>;
    Highcharts.chart('container', {
        title: {
            text: 'New Users Growth - 2022'
        },
        subtitle: {
            text: ' TotalService.in'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Number of Users'
            }
        },
        legend: {
            layout: 'horizontal',
            align: 'center',
            verticalAlign: 'bottom'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'New Users',
            data: users
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 300
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
</script>
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
<?php /**PATH C:\Users\Shah\Videos\master\testing\Total_Services\resources\views/livewire/admin/admin-dashboard-component.blade.php ENDPATH**/ ?>