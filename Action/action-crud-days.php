<?php

Class days
{
    public $days_number;
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
    public function getDaysNumber()
    {
        return $this->days_number;
    }

    /**
     * @param $days_number
     */
    public function setDaysNumber($days_number)
    {
        $this->days_number = $days_number;
    }

    /**
     * @param int $days_number
     * @return boolean
     */
    public function addDaysNumber($days_number)
    {
        //build insert mysql query
        $sql = "INSERT INTO tbl_days (days) VALUES ('$days_number')";
        //run mysql query
        $query = mysqli_query($this->conn, $sql);

        return $query;
    }

    /**
     * @return array
     */
    public function selectAllDays()
    {
        //build mysql query
        $sql = "SELECT * FROM tbl_days";
        //run mysql query
        $query  = mysqli_query($this->conn, $sql);

        //check if query is run
        if($query){
            //array select value
            $result = [];
            while($row = mysqli_fetch_array($query)){
                $result[] = [
                    'id'    => $row['id'],
                    'days'  => $row['days']
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
    public function selectDayById($id)
    {
        //build mysql query
        $sql = "SELECT * FROM tbl_days WHERE id = '$id'";
        //run mysql query
        $query  = mysqli_query($this->conn, $sql);

        if($query){
            //array select value
            $result = [];
            while($row = mysqli_fetch_array($query)){
                $result = [
                    'id'    => $row['id'],
                    'days'  => $row['days']
                ];
            }

            return $result;
        } else {
            return [];
        }
    }

    /**
     * @param $id
     * @param $days_number
     * @return bool|mysqli_result
     */
    public function updateDaysNumber($id, $days_number)
    {
        //build mysql query
        $sql = "UPDATE tbl_days SET days = '$days_number' WHERE id = '$id'";
        //run mysql query
        $query  = mysqli_query($this->conn, $sql);

        return $query;
    }

    public function removeDaysNumber($id)
    {
        //build mysql query
        $sql = "DELETE FROM tbl_days WHERE id='$id'";
        //run mysql query
        $query  = mysqli_query($this->conn, $sql);

        return $query;
    }
}

//New days obj
$day = new Days($dbc);

if(!empty($_SERVER['QUERY_STRING'])){
    $actionType = $_GET['action'];
    $dayId      = $_GET['id'];

    if($actionType == "update"){
        //display current day value
        $cDay = $day->selectDayById($dayId)['days'];
        $state = "Update";
    } else {
        //delete days value
        if($day->removeDaysNumber($dayId)){
            echo "<script>alert('days value is deleted'); window.location = '".$_SERVER['PHP_SELF']."';</script>";
        }
    }
} else {
    //used in btn
    $state = "Add";
}

//when submit form (add/update day)
if($_SERVER['REQUEST_METHOD'] == "POST"){
    /*Add days value*/
    //set posted day value to obj, remove white space and round the value
    $day->setDaysNumber(trim(round($_POST['txtdays'])));

    //check if posted value is numeric
    if(is_numeric($day->getDaysNumber())){
        if(!empty($_SERVER['QUERY_STRING'])){
            if($day->updateDaysNumber($dayId, $day->getDaysNumber())) {
                $msg = "Days value is updated";
            } else {
                $msg = "Cannot update days value, please try again";
            }
        } else {
            //Add days to db
            $queryState = $day->addDaysNumber($day->getDaysNumber());

            if($queryState){
                $msg  = "Days value is saved.";
            } else {
                $msg = "Days value is not saved, please try again.";
            }
        }

        echo "<script>alert('".$msg."'); window.location = '".$_SERVER['PHP_SELF']."';</script>";

    } else {
        $dayErrMsg = "Days values should be numeric";
    }
}

