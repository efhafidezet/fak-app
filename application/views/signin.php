<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sign In </title>
    <link rel="stylesheet" href="<?=base_url('asset/assets/bootstrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('asset/assets/css/styles.css')?>">
    <link rel="stylesheet" href="<?=base_url('asset/assets/css/Google-Style-Login.css')?>">
</head>

<body>
    <h1>&emsp;</h1>
    <h4> &emsp; </h4>
    <div class="login-card">
        <h1 class="text-center">Sign In</h1>
        <form class="form-signin" action="<?php echo base_url('pengaturan/aksi_login'); ?>" method="post"> 
            <span> &emsp; </span>
            <input class="form-control" type="text" required="" placeholder="Username" autofocus="" id="inputUsername" name="username">
            <input class="form-control" type="password" required="" placeholder="Password" id="inputPassword" name="password">
            &emsp;
            <button type="submit">Sign in</button>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>