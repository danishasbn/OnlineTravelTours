<?php require('../../common/header.php');?>
<?php include('../../Action/action-myData.php') ?>

<div class="container">
    <div class="row justify-content-center" >
        <h1 class="text-center trending">Info <img src="<?= $border; ?>" class="img-border"/></h1>
    </div>
    <div class="row">
        <ul class="myDataList">
            <li><a href="#my-orders">My Orders</a></li>
            <li><a href="#account-info"> Account Information </a></li>
            <li><a href="#address-book"> Address Book </a></li>
            <li><a href="#privacy"> Privacy Setting </a></li>
        </ul>
    </div>
  
    <div class="row">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text-white text-center" id="my-orders">My Orders</h3>
            </div>
            <div class="panel-body container">
                Data Table
                
            </div>
        </div>

        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text-white text-center" id="account-info">Account Information</h3>
            </div>
            <div class="panel-body container">
                <div class="row">
                    <div class="col-md-6">
                        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="off">
                                <label class="text-teal" for="inputFname">First Name *</label>
                                <div class="form-label-group">
                                    <input type="text" id="inputFname" name="inputFname" class="form-control input-text input-width" placeholder="First Name" value="<?= $firstname; ?>" maxLength="30">
                                </div>

                                <label class="text-teal" for="inputLname">Last Name *</label>
                                <div class="form-label-group">
                                    <input type="text" id="inputLname" name="inputLname" class="form-control input-text input-width" placeholder="Last Name" value="<?= $lastname; ?>" maxLength="30">
                                </div>

                                <label class="text-teal" for="inputEmail">Email *</label>
                                <div class="form-label-group">
                                    <input type="text" id="inputEmail" name="inputEmail" class="form-control input-text input-width" placeholder="Email Address" value="<?= $inputEmail; ?>" maxLength="30" readonly>
                                </div>

                                <label class="text-teal" for="inputPhone">Mobile Number *</label>
                                <div class="form-label-group">
                                    <input type="text" id="inputPhone" name="inputPhone" class="form-control input-text input-width" placeholder="Mobile No. (+ 230)" value="<?= $inputPhone; ?>" maxLength="8">
                                </div>
                                <br>
                                <button class="btn btn-sm login-button " type="submit" id="btn-save" name="btn-save">Save Data</button>
                                <br>
                                <br>
                        </form>
                    </div>


                    <div class="col-md-6" align="center">
                        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="off">
                                <h3 class="text-teal text-center">Change Password</h3>
                                <label class="text-teal" for="inputOldPass">Old Password *</label>
                                <div class="form-label-group">
                                    <input type="password" id="inputOldPass" name="inputOldPass" class="form-control input-text  input-width" placeholder="Old Password" value="" maxLength="30">
                                </div>

                                <label class="text-teal" for="inputNewPass">New Password *</label>
                                <div class="form-label-group">
                                    <input type="password" id="inputNewPass" name="inputNewPass" class="form-control input-text input-width" placeholder="New Password" value="" maxLength="30">
                                </div>

                                <label class="text-teal" for="inputCpass">Confirmed Password *</label>
                                <div class="form-label-group">
                                    <input type="password" id="inputCpass" name="inputCpass" class="form-control input-text input-width" placeholder="Retype Password..." value="" maxLength="30">
                                </div>
                                <br>
                                <button class="btn btn-sm login-button input-width" type="submit" id="btn-change" name="btn-change">Change Password</button>
                                <br>
                                <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text-white text-center" id="address-book">Address Book</h3>
            </div>
            <div class="panel-body container">
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="off">
                    <br>
                    <h3 class="text-teal text-center">Default Billing Address</h3>
                    <label class="text-teal" for="inputAddress">Address</label>
                    <div class="form-label-group">
                        <input type="text" readonly id="inputAddress" name="inputAddress" class="form-control iznput-text" placeholder="My Billig Address" value="<?= $inputAddress; ?>" maxLength="30">
                    </div>
                    <br>
                    <label class="text-teal" for="inputNewAddress">New Billing Address</label>
                    <div class="form-label-group">
                        <input type="text" id="inputNewAddress" name="inputNewAddress" class="form-control input-text input-widthinput-width" placeholder="My New Billing Address" value="" maxLength="100">
                    </div>
                    <br>                
                    <button class="btn btn-sm login-button" type="submit" id="btn-billing" name="btn-billing">Change</button>
                    <br>
                    <br>
                </form>
            </div>
        </div>

        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text-white text-center" id="privacy">Privacy Setting</h3>
            </div>
            <div class="panel-body container">
                <ul>
                    <h3 class="text-teal">Delete account <img src="<?= $noEntry; ?>" class="icon"/></h3>
                    <li><p>Request to remove your account, together with all your personal data, will be processed by our staff.</p></li>
                    <li><p>Deleting your account will remove all the purchase history, discounts, orders, invoices and all other information that might be related to your account or your purchases.</p></li>                        
                    <li><p>All your orders and similar information will be lost.</p></li>
                    <li><p>You will not be able to restore access to your account after we approve your removal request.</p></li>
                    <li>
                        <form>
                            <input type="checkbox"/> 
                            <label for="">I understand and I want to delete my account.</label>
                            <br>
                            <button class="btn btn-sm login-button" type="submit" id="btn-delete" name="btn-delete">Submit Request</button>
                            <br>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>

<?php require('../../common/footer.php');?>
