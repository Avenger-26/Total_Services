<div>
    <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
    @include('../../layouts/admin/header')

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
                                            <a href="{{ route('admin.add_service_categories') }}"
                                                class="btn-hover color-hover mx-3 my-3"> <i
                                                    class="fa fa-plus-circle"></i> Add New</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-content">
                                    @if (Session::has('message'))
                                        <script>
                                            Swal.fire({
                                                icon: 'success',
                                                title: "{!! Session::get('message') !!}",
                                                text: 'Great Job!',
                                            });
                                        </script>
                                    @endif
                                    
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
                                            @foreach ($scategories as $scategory)
                                                <tr>
                                                    <td><span
                                                            class="badge badge-success mt-3">#SC0{{ $scategory->id }}</span>
                                                    </td>
                                                    <td><img class="rounded-circle img-border"
                                                            src="{{ asset('images/services-categories') }}/{{ $scategory->image }}"
                                                            width="80" height="80" alt=""></td>
                                                    <td>{{ $scategory->name }}</td>
                                                    <td>{{ $scategory->slug }}</td>
                                                    <td>
                                                        @if ($scategory->featured)
                                                            Yes
                                                        @else
                                                            No
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.services_by_category', ['category_slug' => $scategory->slug]) }}"
                                                            style="margin-left:15px"><i
                                                                class="fa fa-list-alt text-warning  fa-2x mr-2 text-light"></i></a>

                                                        <a
                                                            href="{{ route('admin.edit_service_categories', ['category_id' => $scategory->id]) }}"><i
                                                                class="fa fa-pencil-square-o text-info fa-2x   mr-2"></i></a>
                                                        <a type="button" title="Delete" class=""
                                                            wire:click="deleteConfirm({{ $scategory->id }})"><i
                                                                class="ft-trash-2 fa-2x mr-2  text-danger"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $scategories->links('pagination.custom') }}
                                    <div class="Export-btn">
                                        <a href="{{ route('admin.export_service_categories') }}"
                                            class="btn btn-success pull-left ml-2">Export Data</a>
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

<!-- BEGIN : Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix text-muted text-sm-center px-2"><span>Copyright &copy; 2021 <a
                href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" id="pixinventLink" target="_blank"
                class="text-bold-800 primary darken-2">Team 26 </a>, All rights
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
