<?php

Class RoomType
{
    public $type;
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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
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
     * @param $roomType
     * @param $price
     * @return bool|mysqli_result
     */
    public function addRoomType($roomType, $price)
    {
        //build insert mysql query
        $sql = "INSERT INTO tbl_room_type (room_type, price) VALUES ('$roomType', $price)";
        //run mysql query
        $query = mysqli_query($this->conn, $sql);

        return $query;
    }

    /**
     * @return array
     */
    public function selectAllRoomtype()
    {
        //build mysql query
        $sql = "SELECT * FROM tbl_room_type";
        //run mysql query
        $query  = mysqli_query($this->conn, $sql);

        //check if query is run
        if($query){
            //array select value
            $result = [];
            while($row = mysqli_fetch_array($query)){
                $result[] = [
                    'id'    => $row['id'],
                    'room_type'  => $row['room_type'],
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
    public function selectRtById($id)
    {
        //build mysql query
        $sql = "SELECT * FROM tbl_room_type WHERE id = '$id'";
        //run mysql query
        $query  = mysqli_query($this->conn, $sql);

        if($query){
            //array select value
            $result = [];
            while($row = mysqli_fetch_array($query)){
                $result = [
                    'id'    => $row['id'],
                    'room_type'  => $row['room_type'],
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
     * @param $rt
     * @param $price
     * @return bool|mysqli_result
     */
    public function updateRt($id, $rt, $price)
    {
        //build mysql query
        $sql = "UPDATE tbl_room_type SET room_type = '$rt', price = '$price' WHERE id = '$id'";
        //run mysql query
        $query  = mysqli_query($this->conn, $sql);

        return $query;
    }

    /**
     * @param $id
     * @return bool|mysqli_result
     */
    public function removeRt($id)
    {
        //build mysql query
        $sql = "DELETE FROM tbl_room_type WHERE id='$id'";
        //run mysql query
        $query  = mysqli_query($this->conn, $sql);

        return $query;
    }
}

//New rt obj
$rt = new RoomType($dbc);

if(!empty($_SERVER['QUERY_STRING'])){
    $actionType = $_GET['action'];
    $rtId       = $_GET['id'];

    if($actionType == "update"){
        //display current rt value
        $cRt = $rt->selectRtById($rtId)['room_type'];
        $cprice = $rt->selectRtById($rtId)['price'];
        $state = "Update";
    } else {
        //delete rt value
        if($rt->removeRt($rtId)){
            echo "<script>alert('Room type is deleted'); window.location = '".$_SERVER['PHP_SELF']."';</script>";
        }
    }
} else {
    //used in btn
    $state = "Add";
}

//when submit form (add/update room type)
if($_SERVER['REQUEST_METHOD'] == "POST"){
    /*Add room type value*/
    //set posted room type value to obj, remove white space and round the value
    $rt->setType(trim($_POST['txtrtype']));
    $rt->setPrice(trim(round($_POST['txtprice'])));

    //check if posted value is numeric
    if(is_numeric($rt->getPrice()) && $rt->getPrice() > 0){
        if(!empty($_SERVER['QUERY_STRING'])){
            if($rt->updateRt($rtId, $rt->getType(), $rt->getPrice())) {
                $msg = "Room type is updated";
            } else {
                $msg = "Cannot update room type, please try again";
            }
        } else {
            //Add room type to db
            $queryState = $rt->addRoomType($rt->getType(), $rt->getPrice());

            if($queryState){
                $msg  = "Room type is saved.";
            } else {
                $msg = "Room type is not saved, please try again.";
            }
        }

        echo "<script>alert('".$msg."'); window.location = '".$_SERVER['PHP_SELF']."';</script>";

    } else {
        $priceErrMsg = "Days values should be numeric and greater than zero";
    }
}

