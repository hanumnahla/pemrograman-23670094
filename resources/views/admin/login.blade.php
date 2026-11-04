@extends('admin.layouts.app')
@section('content')
<head>
    <!-- Title -->
    <title>Login - Sego Restaurant Admin</title>
<body class="h-100">
    <div class="authincation">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img src="assets/images/logo-full-dark.png" alt="/"></a>
									</div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form action="index.html">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" value="hello@example.com">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label">Password</label>
											<div class="position-relative">
												<input type="password" id="dz-password" class="form-control" value="Password">
												<span class="show-pass eye">
													<i class="fa fa-eye-slash"></i>
													<i class="fa fa-eye"></i>
												</span>
											</div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between mt-4 mb-3 align-items-center">
                                            <div class="form-group me-3 py-1">
												<div class="form-check custom-checkbox mb-0">
													<input type="checkbox" class="form-check-input" id="customCheckBox1" >
													<label class="form-check-label" for="customCheckBox1">Remember my preference</label>
												</div>
                                            </div>
                                            <div class="form-group  py-1">
                                                <a class="" href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p class="">Don't have an account? <a class="" href="page-register.html">Sign up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

   