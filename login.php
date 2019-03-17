<?php
// List of icons
require('common/icons.php');
require('common/nav-links.php');
require('common/database/dbconnect.php');
include('Action/action-login.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php
    // list of links
    require('common/head.php');
    ?>
</head>
<body class="login-page">
    <form class="form-signin form-background" autocomplete="off" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" >
        <div class="text-center mb-4">
            <img class="mb-4" src="Asset/images/icons/title-tab-icon.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal text-white">Paradise Chaser</h1>
            <p class="text-white">You online booking travel agency. Book your favorite packages</p>
        </div>

        <label class="text-white" for="inputEmail">Email address *</label>
        <div class="form-label-group">
            <input type="email" id="inputEmail" name="inputEmail" class="form-control input-text" placeholder="Email address" style="<?= $error_msg; ?>">
        </div>

        <label class="text-white" for="inputPassword">Password *</label>
        <div class="form-label-group">
            <input type="password" id="inputPassword" name="inputPassword" class="form-control input-text" placeholder="Password" style="<?= $error_msg; ?>">
        </div>

        <div class="checkbox mb-3">
            <label class="text-white">
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-block login-button" type="submit" name="btn-login">Sign in <img src="<?= $signin; ?>" class="icon"/> </button>
        <label class="text-warning">Not a member? </label> <a class="sign-up-link" href="<?= $registerPath; ?>">Sign Up |</a>
        <!-- <a class="sign-up-link text-primary" href="">Forgot Password!</a> -->
        <p class="mt-5 mb-3 text-muted text-center"><em>Paradise Chaser</em>&copy;2019</p>
    </form>
</body>
</html>
