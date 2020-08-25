<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>File Manager| Nalika - Material Admin Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
            ============================================ -->
            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('css/CSS/img/favicon.ico')}}">
            <!-- Google Fonts
            ============================================ -->
            <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
            <!-- Bootstrap CSS
            ============================================ -->
            <link rel="stylesheet" href="{{ asset('css/CSS/css/bootstrap.min.css')}}">
            <!-- Bootstrap CSS
            ============================================ -->
            <link rel="stylesheet" href="{{ asset('css/CSS/css/font-awesome.min.css')}}">
             <!-- style CSS
            ============================================ -->
            <link rel="stylesheet" href="{{ asset('css/CSS/style.css')}}">
    </head>


<!--H  EADER  -->

@include('layouts.master')
<body>
<!-- TOPBAR -->
@include('layouts.topbar')
<!-- SIDEBAR -->
@include('layouts.sidebar')


<!-- Start Welcome area -->
            <div class="all-content-wrapper">
                <div class="file-manager-area mg-tb-15">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2 col-md-3 col-sm-3 col-xs-12">
                                <div class="hpanel responsive-mg-b-30">
                                    <div class="panel-body">
                                        <div class="dropdown custonfile">
                                            <a class="dropdown-toggle btn btn-primary btn-block" href="#" data-toggle="dropdown">
                                                        NEW
                                                    </a>
                                            <ul class="dropdown-menu filedropdown m-l">
                                                <li><a href="#"><i class="fa fa-folder-o"></i> Folder</a></li>
                                                <li><a href="#"><i class="fa fa-file"></i> File</a></li>
                                                <li><a href="#"><i class="fa fa-file-excel-o"></i> Sheet</a></li>
                                                <li><a href="#"><i class="fa fa-file-audio-o"></i> Music</a></li>
                                                <li><a href="#"><i class="fa fa-file-movie-o"></i> Movie</a></li>
                                            </ul>
                                        </div>
                                        <ul class="h-list m-t">
                                            <li class="active"><a href="#"><i class="fa fa-folder"></i> Files</a></li>
                                            <li><a href="#"><i class="fa fa-user text-info"></i> Shared with me</a></li>
                                            <li><a href="#"><i class="fa fa-clock-o text-success"></i> Recent</a></li>
                                            <li><a href="#"><i class="fa fa-star text-warning"></i> Starred</a></li>
                                            <li><a href="#"><i class="fa fa-trash text-danger"></i> Trash</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hpanel responsive-mg-b-30">
                                    <div class="panel-body file-manager-usac">
                                        <h3>6 GB used</h3>
                                        <p>It is 65% of all your storage</p>
                                        <div class="progress full m-t-xs">
                                            <div style="width: 65%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" role="progressbar" class=" progress-bar progress-bar-info">
                                                65%
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet of, consectetur adipiscing elit pro.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9 col-md-9 col-sm-9 col-xs-12">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="hpanel mt-b-30">
                                            <div class="panel-body file-body file-cs-ctn">
                                                <i class="fa fa-file-pdf-o text-info"></i>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="#">Document_2016.doc</a>
                                            </div>
                                        </div>
                                        <div class="hpanel mt-b-30">
                                            <div class="panel-body file-body file-cs-ctn">
                                                <i class="fa fa-file-pdf-o text-info"></i>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="#">Document_2016.doc</a>
                                            </div>
                                        </div>
                                        <div class="hpanel mt-b-30">
                                            <div class="panel-body file-body file-cs-ctn">
                                                <i class="fa fa-file-pdf-o text-info"></i>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="#">Document_2016.doc</a>
                                            </div>
                                        </div>
                                        <div class="hpanel mt-b-30">
                                            <div class="panel-body file-body file-cs-ctn">
                                                <i class="fa fa-file-pdf-o text-info"></i>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="#">Document_2016.doc</a>
                                            </div>
                                        </div>
                                        <div class="hpanel mt-b-30">
                                            <div class="panel-body file-body file-cs-ctn">
                                                <i class="fa fa-file-pdf-o text-info"></i>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="#">Document_2016.doc</a>
                                            </div>
                                        </div>
                                        <div class="hpanel mt-b-30">
                                            <div class="panel-body file-body file-cs-ctn">
                                                <i class="fa fa-file-pdf-o text-info"></i>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="#">Document_2016.doc</a>
                                            </div>
                                        </div>
                                        <div class="hpanel">
                                            <div class="panel-body file-body file-cs-ctn">
                                                <i class="fa fa-file-pdf-o text-info"></i>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="#">Document_2016.doc</a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3">
                                        <div class="hpanel mt-b-30">
                                            <div class="panel-body file-body file-cs-ctn">
                                                <i class="fa fa-file-audio-o text-warning"></i>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="#">Audio_2016.doc</a>
                                            </div>
                                        </div>
                                        <div class="hpanel mt-b-30">
                                            <div class="panel-body file-body file-cs-ctn">
                                                <i class="fa fa-file-audio-o text-warning"></i>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="#">Audio_2016.doc</a>
                                            </div>
                                        </div>
                                        <div class="hpanel mt-b-30">
                                            <div class="panel-body file-body file-cs-ctn">
                                                <i class="fa fa-file-audio-o text-warning"></i>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="#">Audio_2016.doc</a>
                                            </div>
                                        </div>
                                        <div class="hpanel mt-b-30">
                                            <div class="panel-body file-body file-cs-ctn">
                                                <i class="fa fa-file-audio-o text-warning"></i>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="#">Audio_2016.doc</a>
                                            </div>
                                        </div>
                                        <div class="hpanel mt-b-30">
                                            <div class="panel-body file-body file-cs-ctn">
                                                <i class="fa fa-file-audio-o text-warning"></i>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="#">Audio_2016.doc</a>
                                            </div>
                                        </div>
                                        <div class="hpanel mt-b-30">
                                            <div class="panel-body file-body file-cs-ctn">
                                                <i class="fa fa-file-audio-o text-warning"></i>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="#">Audio_2016.doc</a>
                                            </div>
                                        </div>
                                        <div class="hpanel">
                                            <div class="panel-body file-body file-cs-ctn">
                                                <i class="fa fa-file-audio-o text-warning"></i>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="#">Audio_2016.doc</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="hpanel mt-b-30">
                                            <div class="panel-body file-body file-cs-ctn">
                                                <i class="fa fa-file-excel-o text-success"></i>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="#">Sheets_2016.doc</a>
                                            </div>
                                        </div>
                                        <div class="hpanel mt-b-30">
                                            <div class="panel-body file-body file-cs-ctn">
                                                <i class="fa fa-file-excel-o text-success"></i>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="#">Sheets_2016.doc</a>
                                            </div>
                                        </div>
                                        <div class="hpanel mt-b-30">
                                            <div class="panel-body file-body file-cs-ctn">
                                                <i class="fa fa-file-excel-o text-success"></i>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="#">Sheets_2016.doc</a>
                                            </div>
                                        </div>
                                        <div class="hpanel mt-b-30">
                                            <div class="panel-body file-body file-cs-ctn">
                                                <i class="fa fa-file-excel-o text-success"></i>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="#">Sheets_2016.doc</a>
                                            </div>
                                        </div>
                                        <div class="hpanel mt-b-30">
                                            <div class="panel-body file-body file-cs-ctn">
                                                <i class="fa fa-file-excel-o text-success"></i>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="#">Sheets_2016.doc</a>
                                            </div>
                                        </div>
                                        <div class="hpanel mt-b-30">
                                            <div class="panel-body file-body file-cs-ctn">
                                                <i class="fa fa-file-excel-o text-success"></i>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="#">Sheets_2016.doc</a>
                                            </div>
                                        </div>
                                        <div class="hpanel">
                                            <div class="panel-body file-body file-cs-ctn">
                                                <i class="fa fa-file-excel-o text-success"></i>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="#">Sheets_2016.doc</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="hpanel mt-b-30">
                                            <div class="panel-body file-body file-cs-ctn">
                                                <i class="fa fa-file-powerpoint-o text-danger"></i>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="#">Presentation_2016.doc</a>
                                            </div>
                                        </div>
                                        <div class="hpanel mt-b-30">
                                            <div class="panel-body file-body file-cs-ctn">
                                                <i class="fa fa-file-powerpoint-o text-danger"></i>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="#">Presentation_2016.doc</a>
                                            </div>
                                        </div>
                                        <div class="hpanel mt-b-30">
                                            <div class="panel-body file-body file-cs-ctn">
                                                <i class="fa fa-file-powerpoint-o text-danger"></i>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="#">Presentation_2016.doc</a>
                                            </div>
                                        </div>
                                        <div class="hpanel mt-b-30">
                                            <div class="panel-body file-body file-cs-ctn">
                                                <i class="fa fa-file-powerpoint-o text-danger"></i>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="#">Presentation_2016.doc</a>
                                            </div>
                                        </div>
                                        <div class="hpanel mt-b-30">
                                            <div class="panel-body file-body file-cs-ctn">
                                                <i class="fa fa-file-powerpoint-o text-danger"></i>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="#">Presentation_2016.doc</a>
                                            </div>
                                        </div>
                                        <div class="hpanel mt-b-30">
                                            <div class="panel-body file-body file-cs-ctn">
                                                <i class="fa fa-file-powerpoint-o text-danger"></i>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="#">Presentation_2016.doc</a>
                                            </div>
                                        </div>
                                        <div class="hpanel">
                                            <div class="panel-body file-body file-cs-ctn">
                                                <i class="fa fa-file-powerpoint-o text-danger"></i>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="#">Presentation_2016.doc</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                        
            

                    </div>
            
                </div>
                @include('layouts.footer')
            </div>



</body>