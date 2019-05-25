<?php
    if(isset($_GET['delCar'])){
        $delCar = $_GET['delCar'];
        $sql = "DELETE FROM tbl_ordercarrental WHERE id = '$delCar'";
        $qry = mysqli_query($dbc,$sql);
        if($qry){
            echo "
                        <script>
                            $(document).ready(function(){
                            Swal.fire({
                                position: 'top-end',
                                type: 'success',
                                title: 'Item Removed from cart',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        });
                        </script>
                ";
                echo "<meta http-equiv='refresh' content='3;url=shopping-cart.php'>";
        }else{
            echo "<meta http-equiv='refresh' content='3;url=shopping-cart.php'>";
        }
    }

    if(isset($_GET['delHotel'])){
        $delHotel = $_GET['delHotel'];
        $sql = "DELETE FROM tbl_orderhotel WHERE id = '$delHotel'";
        $qry = mysqli_query($dbc,$sql);
        if($qry){
            echo "
                    <script>
                        $(document).ready(function(){
                        Swal.fire({
                            position: 'top-end',
                            type: 'success',
                            title: 'Item Removed from cart',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    });
                    </script>
                ";
                echo "<meta http-equiv='refresh' content='3;url=shopping-cart.php'>";
        }else{
            echo "<meta http-equiv='refresh' content='3;url=shopping-cart.php'>";
        }
    }

    
    if(isset($_GET['delPackage'])){
        $delPackage = $_GET['delPackage'];
        $sql = "DELETE FROM tbl_orderpackage WHERE id = '$delPackage'";
        $qry = mysqli_query($dbc,$sql);
        if($qry){
            echo "
                    <script>
                        $(document).ready(function(){
                        Swal.fire({
                            position: 'top-end',
                            type: 'success',
                            title: 'Item Removed from cart',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    });
                    </script>
                ";
                echo "<meta http-equiv='refresh' content='3;url=shopping-cart.php'>";
        }else{
            echo "<meta http-equiv='refresh' content='3;url=shopping-cart.php'>";
        }
    }

    
?>