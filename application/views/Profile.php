<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Paper Dashboard by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


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
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="card card-user">
                    <div class="image">
                        <img src="<?php echo base_url(); ?>assets/img/background.jpg" alt="..." />
                    </div>
                    <div class="content">
                        <p class="description text">

                        </p>
                        <center>
                            <h6>
                                Sold : <?php echo $user->sold; ?>
                            </h6>
                            <br>
                            <h6>
                                Mon IMC : <?php echo $IMC; ?><br>
                                Remarque : <?php echo $desc_imc; ?>
                            </h6>
                            <br>
                            <div class="text-center">
                                <a href="<?php echo base_url('CodeCI/index'); ?>">
                                    <button type="button" class="btn btn-outline-secondary">add sold
                                    </button>
                                </a><br>
                        </center>

                    </div>
                    <hr>
                    <div class="text-center">
                        <div class="row">
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                    </div>
                    <div class="content">
                        <ul class="list-unstyled team-members">
                            <li>
                                <div class="row">
                                    <div class="col-xs-3">
                                    </div>
                                    <div class="col-xs-6">
                                        <?php if ($is_Regime) {
											?>
                                        <div class="text-center">
                                            <a href="<?php echo base_url('Targets/showRegime'); ?>">
                                                <button type="button" class="btn btn-info btn-fill btn-wd">Show
                                                    regime
                                                </button>
                                            </a>
                                        </div>
                                        <?php
                                            } else {
                                            	?>
                                        <div class="text-center">
                                            <a href="<?php echo base_url('ActivityCI/index'); ?>">
                                                <button type="button" class="btn btn-info btn-fill btn-wd">Add
                                                    Regime
                                                </button>
                                            </a>
                                        </div>
                                        <?php
                                            }
                                            ?>
                                    </div>

                                    <div class="col-xs-3 text-right">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit Profile</h4>
                    </div>
                    <div class="content">
                        <form action="<?php echo base_url('UserCI/update_All_data'); ?>" method="post">
                            <div class="row">

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control border-input" name="user" require
                                            value="<?php echo $user->user; ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control border-input" name="email" require
                                            value="<?php echo $user->email; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label>birthday</label>
                                        <input type="date" class="form-control border-input" name="birthday" require
                                            value=" <?php echo $user->birthday; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label>weight</label>
                                        <input type="number" class="form-control border-input" name="weight" require
                                            value="<?php echo $user->weight; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label>size</label>
                                        <input type="number" class="form-control border-input" name="size" require
                                            value="<?php echo $user->size; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control border-input" name="address" require
                                            value="<?php echo $user->address; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label></label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Update
                                    Profile</button>
                            </div><br>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>


<footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">

        </nav>
        <div class="copyright pull-right">
            &copy;
            <script>
            document.write(new Date().getFullYear())
            </script>, made with <i class="fa fa-heart heart"></i> by <a href="#">Creative
                Tim</a>
        </div>
    </div>
</footer>

</div>
</div>


</body>

<!--   Core JS Files   -->
<script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap-checkbox-radio.js"></script>

<!--  Charts Plugin -->
<script src="<?php echo base_url(); ?>assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="<?php echo base_url(); ?>assets/js/paper-dashboard.js"></script>


</html>