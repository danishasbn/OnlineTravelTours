<?php
// List of icons
require('common/icons.php');
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
    <form class="form-signin form-background">
        <div class="text-center mb-4">
            <img class="mb-4" src="Asset/images/icons/title-tab-icon.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal text-white">Paradise Chaser</h1>
            <p class="text-white">You online booking travel agency. Book your favorite packages</p>
        </div>

        <label class="text-white" for="inputEmail">Email address</label>
        <div class="form-label-group">
            <input type="email" id="inputEmail" class="form-control input-text" placeholder="Email address" required="" autofocus="">
        </div>

        <label class="text-white" for="inputPassword">Password</label>
        <div class="form-label-group">
            <input type="password" id="inputPassword" class="form-control input-text" placeholder="Password" required="">
        </div>

        <div class="checkbox mb-3">
            <label class="text-white">
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-block login-button" type="submit">Sign in <img src="<?= $signin; ?>" class="icon"/> </button>
        <label class="text-warning">Not a member? </label> <a class="sign-up-link" href="">Sign Up |</a>
        <a class="sign-up-link text-primary" href="">Forgot Password!</a>
        <p class="mt-5 mb-3 text-muted text-center"><em>Paradise Chaser</em>&copy;2019</p>
    </form>


</body>
</html>