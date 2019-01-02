<?php
// list of links
require('common/header-links.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="utf-8">
    <!-- Allow application to be responsive on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title tab  -->
    <title>Paradise Chaser</title>
    <!-- Title tab icon -->
    <link href="<?= $titleTabIcon; ?>" rel="icon"/>
    <!-- Bootstrap 4.0.0 Main CSS  -->
    <link href="<?= $bootstrapCssPath; ?>" rel="stylesheet" type="text/css"/>
    <!-- Custom Css -->
    <link href="<?= $AppCssPath; ?>" rel="stylesheet" type="text/css"/>
    <!-- AOS Css -->
    <link href="<?= $AOSPath; ?>" rel="stylesheet" type="text/css"/>
</head>
<body>
    <form class="form-signin">
        <div class="text-center mb-4">
            <img class="mb-4" src="Asset/images/icons/title-tab-icon.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Paradise Chaser</h1>
            <p>You online booking travel agency</p>
            <p>You online booking travel agency</p>
        </div>

        <div class="form-label-group">
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
            <label for="inputEmail">Email address</label>
        </div>

        <div class="form-label-group">
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
            <label for="inputPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted text-center"><em>Paradise Chaser</em>&copy;2019</p>
    </form>


</body>
</html>
