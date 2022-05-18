 <!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/skote/layouts/blog-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Apr 2022 06:07:06 GMT -->
<head>

        <meta charset="utf-8" />
        <title>Blog Website | Make Blog</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('frontend') }}/assets/images/favicon.ico">

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
                            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                             <i class="fa fa-fw fa-bars"></i>
                            </button>

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
                                    <h4 class="mb-sm-0 font-size-18">Blog Grid</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Blog</a></li>
                                            <li class="breadcrumb-item active">Blog Grid</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-9 col-lg-8">
                                <div class="card">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-tabs-custom justify-content-center pt-2" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#all-post" role="tab">
                                               All Post
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#archive" role="tab">
                                                Archive
                                            </a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content p-4">
                                        <div class="tab-pane active" id="all-post" role="tabpanel">
                                            <div>
                                                <div class="row justify-content-center">
                                                    <div class="col-xl-8">
                                                        <div>
                                                            <div class="row align-items-center">
                                                                <div class="col-4">
                                                                    <div>
                                                                        <h5 class="mb-0">Blog List</h5>
                                                                    </div>
                                                                </div>

                                                                <div class="col-8">
                                                                    <div>
                                                                        <ul class="nav nav-pills justify-content-end">
                                                                            <li class="nav-item">
                                                                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">View :</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link" href="blog-list.html">
                                                                                    <i class="mdi mdi-format-list-bulleted"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link active" href="blog-grid.html">
                                                                                    <i class="mdi mdi-view-grid-outline"></i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end row -->

                                                            <hr class="mb-4">

                                                            <div class="row" style="display: flex" style="flex-wrap: wrap">

                                                            @foreach ($posts as $post )
                                                                <div class="col-sm-6">
                                                                    <div class="card p-1 border shadow-none">
                                                                        <div class="p-3">
                                                                            <h5><a href="blog-details.html" class="text-dark">{{ $post->title }}</a></h5>
                                                                            <p class="text-muted mb-0">{{ date('d F Y',strtotime($post->created_at)) }}</p>
                                                                        </div>

                                                                        <div class="position-relative">
                                                                            <img src="public/post-image/{{ $post->fullimage }}" alt="" class="img-thumbnail w-100" >
                                                                        </div>

                                                                        <div class="p-3">
                                                                            <ul class="list-inline">
                                                                                <li class="list-inline-item me-3">
                                                                                    <a href="javascript: void(0);" class="text-muted">
                                                                                        <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i>{{ $cat->find($post->cat_id)->title }}
                                                                                    </a>
                                                                                </li>
                                                                                <li class="list-inline-item me-3">
                                                                                    <a href="javascript: void(0);" class="text-muted">
                                                                                        <i class="bx bx-comment-dots align-middle text-muted me-1"></i> 12 Comments
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>

                                                                            <div>
                                                                                <a href="index/post/{{ $post->id }}" class="text-primary">Read more <i class="mdi mdi-arrow-right"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach

            </div>








                                                            <hr class="my-4">

                                                            <div class="text-center">
                                                                <ul class="pagination justify-content-center pagination-rounded">
                                                                    {{-- <li class="page-item disabled">
                                                                        <a href="" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                                                    </li> --}}

                                                                    @for ($i = 1; $i <= ceil($posts->count()/4) ; $i++)
                                                                    <li class="page-item">
                                                                        <a href="index?page={{ $i }}" class="page-link">{{ $i }}</a>
                                                                    </li>
                                                                    @endfor
                                                                    {{-- <li class="page-item">
                                                                        <a href="" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                                                    </li> --}}
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="archive" role="tabpanel">
                                            <div>
                                                <div class="row justify-content-center">
                                                    <div class="col-xl-8">
                                                        <h5>Archive</h5>

                                                        <div class="mt-5">
                                                            <div class="d-flex flex-wrap">
                                                                <div class="me-2">
                                                                    <h4>2020</h4>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <span class="badge badge-soft-success badge-pill float-end ms-1 font-size-12">03</span>
                                                                </div>
                                                            </div>
                                                            <hr class="mt-2">

                                                            <div class="list-group list-group-flush">
                                                                <a href="blog-details.html" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Beautiful Day with Friends</a>

                                                                <a href="blog-details.html" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Drawing a sketch</a>

                                                                <a href="blog-details.html" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Project discussion with team</a>

                                                            </div>
                                                        </div>

                                                        <div class="mt-5">
                                                            <div class="d-flex flex-wrap">
                                                                <div class="me-2">
                                                                    <h4>2019</h4>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <span class="badge badge-soft-success badge-pill float-end ms-1 font-size-12">06</span>
                                                                </div>
                                                            </div>
                                                            <hr class="mt-2">

                                                            <div class="list-group list-group-flush">
                                                                <a href="blog-details.html" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Coffee with Friends</a>

                                                                <a href="blog-details.html" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Neque porro quisquam est</a>

                                                                <a href="blog-details.html" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Quis autem vel eum iure</a>

                                                                <a href="blog-details.html" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Cras mi eu turpis</a>

                                                                <a href="blog-details.html" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Drawing a sketch</a>

                                                                <a href="blog-details.html" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Project discussion with team</a>

                                                            </div>
                                                        </div>

                                                        <div class="mt-5">
                                                            <div class="d-flex flex-wrap">
                                                                <div class="me-2">
                                                                    <h4>2018</h4>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <span class="badge badge-soft-success badge-pill float-end ms-1 font-size-12">03</span>
                                                                </div>
                                                            </div>
                                                            <hr class="mt-2">

                                                            <div class="list-group list-group-flush">
                                                                <a href="blog-details.html" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Beautiful Day with Friends</a>

                                                                <a href="blog-details.html" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Drawing a sketch</a>

                                                                <a href="blog-details.html" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Project discussion with team</a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="search-box">
                                            <p class="text-muted">Search</p>
                                            <div class="position-relative">
                                                <input type="text" class="form-control rounded bg-light border-light" placeholder="Search...">
                                                <i class="mdi mdi-magnify search-icon"></i>
                                            </div>
                                        </div>

                                        <hr class="my-4">

                                        <div>
                                            <p class="text-muted">Categories</p>

                                            <ul class="list-unstyled fw-medium">
                                                <li><a href="javascript: void(0);" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i> Design</a></li>
                                                <li><a href="javascript: void(0);" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i> Development <span class="badge badge-soft-success badge-pill float-end ms-1 font-size-12">04</span></a></li>
                                                <li><a href="javascript: void(0);" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i> Business</a></li>
                                                <li><a href="javascript: void(0);" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i> Project</a></li>
                                                <li><a href="javascript: void(0);" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i> Travel<span class="badge badge-soft-success badge-pill ms-1 float-end font-size-12">12</span></a></li>
                                            </ul>
                                        </div>

                                        <hr class="my-4">

                                        <div>
                                            <p class="text-muted">Archive</p>

                                            <ul class="list-unstyled fw-medium">
                                                <li><a href="javascript: void(0);" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i> 2020 <span class="badge badge-soft-success badge-pill float-end ms-1 font-size-12">03</span></a></li>
                                                <li><a href="javascript: void(0);" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i> 2019 <span class="badge badge-soft-success badge-pill float-end ms-1 font-size-12">06</span></a></li>
                                                <li><a href="javascript: void(0);" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i> 2018 <span class="badge badge-soft-success badge-pill float-end ms-1 font-size-12">05</span></a></li>
                                            </ul>
                                        </div>

                                        <hr class="my-4">

                                        <div>
                                            <p class="text-muted mb-2">Popular Posts</p>

                                            <div class="list-group list-group-flush">

                                                @foreach ($posts->slice(0,$setting->popular_post_limit) as $post )
                                                <a href="index/post/{{ $post->id }}" class="list-group-item text-muted py-3 px-2">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-3">
                                                            <img src="{{ asset('public') }}/post-image/{{ $post->fullimage }}" alt="" class="avatar-md h-auto d-block rounded">
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="font-size-13 text-truncate">{{ $post->title }}</h5>
                                                            <p class="mb-0 text-truncate">{{ date('d F Y',strtotime($post->created_at)) }}</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                @endforeach

                                         </div>
                                        </div>

                                        <hr class="my-4">

                                        <div>
                                            <p class="text-muted">Tags</p>

                                            <div class="d-flex flex-wrap gap-2 widget-tag">
                                                <div><a href="javascript: void(0);" class="badge bg-light font-size-12">Design</a></div>
                                                <div><a href="javascript: void(0);" class="badge bg-light font-size-12">Development</a></div>
                                                <div><a href="javascript: void(0);" class="badge bg-light font-size-12">Business</a></div>
                                                <div><a href="javascript: void(0);" class="badge bg-light font-size-12">Project</a></div>
                                                <div><a href="javascript: void(0);" class="badge bg-light font-size-12">Travel</a></div>
                                                <div><a href="javascript: void(0);" class="badge bg-light font-size-12">Lifestyle</a></div>
                                                <div><a href="javascript: void(0);" class="badge bg-light font-size-12">Photography</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
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

<!-- Mirrored from themesbrand.com/skote/layouts/blog-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Apr 2022 06:07:06 GMT -->
</html>
