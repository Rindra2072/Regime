<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
    <title>Login</title>
</head>

<body>
    <form action="<?php echo base_url('UserCI/login_User'); ?>" method="post">
        <input type="email" name="email" id="">
        <input type="password" name="password" id="">
        <input type="submit" value="Login">
    </form>
</body>

</html>