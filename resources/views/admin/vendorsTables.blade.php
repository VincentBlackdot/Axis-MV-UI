
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
                        <h2 class="pageheader-title"><i fa fa-fw fa-connectdevelop></i>Vendors</h2>
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
                                            <th class="border-0">Email</th>
                                            <th class="border-0">Phone No</th>
                                            <th class="border-0">Status</th>
                                            <th></th>
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