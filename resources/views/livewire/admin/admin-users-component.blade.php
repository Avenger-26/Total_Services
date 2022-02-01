<style>
    /* table td{
        line-height:80px;
    } */

</style>

<div>
    <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
    @include('../../layouts/admin/header')
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

                                        @if (Session::has('message'))
                                            <div class="alert alert-primary alert-dismissible mb-2" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>{{ Session::get('message') }}</strong>
                                            </div>

                                    </div>
                                    @endif
                                    <table class="table text-center table-responsive table-striped table-hover shadow ">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Location</th>
                                                {{-- <th>Action</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td><span
                                                            class="badge badge-success mt-3">#U0{{ $user->id }}</span>
                                                    </td>
                                                    <td>
                                                        @if ($user->image)
                                                            <img src="{{ asset('images/customer') }}/{{ $user->image }}"
                                                                alt="" width="100" height="100"
                                                                class="rounded-circle img-border gradient-summer">
                                                        @else
                                                            <img src="{{ asset('images/sproviders/default.png') }}"
                                                                alt=""
                                                                class="rounded-circle img-border gradient-summer width-100">
                                                        @endif
                                                    </td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->phone }}</td>

                                                    <td>{{ $user->address }}</td>
                                                    {{-- <td>


                                                                <a href="#"
                                                                    onclick="confirm('Are you sure, you want to delete this User!')||event.stopImmediatePropagation()"
                                                                    wire:click.prevent="deleteUser({{ $user->id  }})"
                                                                    style="margin-left:10px"><i
                                                                        class="fa fa-trash  text-danger mt-3 font-medium-5 mr-2"></i></a>
                                                            </td> --}}
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $users->links('pagination.custom') }}
                                    <div class="Export-btn">
                                        <a href="{{ route('admin.export_customer') }}"
                                            class="btn btn-success pull-left ml-1">Export Data</a>
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
