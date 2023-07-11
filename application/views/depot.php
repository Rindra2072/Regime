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

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
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
                        </h6><br><?php echo $erreur;?>
                        <form action="<?php echo base_url('codeCI/depot');?>" method="post">
                            <div class=" input-group input-group-outline mb-4">
                                <label class="form-label">Code</label>
                                <input type="number" name="code" class="form-control" required>
                            </div><br>
                            <div class="text">
                                <button type="submit" class="btn btn-outline-success">Validate</button>
                            </div>
                            <br><br>
                        </form>

                        <table class="table">
                            <tr>
                                <th>Code</th>
                                <th>Prix</th>
                            </tr>
                            <?php for($i=0;$i<count($code);$i++){?>
                            <tr>
                                <td><?php echo $code[$i]->code?></td>
                                <td><?php echo $code[$i]->price?></td>
                            </tr>
                            <?php }?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js" type="text/javascript">
    </script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript">
    </script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-checkbox-radio.js"></script>

    <!--  Charts Plugin -->
    <script src="<?php echo base_url(); ?>assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="<?php echo base_url(); ?>assets/js/paper-dashboard.js"></script>

</html>