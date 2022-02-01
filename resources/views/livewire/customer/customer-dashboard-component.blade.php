<div>
    @include('../layouts/customer/header')
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
                                            <h3 class="font-large-2 mb-0"><b>{{ $totalServices }}</b></h3>
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
                                            <h3 class="font-large-2 mb-0"><b>₹{{ $totalCost }}</b></h3>
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

                                     
                                            @foreach ($paytms as $paytm)
                                                @if ($paytm->user_id === Auth::user()->id)
                                                    <tr>
                                                        <td><span
                                                                class="badge badge-success mt-2 ">#BH0{{ $paytm->id }}</span>
                                                        </td>
            
                                                        <td>{{ $paytm->slug_name }}</td>
                                                        <td>{{ $paytm->order_id }}</td>
                                                        <td>{{ $paytm->sprovider_name }}</td>
                                                        <td>{{ $paytm->price }}</td>
                                                        <td>{{ $paytm->created_at }}</td>
                                                        <td>
                                                            <a href="#"
                                                                onclick="confirm('Are you sure, you want to delete this booking histroy!')||event.stopImmediatePropagation()"
                                                                wire:click.prevent="deleteService({{ $paytm->id }})">
                                                                <i class="ft-trash-2 text-danger font-medium-3"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endif

                                            @endforeach
                                    </tbody>
                                </table>
                                {{$paytms->links('pagination.custom') }}
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
