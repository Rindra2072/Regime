<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo base_url(); ?>assets/css/paper-dashboard.css" rel="stylesheet" />

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url(); ?>assets/css/demo.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/themify-icons.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container my-auto">
        <div class="row">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
                <div class="col-lg-6 col-md-8 col-12 mx-auto">
                    <div class="card-body"><br><br>
                        <h6>Edit Regime
                        </h6><br>
                        <form action="<?php echo base_url('Targets/Suggest'); ?>" method="post">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="check1" name="target" value="2">
                                <label class="">Losing </label>
                            </div><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="check1" name="target" value="1">
                                <label class="">gain</label>
                            </div><br>
                            <br>
                            <div class=" input-group input-group-outline mb-4">
                                <label class="form-label">Objective</label>
                                <input type="number" name="objective" class="form-control">
                            </div><br>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Validate</button>
                            </div>
                            <br><br>
                        </form>
                    </div>
                </div>
            </div>
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


<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="<?php echo base_url(); ?>assets/js/paper-dashboard.js"></script>

</html>