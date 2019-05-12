<?php

Class MealType
{
    public $mealType;
    public $price;
    private $conn;

    /**
     * days constructor.
     * @param $conn
     */
    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    /**
     * @return mixed
     */
    public function getMealType()
    {
        return $this->mealType;
    }

    /**
     * @param mixed $mealType
     */
    public function setMealType($mealType)
    {
        $this->mealType = $mealType;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @param $mealType
     * @param $price
     * @return bool|mysqli_result
     */
    public function addMealType($mealType, $price)
    {
        //build insert sql query
        $sql = "INSERT INTO tbl_meal_type (meal_type, price) VALUES ('$mealType', $price)";
        //run mysql query
        $query = mysqli_query($this->conn, $sql);

        return $query;
    }

    /**
     * @return array
     */
    public function selectAllMealtype()
    {
        //build mysql query
        $sql = "SELECT * FROM tbl_meal_type";
        //run mysql query
        $query  = mysqli_query($this->conn, $sql);

        //check if query is run
        if($query){
            //array select value
            $result = [];
            while($row = mysqli_fetch_array($query)){
                $result[] = [
                    'id'    => $row['id'],
                    'meal_type'  => $row['meal_type'],
                    'price'  => $row['price'],
                ];
            }

            return $result;
        } else {
            return [];
        }
    }

    /**
     * @param int $id
     * @return array
     */
    public function selectMtById($id)
    {
        //build mysql query
        $sql = "SELECT * FROM tbl_meal_type WHERE id = '$id'";
        //run mysql query
        $query  = mysqli_query($this->conn, $sql);

        if($query){
            //array select value
            $result = [];
            while($row = mysqli_fetch_array($query)){
                $result = [
                    'id'    => $row['id'],
                    'meal_type'  => $row['meal_type'],
                    'price'  => $row['price'],
                ];
            }

            return $result;
        } else {
            return [];
        }
    }

    /**
     * @param $id
     * @param $mealType
     * @param $price
     * @return bool|mysqli_result
     */
    public function updateMt($id, $mealType, $price)
    {
        //build mysql query
        $sql = "UPDATE tbl_meal_type SET meal_type = '$mealType', price = '$price' WHERE id = '$id'";
        //run mysql query
        $query  = mysqli_query($this->conn, $sql);

        return $query;
    }

    /**
     * @param $id
     * @return bool|mysqli_result
     */
    public function removeMt($id)
    {
        //build mysql query
        $sql = "DELETE FROM tbl_meal_type WHERE id='$id'";
        //run mysql query
        $query  = mysqli_query($this->conn, $sql);

        return $query;
    }
}

//New rt obj
$mt = new MealType($dbc);

if(!empty($_SERVER['QUERY_STRING'])){
    $actionType = $_GET['action'];
    $mtId       = $_GET['id'];

    if($actionType == "update"){
        //display current rt value
        $cMt = $mt->selectMtById($mtId)['meal_type'];
        $cprice = $mt->selectMtById($mtId)['price'];
        $state = "Update";
    } else {
        //delete rt value
        if($mt->removeMt($mtId)){
            echo "<script>alert('Meal type is deleted'); window.location = '".$_SERVER['PHP_SELF']."';</script>";
        }
    }
} else {
    //used in btn
    $state = "Add";
}

//when submit form (add/update meal type)
if($_SERVER['REQUEST_METHOD'] == "POST"){
    /*Add meal type value*/
    //set posted meal type value to obj, remove white space and round the value
    $mt->setMealType(trim($_POST['txtmt']));
    $mt->setPrice(trim(round($_POST['txtprice'])));

    //check if posted value is numeric
    if(is_numeric($mt->getPrice()) && $mt->getPrice() > 0){
        if(!empty($_SERVER['QUERY_STRING'])){
            if($mt->updateMt($mtId, $mt->getMealType(), $mt->getPrice())) {
                $msg = "Meal type is updated";
            } else {
                $msg = "Cannot update meal type, please try again";
            }
        } else {
            //Add meal type to db
            $queryState = $mt->addMealType($mt->getMealType(), $mt->getPrice());

            if($queryState){
                $msg  = "Meal type is saved.";
            } else {
                $msg = "Meal type is not saved, please try again.";
            }
        }

        echo "<script>alert('".$msg."'); window.location = '".$_SERVER['PHP_SELF']."';</script>";

    } else {
        $priceErrMsg = "Days values should be numeric and greater than zero";
    }
}

