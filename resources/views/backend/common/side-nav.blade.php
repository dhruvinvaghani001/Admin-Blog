<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{ asset('backend/asset/css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    </head>
    <body class="sb-nav-fixed">

        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="{{ route('dashboard') }}">Admin - DashBoard</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>

            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">
                            <i class="fas fa-user fa-fw"></i>
                            {{ Auth::user()->name }}</a></li>
                        <li><a class="dropdown-item" href="#!">                            <i class="fa-solid fa-screwdriver-wrench mx-2"></i>
                            Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <form action="{{ route('logout') }}" method="post">@csrf
                            <li><button class="dropdown-item" type="submit"> <i class="fa-solid fa-right-from-bracket mx-2"></i>logout</button></li></form>
                    </ul>
                </li>
            </ul>
        </nav>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{ url('admin/category') }}">
                                <div class="sb-nav-link-icon"><i class="fa-brands fa-microsoft"></i></div>
                                Category
                            </a>
                            <hr>



                            <a class="nav-link collapsed" href="{{ url('admin/post') }}" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Posts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="{{ url('admin/post/create') }}">
                                        <i class="fa-solid fa-circle-plus mx-2"></i>
                                        Add Post
                                    </a>
                                    <a class="nav-link" href="{{ url('admin/post') }}">
                                        <i class="fa-solid fa-circle-plus mx-2"></i>
                                        All Post
                                    </a>

                                </nav>
                            </div>
                            <a class="nav-link" href="{{ url('admin/setting') }}">
                                <div class="sb-nav-link-icon fs-6"><i class="fa-solid fa-gear "></i></div>
                                Setting
                            </a>



                            <a class="nav-link" href="{{ url('admin/category') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Category
                            </a>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                            <a class="nav-link" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                this.closest('form').submit();">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-right-from-bracket mx-2"></i></div>
                                logout
                            </a>
                        </form>

                        </form>
                        </div>
                        <div class="sb-sidenav-footer">
                            <div class="small">Logged in as  :  {{ Auth::user()->name }}</div>

                        </div>
                    </div>
                </nav>
            </div>



           @yield('content')
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('backend/asset/js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('backend/asset/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('backend/asset/js/demo/chart-bar-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ asset('backend/asset/js/datatables-simple-demo.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('backend/asset/js/alert.js') }}"></script>

    <script src="{{ asset('frontend') }}assets/libs/jquery/jquery.min.js"></script>
    <script src="{{ asset('frontend') }}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="{{ asset('frontend') }}assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('frontend') }}assets/libs/node-waves/waves.min.js"></script>

    <!-- Sweet Alerts js -->
    <script src="{{ asset('frontend') }}assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- Sweet alert init js-->
    <script src="{{ asset('frontend') }}assets/js/pages/sweet-alerts.init.js"></script>

    <!-- App js -->
    <script src="{{ asset('frontend') }}assets/js/app.js"></script>


</body>
</html>
