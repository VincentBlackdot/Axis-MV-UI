
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--H  EADER  -->
@include('layouts.master')
<body>
<!-- TOPBAR -->
@include('layouts.topbar')
<!-- SIDEBAR -->
@include('layouts.sidebar')
<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <br>

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title"><i fa fa-fw fa-connectdevelop></i>Users</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
{{--                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>--}}
{{--                                    <li class="breadcrumb-item active" aria-current="page">Multi-Vendor System</li>--}}

                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>


                    <!-- ============================================================== -->

                    <!-- Users Table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Users</h5>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                        <tr class="border-0">
                                            <th class="border-0">No</th>
                                            <th class="border-0">Name</th>
                                            <th class="border-0">Email</th>
                                            <th class="border-0">Status</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>

                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><span class="badge-dot badge-brand mr-1"></span> </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ============================================================== -->
                    <!--End  Users -->



                </div>
            </div>
        </div>

    </div>
    @include('layouts.footer')
</div>
</div>


</body>

</html>