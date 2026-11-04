@extends('admin.layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sweet Alert - Sego Restaurant Admin</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">

    <!-- SweetAlert CSS -->
    <link href="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">

    <!-- Bootstrap Select CSS -->
    <link href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">

    <!-- Bootstrap Datepicker CSS -->
    <link href="{{ asset('assets/vendor/bootstrap-datepicker-master/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">

    <!-- Main CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->    
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
        <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{ url('/admin') }}" class="brand-logo">
                <img class="logo-abbr" src="{{ asset('assets/images/logo.png') }}" alt="Logo">
                <img class="logo-compact" src="{{ asset('assets/images/logo-text.png') }}" alt="Logo">
                <img class="brand-title" src="{{ asset('assets/images/logo-text.png') }}" alt="Logo">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->        
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">

                        <div class="header-left">
                            <div class="dashboard_bar">
                                Sweet Alert
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item">
                                <form>
                                    <div class="input-group search-area d-xl-inline-flex d-none">
                                        <input type="text" class="form-control"
                                            placeholder="Search here...">
                                        <button class="input-group-text">
                                            <i class="flaticon-381-search-2"></i>
                                        </button>
                                    </div>
                                </form>
                            </li>

                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)"
                                    role="button" data-bs-toggle="dropdown">
                                    <img src="{{ asset('assets/images/profile/17.jpg') }}"
                                        width="20" alt="Profile">
                                    <div class="header-info">
                                        <span class="text-black">
                                            <strong>Admin</strong>
                                        </span>
                                        <p class="fs-12 mb-0">Administrator</p>
                                    </div>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item ai-icon">
                                        <span class="ms-2">Profile</span>
                                    </a>
                                    <a href="#" class="dropdown-item ai-icon">
                                        <span class="ms-2">Logout</span>
                                    </a>
                                </div>
                            </li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll dz-scroll">

                <ul class="metismenu" id="menu">

                    <li>
                        <a href="{{ url('/admin') }}" class="ai-icon">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void(0);">
                            <i class="flaticon-381-heart"></i>
                            <span class="nav-text">Plugins</span>
                        </a>

                        <ul>
                            <li>
                                <a href="{{ url('/admin/sweetalert') }}">
                                    Sweet Alert
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>

                <div class="copyright">
                    <p>
                        <strong>Sego Restaurant Admin Dashboard</strong>
                        © 2023 All Rights Reserved
                    </p>
                    <p>Made with <span class="heart"></span> by DexignZone</p>
                </div>

            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
       <div class="content-body">
            <div class="container-fluid">
				<!-- Add Order -->
				<div class="modal fade" id="addOrderModalside">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Menus</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal">
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group mb-3">
										<label class="form-label">Food Name</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group mb-3">
										<label class="form-label">Order Date</label>
										<input class="form-control" type="text" id="datepicker">
									</div>
									<div class="form-group mb-3">
										<label class="form-label">Food Price</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<button type="button" class="btn btn-primary">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Plugins</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Sweet Alert</a></li>
					</ol>
                </div>
                 <div class="row">
                    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Wrong</h4>
                                <div class="card-content">
                                    <div class="sweetalert mt-0">
                                        <button class="btn btn-danger btn sweet-wrong">Sweet Wrong</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Message</h4>
                                <div class="card-content">
                                    <div class="sweetalert mt-0">
                                        <button class="btn btn-info btn sweet-message">Sweet Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Text</h4>
                                <div class="card-content">
                                    <div class="sweetalert mt-0">
                                        <button class="btn btn-primary btn sweet-text">Sweet Text</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Success</h4>
                                <div class="card-content">
                                    <div class="sweetalert mt-0">
                                        <button class="btn btn-success btn sweet-success">Sweet Success</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Confirm</h4>
                                <div class="card-content">
                                    <div class="sweetalert mt-0">
                                        <button class="btn btn-warning btn sweet-confirm">Sweet Confirm</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Confirm Or Cancel</h4>
                                <div class="card-content">
                                    <div class="sweetalert mt-0">
                                        <button class="btn btn-warning btn sweet-success-cancel">Sweet Confirm Or
                                            Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Image Message</h4>
                                <div class="card-content">
                                    <div class="sweetalert mt-0">
                                        <button class="btn btn-info btn sweet-image-message">Sweet Image
                                            Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet HTML</h4>
                                <div class="card-content">
                                    <div class="sweetalert mt-0">
                                        <button class="btn btn-primary btn sweet-html">Sweet HTML</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Auto Close</h4>
                                <div class="card-content">
                                    <div class="sweetalert mt-0">
                                        <button class="btn btn-danger btn sweet-auto">Sweet Auto Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Prompt</h4>
                                <div class="card-content">
                                    <div class="sweetalert mt-0">
                                        <button class="btn btn-success btn sweet-prompt">Sweet Prompt</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Ajax</h4>
                                <div class="card-content"></div>
                                <div class="sweetalert mt-0">
                                    <button class="btn btn-info btn sweet-ajax">Sweet Ajax</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>
                    Copyright © Designed &amp; Developed by
                    <a href="http://dexignzone.com/" target="_blank">
                        DexignZone
                    </a>
                    2023
                </p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/js/deznav-init.js') }}"></script>

    <!-- SweetAlert -->
    <script src="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins-init/sweetalert.init.js') }}"></script>

</body>
</html>