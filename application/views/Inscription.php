<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
    <title>Inscription</title>
</head>

<body>
    <form action="<?php echo base_url('UserCI/insert_User'); ?>" method="post">
        <input type="text" name="user" id="" require>
        <input type="date" name="birthday" id="" require>
        <input type="email" name="email" id="" require>
        <input type="password" name="key_password" id="" require>
        <input type="submit" value="Inscription">
    </form>
</body>

</html>