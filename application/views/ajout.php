<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/favicon.png">
    <title>
        add size and weight
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="<?php echo base_url()?>assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="<?php echo base_url()?>assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="sign-in-basic">
    <!-- Navbar Transparent -->
    <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent ">

    </nav>
    <!-- End Navbar -->
    <div class="page-header align-items-start min-vh-100"
        style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');"
        loading="lazy">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-12 mx-auto">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Health profile</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo base_url('UserCI/update_data'); ?>" method="post"
                                class="text-start">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"> weight (Kg)</label>
                                    <input type="number" class="form-control" name="weight">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Size(cm)</label>
                                    <input type="number" class="form-control" name="size">
                                    <input type="hidden" class="form-control" name="id" value="<?php echo $id ;?>">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">ADD
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer position-absolute bottom-2 py-2 w-100">

        </footer>
    </div>
    <!--   Core JS Files   -->
    <script src="<?php echo base_url()?>assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/js/plugins/perfect-scrollbar.min.js"></script>
    <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
    <script src="<?php echo base_url()?>assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>
</body>

</html>