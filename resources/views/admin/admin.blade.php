
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
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title"><i fa fa-fw fa-connectdevelop></i>Admin</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Multi-Vendor System</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->
                <div class="ecommerce-widget">

<!--                    <div class="row">-->
<!--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">-->
<!--                            <div class="card">-->
<!--                                <div class="card-body">-->
<!--                                    <h5 class="text-muted">Total Revenue</h5>-->
<!--                                    <div class="metric-value d-inline-block">-->
<!--                                        <h1 class="mb-1">$12099</h1>-->
<!--                                    </div>-->
<!--                                    <div class="metric-label d-inline-block float-right text-success font-weight-bold">-->
<!--                                        <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div id="sparkline-revenue"></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">-->
<!--                            <div class="card">-->
<!--                                <div class="card-body">-->
<!--                                    <h5 class="text-muted">Affiliate Revenue</h5>-->
<!--                                    <div class="metric-value d-inline-block">-->
<!--                                        <h1 class="mb-1">$12099</h1>-->
<!--                                    </div>-->
<!--                                    <div class="metric-label d-inline-block float-right text-success font-weight-bold">-->
<!--                                        <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div id="sparkline-revenue2"></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">-->
<!--                            <div class="card">-->
<!--                                <div class="card-body">-->
<!--                                    <h5 class="text-muted">Refunds</h5>-->
<!--                                    <div class="metric-value d-inline-block">-->
<!--                                        <h1 class="mb-1">0.00</h1>-->
<!--                                    </div>-->
<!--                                    <div class="metric-label d-inline-block float-right text-primary font-weight-bold">-->
<!--                                        <span>N/A</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div id="sparkline-revenue3"></div>-->
<!--                            </div>-->
<!--<                       </div>-->
<!--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">-->
<!--                            <div class="card">-->
<!--                                <div class="card-body">-->
<!--                                    <h5 class="text-muted">Avg. Revenue Per User</h5>-->
<!--                                    <div class="metric-value d-inline-block">-->
<!--                                        <h1 class="mb-1">$28000</h1>-->
<!--                                    </div>-->
<!--                                    <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">-->
<!--                                        <span>-2.00%</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div id="sparkline-revenue4"></div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                <!-- ============================================================== -->

                <!-- ============================================================== -->

                <!-- Cards   -->
                <!-- ============================================================== -->
                <div class="row">

                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-header bg-primary text-center p-3 ">
                                        <h4 class="mb-0 text-white"> Total Users</h4>
                                    </div>
                                    <div class="card-body text-center">
                                        <h1 class="mb-1">150</h1>
                                        <p>Users Signed Up</p>
                                    </div>
                                    <div class="card-body border-top">

                                        <a href="#" class="btn btn-outline-secondary btn-block btn-lg">View Users</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-header bg-info text-center p-3">
                                        <h4 class="mb-0 text-white"> Vendors</h4>
                                    </div>
                                    <div class="card-body text-center">
                                        <h1 class="mb-1">350</h1>
                                        <p>Vendors Signed Up</p>
                                    </div>
                                    <div class="card-body border-top">

                                        <a href="#" class="btn btn-secondary btn-block btn-lg">View Vendors</a>
                                    </div>
                                </div>
                             </div>
                                <div class="row">
                                    <!-- ============================================================== -->

                                    <!-- ============================================================== -->

                                    <!-- Admin Table  -->
                                    <!-- ============================================================== -->
                                    <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                                        <div class="card">
                                            <h5 class="card-header">Admins</h5>

                                            <div class="card-body p-0">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="bg-light">
                                                        <tr class="border-0">
                                                            <th class="border-0">No</th>
                                                            <th class="border-0">Name</th>
                                                            <th class="border-0">Email</th>


                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>

                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
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
                                                            @foreach ($users as $users)
                                                            <td>{{$users->id}}</td>
                                                            <td>{{ $users->name }}</td>
                                                            <td>{{ $users->email }}</td>
                                                             <td><span class="badge-dot badge-brand mr-1"></span> </td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                        <!-- ============================================================== -->
                                    <!-- Users -->

                                    <!-- ============================================================== -->

                                    <!-- ==================pr============================================ -->
                                    <!--=========MODEL ADD product ==========-->
            {{--                        <div id="addProduct" class="modal fade">--}}
            {{--                            <div class="modal-dialog" role="document">--}}
            {{--                                <div class="modal-content">--}}
            {{--                                    <div class="modal-header">--}}
            {{--                                        <h1 class="modal-title">Add Product</h1>--}}
            {{--                                    </div>--}}
            {{--                                    <div class="modal-body">--}}
            {{--                                        <form role="form" method="POSTs" action="" enctype="multipart/form-data">--}}
            {{--                                            <input type="hidden" name="_token" value="">--}}
            {{--                                            <div class="form-group">--}}
            {{--                                                <label class="control-label">Name</label>--}}
            {{--                                                <div>--}}
            {{--                                                    <input type="text" class="form-control input-sm" name="name" value="">--}}
            {{--                                                </div>--}}
            {{--                                            </div>--}}
            {{--                                            <div class="form-group">--}}
            {{--                                                <label class="control-label">Quantity</label>--}}
            {{--                                                <div>--}}
            {{--                                                    <input type="number" class="form-control input-sm" name="Quantity" value="">--}}
            {{--                                                </div>--}}
            {{--                                            </div>--}}
            {{--                                            <div class="form-group">--}}
            {{--                                                <label class="control-label">Price</label>--}}
            {{--                                                <div>--}}
            {{--                                                    <input type="number" class="form-control input-sm" name="Price" value="">--}}
            {{--                                                </div>--}}
            {{--                                            </div>--}}
            {{--<!--                                            <div class="form-group">-->--}}
            {{--<!--                                                <label class="control-label">Name</label>-->--}}
            {{--<!--                                                <div>-->--}}
            {{--<!--                                                    <input type="text" class="form-control input-sm" name="name" value="">-->--}}
            {{--<!--                                                </div>-->--}}
            {{--<!--                                            </div>-->--}}
            {{--                                            <!-- THIS SHOULD BE A DROPP DOWN(SEARCBLE AND SUGGESTING)-->--}}
            {{--                                            <div class="form-group">--}}
            {{--                                                <label class="control-label">Vendor</label>--}}
            {{--                                                <div>--}}
            {{--                                                    <input type="text" class="form-control input-sm" name="vendor" value="">--}}
            {{--                                                </div>--}}
            {{--                                            </div>--}}
            {{--                                            <div class="form-group">--}}
            {{--                                               <p><label for="file" style="cursor: pointer;" class="control-label">Image</label></p>--}}
            {{--                                                <div>--}}
            {{--                                                    <input type="file"--}}
            {{--                                                           accept="image/*" id="file" style="display: none"--}}
            {{--                                                           class="form-control input-sm" name="image" value="">--}}
            {{--                                                </div>--}}
            {{--                                            </div>--}}
            {{--                                            <div class="form-group">--}}
            {{--                                                <div>--}}
            {{--                                                    <button type="submit" class="btn btn-success">--}}
            {{--                                                        Add Product--}}
            {{--                                                    </button>--}}
            {{--                                                </div>--}}
            {{--                                            </div>--}}
            {{--                                        </form>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}

                                    <!-- ============================================================== -->
                                    <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                                        <div class="card">
                                            <h5 class="card-header">Vendors</h5>

                                            <div class="card-body p-0">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="bg-light">
                                                        <tr class="border-0">
                                                            <th class="border-0">No</th>
                                                            <th class="border-0">Name</th>
                                                            <th class="border-0">Brand</th>
                                                            <th class="border-0">Email</th>
                                                            <th class="border-0">Status</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>

                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ============================================================== -->
                                         <!-- end recent orders  -->

                    </div>
                    </div>
            </div>

                </div>
        @include('layouts.footer')
            </div>
        </div>


</body>

</html>