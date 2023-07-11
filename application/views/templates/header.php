<!DOCTYPE html>
<html lang="en" itemscope itemtype="">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.png');?>">
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.png');?>">
    <title>
        Material Kit 2 by Creative Tim
    </title>
    <link href="<?php echo base_url('assets/css/nucleo-icons.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/nucleo-svg.css');?>" rel="stylesheet" />
    <link id="pagestyle" href="<?php echo base_url('assets/css/material-kit.css?v=3.0.4');?>" rel="stylesheet" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo base_url(); ?>assets/css/paper-dashboard.css" rel="stylesheet" />

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url(); ?>assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="<?php echo base_url(); ?>assets/css/themify-icons.css" rel="stylesheet">
</head>

<body class="index-page bg-gray-200">


    <!-- Navbar -->
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <nav
                    class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid px-0">
                        <a class="navbar-brand font-weight-bolder ms-sm-3" href="#" rel="tooltip"
                            title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
                            Food
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                            <ul class="navbar-nav navbar-nav-hover ms-auto">
                                <li class="nav-item dropdown dropdown-hover mx-2">
                                    <a class="nav-link ps-2 d-flex cursor-pointer align-items-center"
                                        id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                                        Pages
                                        <img src="<?php echo base_url('assets/img/down-arrow-dark.svg')?>"
                                            alt="down-arrow" class="arrow ms-auto ms-md-2">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3"
                                        aria-labelledby="dropdownMenuPages">
                                        <div class="d-none d-lg-block">
                                            <h6
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                                                Landing Pages
                                            </h6>
                                            <a href="./pages/about-us.html" class="dropdown-item border-radius-md">
                                                <span>About Us</span>
                                            </a>
                                            <a href="./pages/contact-us.html" class="dropdown-item border-radius-md">
                                                <span>Contact Us</span>
                                            </a>
                                            <a href="./pages/author.html" class="dropdown-item border-radius-md">
                                                <span>Author</span>
                                            </a>
                                            <h6
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                                                Account
                                            </h6>
                                            <a href="<?php echo base_url('UserCI/profile');?>"
                                                class="dropdown-item border-radius-md">
                                                <span>My Profile</span>
                                            </a>
                                            <a href="<?php echo base_url('UserCI/logout');?>"
                                                class="dropdown-item border-radius-md">
                                                <span>Logout</span>
                                            </a>
                                        </div>

                                    </div>
                                </li>

                                <li class="nav-item dropdown dropdown-hover mx-2">
                                    <a class="nav-link ps-2 d-flex cursor-pointer align-items-center"
                                        id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons opacity-6 me-2 text-md">view_day</i>
                                        Sections
                                        <img src="<?php echo base_url('assets/img/down-arrow-dark.svg');?>"
                                            alt="down-arrow" class="arrow ms-auto ms-md-2">
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3"
                                        aria-labelledby="dropdownMenuBlocks">
                                        <div class="d-none d-lg-block">
                                            <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                    href="./presentation.html">
                                                    <div
                                                        class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                Page Sections</h6>
                                                            <span class="text-sm">See all sections</span>
                                                        </div>
                                                        <img src="<?php echo base_url('assets/img/down-arrow.svg');?>"
                                                            alt="down-arrow" class="arrow">
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                        href="./sections/page-sections/hero-sections.html">
                                                        Page Headers
                                                    </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                        href="./sections/page-sections/features.html">
                                                        Features
                                                    </a>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                    href="./presentation.html">
                                                    <div
                                                        class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                Navigation</h6>
                                                            <span class="text-sm">See all navigations</span>
                                                        </div>
                                                        <img src="<?php echo base_url('assets/img/down-arrow.svg');?>"
                                                            alt="down-arrow" class="arrow">
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                        href="./sections/navigation/navbars.html">
                                                        Navbars
                                                    </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                        href="./sections/navigation/nav-tabs.html">
                                                        Nav Tabs
                                                    </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                        href="./sections/navigation/pagination.html">
                                                        Pagination
                                                    </a>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                    href="./presentation.html">
                                                    <div
                                                        class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                Input Areas</h6>
                                                            <span class="text-sm">See all input areas</span>
                                                        </div>
                                                        <img src="<?php echo base_url(); ?>assets/img/down-arrow.svg"
                                                            alt="down-arrow" class="arrow">
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                        href="./sections/input-areas/inputs.html">
                                                        Inputs
                                                    </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                        href="./sections/input-areas/forms.html">
                                                        Forms
                                                    </a>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                    href="./presentation.html">
                                                    <div
                                                        class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                Attention Catchers</h6>
                                                            <span class="text-sm">See all examples</span>
                                                        </div>
                                                        <img src="<?php echo base_url(); ?>assets/img/down-arrow.svg"
                                                            alt="down-arrow" class="arrow">
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                        href="./sections/attention-catchers/alerts.html">
                                                        Alerts
                                                    </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                        href="./sections/attention-catchers/modals.html">
                                                        Modals
                                                    </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                        href="./sections/attention-catchers/tooltips-popovers.html">
                                                        Tooltips & Popovers
                                                    </a>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                    href="./presentation.html">
                                                    <div
                                                        class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                Elements</h6>
                                                            <span class="text-sm">See all elements</span>
                                                        </div>
                                                        <img src="<?php echo base_url(); ?>assets/img/down-arrow.svg"
                                                            alt="down-arrow" class="arrow">
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                        href="./sections/elements/avatars.html">
                                                        Avatars
                                                    </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                        href="./sections/elements/badges.html">
                                                        Badges
                                                    </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                        href="./sections/elements/breadcrumbs.html">
                                                        Breadcrumbs
                                                    </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                        href="./sections/elements/buttons.html">
                                                        Buttons
                                                    </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                        href="./sections/elements/dropdowns.html">
                                                        Dropdowns
                                                    </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                        href="./sections/elements/progress-bars.html">
                                                        Progress Bars
                                                    </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                        href="./sections/elements/toggles.html">
                                                        Toggles
                                                    </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                        href="./sections/elements/typography.html">
                                                        Typography
                                                    </a>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="row d-lg-none">
                                            <div class="col-md-12">
                                                <div class="d-flex mb-2">
                                                    <div class="icon h-10 me-3 d-flex mt-1">
                                                        <i class="ni ni-single-copy-04 text-gradient text-primary"></i>
                                                    </div>
                                                    <div
                                                        class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                Page Sections</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/page-sections/hero-sections.html">
                                                    Page Headers
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/page-sections/features.html">
                                                    Features
                                                </a>

                                                <div class="d-flex mb-2 mt-3">
                                                    <div class="icon h-10 me-3 d-flex mt-1">
                                                        <i class="ni ni-laptop text-gradient text-primary"></i>
                                                    </div>
                                                    <div
                                                        class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                Navigation</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/navigation/navbars.html">
                                                    Navbars
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/navigation/nav-tabs.html">
                                                    Nav Tabs
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/navigation/pagination.html">
                                                    Pagination
                                                </a>


                                                <div class="d-flex mb-2 mt-3">
                                                    <div class="icon h-10 me-3 d-flex mt-1">
                                                        <i class="ni ni-badge text-gradient text-primary"></i>
                                                    </div>
                                                    <div
                                                        class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                Input Areas</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/input-areas/inputs.html">
                                                    Inputs
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/input-areas/forms.html">
                                                    Forms
                                                </a>


                                                <div class="d-flex mb-2 mt-3">
                                                    <div class="icon h-10 me-3 d-flex mt-1">
                                                        <i class="ni ni-notification-70 text-gradient text-primary"></i>
                                                    </div>
                                                    <div
                                                        class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                Attention Catchers</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/attention-catchers/alerts.html">
                                                    Alerts
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/attention-catchers/modals.html">
                                                    Modals
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/attention-catchers/tooltips-popovers.html">
                                                    Tooltips & Popovers
                                                </a>


                                                <div class="d-flex mb-2 mt-3">
                                                    <div class="icon h-10 me-3 d-flex mt-1">
                                                        <i class="ni ni-app text-gradient text-primary"></i>
                                                    </div>
                                                    <div
                                                        class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                Elements</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/elements/avatars.html">
                                                    Avatars
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/elements/badges.html">
                                                    Badges
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/elements/breadcrumbs.html">
                                                    Breadcrumbs
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/elements/buttons.html">
                                                    Buttons
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/elements/dropdowns.html">
                                                    Dropdowns
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/elements/progress-bars.html">
                                                    Progress Bars
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/elements/toggles.html">
                                                    Toggles
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/elements/typography.html">
                                                    Typography
                                                </a>
                                            </div>
                                        </div>

                                    </ul>
                                </li>

                                <li class="nav-item dropdown dropdown-hover mx-2">
                                    <a class="nav-link ps-2 d-flex cursor-pointer align-items-center"
                                        id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons opacity-6 me-2 text-md">article</i>
                                        Docs
                                        <img src="<?php echo base_url(); ?>assets/img/down-arrow-dark.svg"
                                            alt="down-arrow" class="arrow ms-auto ms-md-2">
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive mt-0 mt-lg-3 p-3 border-radius-lg"
                                        aria-labelledby="dropdownMenuDocs">
                                        <div class="d-none d-lg-block">
                                            <ul class="list-group">
                                                <li class="nav-item list-group-item border-0 p-0">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href=" #">
                                                        <h6
                                                            class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                            Getting Started</h6>
                                                        <span class="text-sm">All about overview, quick start, license
                                                            and contents</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item list-group-item border-0 p-0">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href="">
                                                        <h6
                                                            class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                            Foundation</h6>
                                                        <span class="text-sm">See our colors, icons and
                                                            typography</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item list-group-item border-0 p-0">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href="# ">
                                                        <h6
                                                            class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                            Components</h6>
                                                        <span class="text-sm">Explore our collection of fully designed
                                                            components</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item list-group-item border-0 p-0">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href=" # ">
                                                        <h6
                                                            class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                            Plugins</h6>
                                                        <span class="text-sm">Check how you can integrate our
                                                            plugins</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item list-group-item border-0 p-0">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href=" #">
                                                        <h6
                                                            class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                            Utility Classes</h6>
                                                        <span class="text-sm">For those who want flexibility, use our
                                                            utility classes</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="row d-lg-none">
                                            <div class="col-md-12 g-0">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                    href="./pages/about-us.html">
                                                    <h6
                                                        class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                        Getting Started</h6>
                                                    <span class="text-sm">All about overview, quick start, license and
                                                        contents</span>
                                                </a>

                                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                    href="./pages/about-us.html">
                                                    <h6
                                                        class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                        Foundation</h6>
                                                    <span class="text-sm">See our colors, icons and typography</span>
                                                </a>

                                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                    href="./pages/about-us.html">
                                                    <h6
                                                        class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                        Components</h6>
                                                    <span class="text-sm">Explore our collection of fully designed
                                                        components</span>
                                                </a>

                                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                    href="./pages/about-us.html">
                                                    <h6
                                                        class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                        Plugins</h6>
                                                    <span class="text-sm">Check how you can integrate our plugins</span>
                                                </a>

                                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                    href="./pages/about-us.html">
                                                    <h6
                                                        class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                        Utility Classes</h6>
                                                    <span class="text-sm">For those who want flexibility, use our
                                                        utility classes</span>
                                                </a>
                                            </div>
                                        </div>

                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>

    <header class="header-2">
        <div class="page-header min-vh-75 relative"
            style="background-image: url('<?php echo base_url(); ?>assets/img/bg2.jpg')">
            <span class="mask bg-gradient-primary opacity-4"></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 text-center mx-auto">
                        <h1 class="text-white pt-3 mt-n5">Material Kit 2</h1>
                        <p class="lead text-white mt-3">Free & Open Source Web UI Kit built over Bootstrap 5. <br />
                            Join over 1.6 million developers around the world. </p>
                    </div>
                </div>
            </div>
        </div>
    </header>