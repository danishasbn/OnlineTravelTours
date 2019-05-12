<?php

Class Occupacy
{
    public $occupacy;
    public $occupacy_value;
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
    public function getOccupacy()
    {
        return $this->occupacy;
    }

    /**
     * @param mixed $occupacy
     */
    public function setOccupacy($occupacy)
    {
        $this->occupacy = $occupacy;
    }

    /**
     * @return mixed
     */
    public function getOccupacyValue()
    {
        return $this->occupacy_value;
    }

    /**
     * @param mixed $occupacy_value
     */
    public function setOccupacyValue($occupacy_value)
    {
        $this->occupacy_value = $occupacy_value;
    }

    /**
     * @param $occupacy
     * @param $occupacy_value
     * @return bool|mysqli_result
     */
    public function addOccupacy($occupacy, $occupacy_value)
    {
        //build insert mysql query
        $sql = "INSERT INTO tbl_occupacy (occupacy, occupacy_value) VALUES ('$occupacy', $occupacy_value)";
        //run mysql query
        $query = mysqli_query($this->conn, $sql);

        return $query;
    }

    /**
     * @return array
     */
    public function selectAllOccupacy()
    {
        //build mysql query
        $sql = "SELECT * FROM tbl_occupacy";
        //run mysql query
        $query  = mysqli_query($this->conn, $sql);

        //check if query is run
        if($query){
            //array select value
            $result = [];
            while($row = mysqli_fetch_array($query)){
                $result[] = [
                    'id'    => $row['id'],
                    'occupacy'  => $row['occupacy'],
                    'occupacy_value'  => $row['occupacy_value'],
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
    public function selectOccupacyById($id)
    {
        //build mysql query
        $sql = "SELECT * FROM tbl_occupacy WHERE id = '$id'";
        //run mysql query
        $query  = mysqli_query($this->conn, $sql);

        if($query){
            //array select value
            $result = [];
            while($row = mysqli_fetch_array($query)){
                $result = [
                    'id'    => $row['id'],
                    'occupacy'  => $row['occupacy'],
                    'occupacy_value'  => $row['occupacy_value'],
                ];
            }

            return $result;
        } else {
            return [];
        }
    }


    public function updateOccupacy($id, $occupacy, $occupacy_value)
    {
        //build mysql query
        $sql = "UPDATE tbl_occupacy SET occupacy = '$occupacy', occupacy_value = '$occupacy_value' WHERE id = '$id'";
        //run mysql query
        $query  = mysqli_query($this->conn, $sql);

        return $query;
    }

    /**
     * @param $id
     * @return bool|mysqli_result
     */
    public function removeOccupacy($id)
    {
        //build mysql query
        $sql = "DELETE FROM tbl_occupacy WHERE id='$id'";
        //run mysql query
        $query  = mysqli_query($this->conn, $sql);

        return $query;
    }
}

//New rt obj
$occupacy = new Occupacy($dbc);

if(!empty($_SERVER['QUERY_STRING'])){
    $actionType = $_GET['action'];
    $occupacyId       = $_GET['id'];

    if($actionType == "update"){
        //display current occupacy value
        $cOccupacy = $occupacy->selectOccupacyById($occupacyId)['occupacy'];
        $cOccupacyValue = $occupacy->selectOccupacyById($occupacyId)['occupacy_value'];
        $state = "Update";
    } else {
        //delete occupacy value
        if($occupacy->removeOccupacy($occupacyId)){
            echo "<script>alert('Occupacy is deleted'); window.location = '".$_SERVER['PHP_SELF']."';</script>";
        }
    }
} else {
    //used in btn
    $state = "Add";
}

//when submit form (add/update Occupacy)
if($_SERVER['REQUEST_METHOD'] == "POST"){
    /*Add occupacy value*/
    //set posted occupacy value to obj, remove white space and round the value
    $occupacy->setOccupacy(trim($_POST['txtoccupacy']));
    $occupacy->setOccupacyValue(trim(round($_POST['txtoccupacyval'])));

    //check if posted value is numeric
    if(is_numeric($occupacy->getOccupacyValue()) && $occupacy->getOccupacyValue() > 0){
        if(!empty($_SERVER['QUERY_STRING'])){
            if($occupacy->updateOccupacy($occupacyId, $occupacy->getOccupacy(), $occupacy->getOccupacyValue())) {
                $msg = "Occupacy is updated";
            } else {
                $msg = "Cannot update occupacy, please try again";
            }
        } else {
            //Add occupacy to db
            $queryState = $occupacy->addOccupacy($occupacy->getOccupacy(), $occupacy->getOccupacyValue());

            if($queryState){
                $msg  = "Occupacy is saved.";
            } else {
                $msg = "Occupacy is not saved, please try again.";
            }
        }

        echo "<script>alert('".$msg."'); window.location = '".$_SERVER['PHP_SELF']."';</script>";

    } else {
        $cOccupacyValErrMsg = "Occupacy value should be numeric and greater than zero";
    }
}

