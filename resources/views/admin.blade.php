<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/charts/chartist-bundle/chartist.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/charts/morris-bundle/morris.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/charts/c3charts/c3.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/flag-icon-css/flag-icon.min.css')}}">
    <title>Hangover | Admin</title>
</head>

<body>
<div class="dashboard-main-wrapper">
    <div class="dashboard-header">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <a class="navbar-brand" href="#">Hangover</a>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-right-top">
                    <li class="nav-item dropdown nav-user">
                        <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('assets/images/avatar-1.jpg')}}" alt="" class="user-avatar-md rounded-circle"></a>
                        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                            <div class="nav-user-info">
                                <h5 class="mb-0 text-white nav-user-name">{{auth()->user()->name}}</h5>
                            </div>
                            <a class="dropdown-item" href="/home"><i class="fas fa-power-off mr-2"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="nav-left-sidebar sidebar-dark">
        <div class="menu-list">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-divider">
                            Menu
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                            <div id="submenu-1" class="collapse submenu">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Main Dashboard</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tables</a>
                            <div id="submenu-5" class="collapse submenu">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/admin/userTable">Users</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/admin/drinkTable">Drinks</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- end left sidebar -->

    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="row">
                    <h1>User's Info</h1>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card border-3 border-top border-top-primary">
                            <div class="card-body">
                                <h5 class="text-muted">Id</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">{{auth()->user()->id}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card border-3 border-top border-top-primary">
                            <div class="card-body">
                                <h5 class="text-muted">Name</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">{{auth()->user()->name}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card border-3 border-top border-top-primary">
                            <div class="card-body">
                                <h5 class="text-muted">Phone</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">{{auth()->user()->phone}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card border-3 border-top border-top-primary">
                            <div class="card-body">
                                <h5 class="text-muted">Email</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">{{auth()->user()->email}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card border-3 border-top border-top-primary">
                            <div class="card-body">
                                <h5 class="text-muted">Date of birth</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">{{auth()->user()->dateofbirth}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr><h1>Our Info</h1>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card border-3 border-top border-top-primary">
                            <div class="card-body">
                                <h5 class="text-muted">Total Users</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">{{$user_count}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card border-3 border-top border-top-primary">
                            <div class="card-body">
                                <h5 class="text-muted">Total Drinks</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">{{$drink_count}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <h1>User's Activity</h1>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card border-3 border-top border-top-primary">
                            <div class="card-body">
                                <h5 class="text-muted">User's Orders</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">{{$user_orders}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center">
                    Copyright © 2022 Concept. All rights reserved. Dashboard by <a href="#">Joe953</a>.
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
<script src="{{asset('assets/libs/js/main-js.js')}}"></script>
<script src="{{asset('assets/vendor/charts/chartist-bundle/chartist.min.js')}}"></script>
<script src="{{asset('assets/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
<script src="{{asset('assets/vendor/charts/morris-bundle/raphael.min.js')}}"></script>
<script src="{{asset('assets/vendor/charts/morris-bundle/morris.js')}}"></script>
<script src="{{asset('assets/vendor/charts/c3charts/c3.min.js')}}"></script>
<script src="{{asset('assets/vendor/charts/c3charts/d3-5.4.0.min.js')}}"></script>
<script src="{{asset('assets/vendor/charts/c3charts/C3chartjs.js')}}"></script>
<script src="{{asset('assets/libs/js/dashboard-ecommerce.js')}}"></script>
</body>
</html>
