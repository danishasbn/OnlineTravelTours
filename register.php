<?php require('common/header.php');?>
<?php include('Action/action-register.php') ?>

<!-- Main Index Container -->
<div class="container">
     <form class="form-signin" method="post" action="<?= $_SERVER ['PHP_SELF']; ?>" autocomplete="off">
        
        <!-- Heading -->
        <div class="text-center mb-4">
            <h1 class="h3 mb-3 font-weight-normal text-teal">Sign up to Paradise Chaser</h1>    
            <p class="text-teal">You online booking travel agency. Book your favorite packages</p>
        </div>

        <!-- Hidden Fields -->
        <input type="hidden" name="status" value="1">
        <input type="hidden" name="role-type" value="Customer">
        
        <!-- FirstName -->
        <label class="text-teal" for="inputFname">First Name *</label>
        <div class="form-label-group">
            <input type="text" id="inputFname" name="inputFname" class="form-control input-text" placeholder="First Name" style="<?= $error_msg; ?> <?= $warning_fname_msg; ?>" value="<?php if(isset($firstname)) {echo $firstname; }; ?>" maxLength="30">
        </div>

        <!-- LastName -->
        <label class="text-teal" for="inputLname">Last Name *</label>
        <div class="form-label-group">
            <input type="text" id="inputLname" name="inputLname" class="form-control input-text" placeholder="Last Name"  style="<?= $error_msg; ?> <?= $warning_lname_msg; ?>" value="<?php if(isset($lastname)) {echo $lastname; }; ?>" maxLength="30">
        </div>

        <!-- Gender -->
        <label class="text-teal">Gender *</label>
        <div class="form-label-group">
            <input type="radio" class="gender" name="gender" value="Male" <?php if (isset($gender) and $_POST['gender'] == 'Male') echo ' checked'; ?> required> Male
            <input type="radio" class="gender" name="gender" value="Female" <?php if (isset($gender) and $_POST['gender'] == 'Female') echo ' checked'; ?> required> Female
        </div>
        
        <!-- Address -->
        <label class="text-teal" for="inputAddress">Address *</label>
        <div class="form-label-group">
            <input type="text" id="inputAddress" name="inputAddress" class="form-control input-text" placeholder="Address" style="<?= $error_msg; ?> <?= $warning_address_msg; ?>" value="<?php if(isset($inputAddress)){echo $inputAddress;} ?>" maxLength="150">
        </div>
        <!-- Phone Number -->
        <label class="text-teal" for="inputPhone">Phone Number *</label>
        <div class="form-label-group">
            <input type="text" id="inputPhone" name="inputPhone" class="form-control input-text" placeholder="Phone Number (+230)" title="E.g 51234567" style="<?= $error_msg; ?> <?= $warning_phone_msg; ?>" value="<?php if(isset($inputPhone)) {echo $inputPhone;} ?>" maxLength= "8">
        </div>
        <!-- Country -->
        <label class="text-teal">Country *</label>
        <div class="form-label-group">
            <input type="text" class="form-control input-text" name="inputCountry" value="Mauritius" readonly>
        </div>
        <!-- Email -->
        <label class="text-teal" for="inputEmail">Email address *</label>
        <div class="form-label-group">
            <input type="text" id="inputEmail" name="inputEmail" class="form-control input-text" placeholder="Email address" style="<?= $error_msg; ?> <?= $warning_email_msg; ?>" maxLength="100" value="<?php if(isset($inputEmail)) {echo $inputEmail;}?>">
        </div>
        <!-- Password -->
        <label class="text-teal" for="inputPassword">Password *</label>
        <div class="form-label-group">
            <input type="password" id="inputPassword" name="inputPassword" class="form-control input-text" placeholder="Password" style="<?= $error_msg; ?> <?= $warning_password_msg; ?>" maxLength="200">
        </div>

        <!-- Confirm Password -->
        <label class="text-teal" for="inputCPassword">Confirm Password *</label>
        <div class="form-label-group">
            <input type="password" id="inputCPassword" name="inputCPassword" class="form-control input-text" placeholder="Confirm Password" style="<?= $error_msg; ?> <?= $warning_password_msg; ?>" maxLength="200">
        </div>
        
        <br>
        <button class="btn btn-lg btn-block login-button" type="submit" id="btn-register" name="btn-register">Sign up <img src="<?= $signin; ?>" class="icon"/> </button>
        <br>
        <p class="mt-5 mb-3 text-muted text-center"><em>Paradise Chaser</em>&copy;2019</p>
    </form>
</div>
<!-- End of Index Container -->
<?php require('common/footer.php');?>