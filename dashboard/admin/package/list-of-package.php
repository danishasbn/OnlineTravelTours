<?php require('../../../common/dashboard-common/header.php'); ?>
<?php require('../../../Action/action-list-of-package.php');?>

<!-- <img src="../../../Asset/images/car-rental/dashboard-small-2.png" alt="" class="img-fluid" style="margin:0 auto; height:50% !important; margin-top:50px; "> -->


<main class="col bg-faded py-3">
    <h3 class="text-left"> >> List  <small> <em> of Packages </em></small> <<</h3>  
    <form method="post" action= "<?= $_SERVER['PHP_SELF']; ?>" autocomplete="off">
        <table id="list-of-packages" class="table table-striped table-responsive table-bordered" style="width:100%">
            <thead>                
                <tr>
                    <th>-</th>                   
                </tr>
            </thead>
            <tbody>
                
            </tbody>       
        </table>
    </form>
</main>
<script>    
    $(document).ready(function() {
        $('#list-of-packages').DataTable({
             responsive: true
        });
    } );
</script>

<?php require('../../../common/dashboard-common/footer.php'); ?>
