<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/skote/layouts/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Apr 2022 06:07:06 GMT -->
<head>

        <meta charset="utf-8" />
        <title>Blog Details | Skote - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{ asset('frontend') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('frontend') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('frontend') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">


            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">


                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bx bx-search-alt"></span>
                            </div>
                        </form>

                        <div class="dropdown dropdown-mega d-none d-lg-block ms-2">
                            <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                                <span key="t-megamenu">Mega Menu</span>
                                <i class="mdi mdi-chevron-down"></i>
                            </button>
                            <div class="dropdown-menu dropdown-megamenu">
                                <div class="row">

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">

                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img id="header-lang-img" src="{{ asset('frontend') }}/assets/images/flags/us.jpg" alt="Header Language" height="16">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="en">
                                    <img src="{{ asset('frontend') }}/assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                                    <img src="{{ asset('frontend') }}/assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                                    <img src="{{ asset('frontend') }}/assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                                    <img src="{{ asset('frontend') }}/assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                                    <img src="{{ asset('frontend') }}/assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-customize"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                                <div class="px-lg-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{ asset('frontend') }}/assets/images/brands/github.png" alt="Github">
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{ asset('frontend') }}/assets/images/brands/bitbucket.png" alt="bitbucket">
                                                <span>Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{ asset('frontend') }}/assets/images/brands/dribbble.png" alt="dribbble">
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{ asset('frontend') }}/assets/images/brands/dropbox.png" alt="dropbox">
                                                <span>Dropbox</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{ asset('frontend') }}/assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                                <span>Mail Chimp</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{ asset('frontend') }}/assets/images/brands/slack.png" alt="slack">
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                                <i class="bx bx-fullscreen"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-bell bx-tada"></i>
                                <span class="badge bg-danger rounded-pill">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0" key="t-notifications"> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small" key="t-view-all"> View All</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="javascript: void(0);" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="bx bx-cart"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1" key="t-your-order">Your order is placed</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript: void(0);" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <img src="{{ asset('frontend') }}/assets/images/users/avatar-3.jpg"
                                                class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">James Lemire</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-simplified">It will seem like simplified English.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript: void(0);" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1" key="t-shipped">Your item is shipped</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="javascript: void(0);" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <img src="{{ asset('frontend') }}/assets/images/users/avatar-4.jpg"
                                                class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Salena Layfield</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-occidental">As a skeptical Cambridge friend of mine occidental.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">View More..</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{ asset('frontend') }}/assets/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry">Henry</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                                <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet">My Wallet</span></a>
                                <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">Settings</span></a>
                                <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Lock screen</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="bx bx-cog bx-spin"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->

            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Blog Details</h4>



                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="pt-3">
                                            <div class="row justify-content-center">
                                                <div class="col-xl-8">
                                                    <div>
                                                        <div class="text-center">
                                                            <div class="mb-4">
                                                                <a href="javascript: void(0);" class="badge bg-light font-size-12">
                                                                    <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> {{ $cat->find($post->cat_id)->title }}
                                                                </a>
                                                            </div>
                                                            <h4>{{ $post->title }}</h4>
                                                            <p class="text-muted mb-4"><i class="mdi mdi-calendar me-1"></i> 10 Apr, 2020</p>
                                                        </div>

                                                        <hr>
                                                        <div class="text-center">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div>
                                                                        <p class="text-muted mb-2">Categories</p>
                                                                        <h5 class="font-size-15">{{ $cat->find($post->cat_id)->title }}</h5>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="mt-4 mt-sm-0">
                                                                        <p class="text-muted mb-2">Date</p>
                                                                        <h5 class="font-size-15">{{ date('d F Y',strtotime($post->created_at)) }}</h5>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="mt-4 mt-sm-0">
                                                                        <p class="text-muted mb-2">Post by</p>
                                                                        <h5 class="font-size-15">Gilbert Smith</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>

                                                        <div class="my-5">
                                                            <img src="{{ asset('public') }}/post-image/{{ $post->fullimage }}" alt="" class="img-thumbnail mx-auto d-block">
                                                        </div>

                                                        <hr>

                                                        <div class="mt-4">
                                                            <div class="text-muted font-size-14">
                                                                <p>{{ $post->detail }}</p>



                                                                {{-- <blockquote class="p-4 border-light border rounded mb-4">
                                                                    <div class="d-flex">
                                                                        <div class="me-3">
                                                                            <i class="bx bxs-quote-alt-left text-dark font-size-24"></i>
                                                                        </div>
                                                                         <div>
                                                                            <p class="mb-0">{{ substr($post->detail,500,700) }}</p>
                                                                        </div>
                                                                    </div>

                                                                </blockquote> --}}




                                                                <div class="mt-4">
                                                                    <h5 class="mb-3">Title: </h5>

                                                                    <div>
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-sm-6">
                                                                                <div>
                                                                                    <ul class="ps-4">
                                                                                        <li class="py-1">Donec sodales sagittis</li>
                                                                                        <li class="py-1">Sed consequat leo eget</li>
                                                                                        <li class="py-1">Aliquam lorem ante</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4 col-sm-6">
                                                                                <div>
                                                                                    <ul class="ps-4">
                                                                                        <li class="py-1">Aenean ligula eget</li>
                                                                                        <li class="py-1">Cum sociis natoque</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <hr>

                                                            <div class="mt-5">
                                                                <h5 class="font-size-15"><i class="bx bx-message-dots text-muted align-middle me-1"></i> Comments :</h5>

                                                                <div>
                                                                    <div class="d-flex py-3">
                                                                        <div class="flex-shrink-0 me-3">
                                                                            <div class="avatar-xs">
                                                                                <div class="avatar-title rounded-circle bg-light text-primary">
                                                                                    <i class="bx bxs-user"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <h5 class="font-size-14 mb-1">Delores Williams <small class="text-muted float-end">1 hr Ago</small></h5>
                                                                            <p class="text-muted">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual</p>
                                                                            <div>
                                                                                <a href="javascript: void(0);" class="text-success"><i class="mdi mdi-reply"></i> Reply</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex py-3 border-top">
                                                                        <div class="flex-shrink-0 me-3">
                                                                            <div class="avatar-xs">
                                                                                <img src="{{ asset('frontend') }}/assets/images/users/avatar-2.jpg" alt="" class="img-fluid d-block rounded-circle">
                                                                            </div>
                                                                        </div>

                                                                        <div class="flex-grow-1">
                                                                            <h5 class="font-size-14 mb-1">Clarence Smith <small class="text-muted float-end">2 hrs Ago</small></h5>
                                                                            <p class="text-muted">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>
                                                                            <div>
                                                                                <a href="javascript: void(0);" class="text-success"><i class="mdi mdi-reply"></i> Reply</a>
                                                                            </div>

                                                                            <div class="d-flex pt-3">
                                                                                <div class="flex-shrink-0 me-3">
                                                                                    <div class="avatar-xs">
                                                                                        <div class="avatar-title rounded-circle bg-light text-primary">
                                                                                            <i class="bx bxs-user"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="flex-grow-1">
                                                                                    <h5 class="font-size-14 mb-1">Silvia Martinez <small class="text-muted float-end">2 hrs Ago</small></h5>
                                                                                    <p class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exercise</p>
                                                                                    <div>
                                                                                        <a href="javascript: void(0);" class="text-success"><i class="mdi mdi-reply"></i> Reply</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="d-flex py-3 border-top">
                                                                        <div class="flex-shrink-0 me-3">
                                                                            <div class="avatar-xs">
                                                                                <div class="avatar-title rounded-circle bg-light text-primary">
                                                                                    <i class="bx bxs-user"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="flex-grow-1">
                                                                            <h5 class="font-size-14 mb-1">Keith McCoy <small class="text-muted float-end">12 Aug</small></h5>
                                                                            <p class="text-muted">Donec posuere vulputate arcu. phasellus accumsan cursus velit</p>
                                                                            <div>
                                                                                <a href="javascript: void(0);" class="text-success"><i class="mdi mdi-reply"></i> Reply</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div class="mt-4">
                                                                <h5 class="font-size-16 mb-3">Leave a Message</h5>

                                                                <form>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="mb-3">
                                                                                <label for="commentname-input" class="form-label">Name</label>
                                                                                <input type="text" class="form-control" id="commentname-input" placeholder="Enter name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="mb-3">
                                                                                <label for="commentemail-input" class="form-label">Email</label>
                                                                                <input type="email" class="form-control" id="commentemail-input" placeholder="Enter email">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="commentmessage-input" class="form-label">Message</label>
                                                                        <textarea class="form-control" id="commentmessage-input" placeholder="Your message..." rows="3"></textarea>
                                                                    </div>

                                                                    <div class="text-end">
                                                                        <button type="submit" class="btn btn-success w-sm">Submit</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Skote.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">

                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />


            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('frontend') }}/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/libs/node-waves/waves.min.js"></script>

        <script src="{{ asset('frontend') }}/assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/skote/layouts/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Apr 2022 06:07:06 GMT -->
</html>





