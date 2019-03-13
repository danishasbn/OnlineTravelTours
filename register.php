<?php require('common/header.php');?>
<!-- Main Index Container -->
<div class="container">
     <form class="form-signin">
        <div class="text-center mb-4">
            <h1 class="h3 mb-3 font-weight-normal text-teal">Sign up to Paradise Chaser</h1>    
            <p class="text-teal">You online booking travel agency. Book your favorite packages</p>
        </div>
        <!-- Hidden Fields -->
        <input type="hidden" name="status" value="Active">
        <input type="hidden" name="role-type" value="Customer">

        <label class="text-teal" for="inputFname">First Name *</label>
        <div class="form-label-group">
            <input type="text" id="inputFname" class="form-control input-text" placeholder="First Name" required="" autofocus="">
        </div>

        <label class="text-teal" for="inputLname">Last Name *</label>
        <div class="form-label-group">
            <input type="text" id="inputLname" class="form-control input-text" placeholder="Last Name" required="" autofocus="">
        </div>

        <label class="text-teal">Gender *</label>
        <div class="form-label-group">
            <input type="radio" class="gender" name="gender"> Male
            <input type="radio" class="gender" name="gender"> Female
        </div>


        <label class="text-teal" for="inputLname">Address *</label>
        <div class="form-label-group">
            <input type="text" id="inputLname" class="form-control input-text" placeholder="Address" required="" autofocus="">
        </div>

        <label class="text-teal" for="inputPhone">Phone Number *</label>
        <div class="form-label-group">
            <input type="number" id="inputPhone" class="form-control input-text" placeholder="Phone Number" required="" autofocus="">
        </div>

        <label class="text-teal" for="inputLname">Country *</label>
        <div class="form-label-group">
            <input type="text" disabled id="inputCountry" class="form-control input-text"  value="Mauritius">
        </div>

        <label class="text-teal" for="inputEmail">Email address *</label>
        <div class="form-label-group">
            <input type="email" id="inputEmail" class="form-control input-text" placeholder="Email address" required="" autofocus="">
        </div>

        <label class="text-teal" for="inputPassword">Password *</label>
        <div class="form-label-group">
            <input type="password" id="inputPassword" class="form-control input-text" placeholder="Password" required="">
        </div>
        
        <label class="text-teal" for="inputCPassword">Confirm Password *</label>
        <div class="form-label-group">
            <input type="password" id="inputCPassword" class="form-control input-text" placeholder="Confirm Password" required="">
        </div>
        <br>
        <button class="btn btn-lg btn-block login-button" type="submit">Sign up <img src="<?= $signin; ?>" class="icon"/> </button>
        <br>
        <p class="mt-5 mb-3 text-muted text-center"><em>Paradise Chaser</em>&copy;2019</p>
    </form>
</div>
<!-- End of Index Container -->
<?php require('common/footer.php');?>