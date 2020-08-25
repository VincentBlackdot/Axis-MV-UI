<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--H  EADER  -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <title>Message Details</title>
</head>

@include('layouts.master')
<body>
<!-- TOPBAR -->
@include('layouts.topbar')
<!-- SIDEBAR -->
@include('layouts.sidebar')


<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="container-fluid">
        
            <aside class="page-aside">
                <div class="aside-content">
                    <div class="aside-header">
                        <button class="navbar-toggle" data-target=".aside-nav" data-toggle="collapse" type="button"><span class="icon"><i class="fas fa-caret-down"></i></span></button><span class="title">Mail Service</span>
                        <p class="description">Service description</p>
                    </div>
                    <div class="aside-nav collapse">
                        <ul class="nav">
                            <li><a href="#"><span class="icon"><i class="fas fa-fw fa-inbox"></i></span>Inbox<span class="badge badge-primary float-right">8</span></a></li>
                            <li class="active"><a href="#"><span class="icon"><i class="fas fa-fw  fa-envelope"></i></span>Sent Mail</a></li>
                            <li><a href="#"><span class="icon"><i class="fas fa-fw fa-briefcase"></i></span>Important<span class="badge badge-secondary float-right">4</span></a></li>
                            <li><a href="#"><span class="icon"><i class="fas fa-fw fa-file"></i></span>Drafts</a></li>
                            <li><a href="#"><span class="icon"><i class="fas fa-fw fa-star"></i></span>Tags</a></li>
                            <li><a href="#"><span class="icon"><i class="fas fa-fw fa-trash"></i></span>Trash</a></li>
                        </ul><span class="title">Labels</span>
                         <ul class="nav nav-pills nav-stacked">
                            <li><a href="#"><i class="m-r-10 mdi mdi-label text-secondary"></i>
                            Important </a></li>
                            <li><a href="#">
                           <i class="m-r-10 mdi mdi-label text-primary"></i> Business   </a></li>
                            <li><a href="#"> <i class="m-r-10 mdi mdi-label text-brand"></i>
                           Inspiration </a></li>
                        </ul>
                        <div class="aside-compose"><a class="btn btn-lg btn-primary btn-block" href="#">Compose Email</a></div>
                    </div>
                </div>
            </aside>
            <div class="main-content container-fluid p-0">
                <div class="email-head">
                    <div class="email-head-subject">
                        <div class="title"><a class="active" href="#"><span class="icon"><i class="fas fa-star"></i></span></a> <span>Development Files</span>
                            <div class="icons"><a href="#" class="icon"><i class="fas fa-reply"></i></a><a href="#" class="icon"><i class="fas fa-print"></i></a><a href="#" class="icon"><i class="fas fa-trash"></i></a></div>
                        </div>
                    </div>
                    <div class="email-head-sender">
                        <div class="date">August 23, 3:37</div>
                        <div class="avatar"><img src="../assets/images/avatar-2.jpg" alt="Avatar" class="rounded-circle user-avatar-md"></div>
                        <div class="sender"><a href="#">Justine Myranda</a> to <a href="#">me</a>
                            <div class="actions"><a class="icon toggle-dropdown" href="#" data-toggle="dropdown"><i class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" href="#">Mark as read</a><a class="dropdown-item" href="#">Mark as unread</a><a class="dropdown-item" href="#">Spam</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="email-body">
                    <p>Hello,</p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    <p>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.</p>
                    <p><strong>Regards</strong>,
                        <br> Justine Myranda</p>
                </div>
                <div class="border-bottom border-left border-right bg-white mg-tb-15">
                    <p class="m-b-md">
                        <span><i class="fa fa-paperclip"></i> 3 attachments - </span>
                        <a href="#" class="btn btn-default btn-xs">Download all in zip format <i class="fa fa-file-zip-o"></i> </a>
                    </p>

                    <div>
                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="hpanel">
                                    <div class="panel-body file-body incon-ctn-view">
                                        <i class="fa fa-file-pdf-o text-info"></i>
                                    </div>
                                    <div class="panel-footer">
                                        <a href="#">Document_2016.doc</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="hpanel">
                                    <div class="panel-body file-body incon-ctn-view">
                                        <i class="fa fa-file-audio-o text-warning"></i>
                                    </div>
                                    <div class="panel-footer">
                                        <a href="#">Audio_2016.doc</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="hpanel">
                                    <div class="panel-body file-body incon-ctn-view">
                                        <i class="fa fa-file-excel-o text-success"></i>
                                    </div>
                                    <div class="panel-footer">
                                        <a href="#">Sheets_2016.doc</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="panel-footer text-right">
                    <div class="btn-group">
                        <button class="btn btn-default"><i class="fa fa-reply"></i> Reply</button>
                        <button class="btn btn-default"><i class="fa fa-arrow-right"></i> Forward</button>
                        <button class="btn btn-default"><i class="fa fa-print"></i> Print</button>
                        <button class="btn btn-default"><i class="fa fa-trash-o"></i> Remove</button>
                    </div>
                </div>
                <div class="email-attachments">
                    <div class="title">Attachments <span>(2 files, 16,24 KB)</span></div>
                    <ul>
                        <li><a href="#"><span class="icon mdi mdi-attachment-alt"></span> new-release.zip <span>(5.12 KB)</span></a></li>
                        <li><a href="#"><span class="icon mdi mdi-attachment-alt"></span> guidelines.pdf <span>(11.3 MB)</span></a></li>
                    </ul>
                </div>
            </div>
        
    </div>
</div>
 <!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="text-md-right footer-links d-none d-sm-block">
                    <a href="javascript: void(0);">About</a>
                    <a href="javascript: void(0);">Support</a>
                    <a href="javascript: void(0);">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end footer -->
<!-- ============================================================== -->


<!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>



</html>