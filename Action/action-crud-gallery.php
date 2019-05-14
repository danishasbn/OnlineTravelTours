<?php

Class Gallery
{
    const targetDir = __DIR__."\..\dashboard\uploadImages\\";

    public  $imgPath;
    private $conn;
    private $targetFile;
    private $imgType;
    private $file;
    private $fileName;

    /**
     * gallery constructor.
     * @param $conn
     */
    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    /**
     * @return mixed
     */
    public function getImgPath()
    {
        return $this->imgPath;
    }

    /**
     * @param mixed $imgPath
     */
    public function setImgPath($imgPath)
    {
        $this->imgPath = $imgPath;
    }

    /**
     * @param $file
     * @return array|bool
     */
    public function checkImg($file)
    {
        $check = getimagesize($file["fgalimg"]["tmp_name"]);

        return $check;
    }

    public function uploadImg($file)
    {
        $this->fileName   = basename($file["fgalimg"]["name"]);
        $this->targetFile = self::targetDir.$this->fileName;
        $this->imgType    = strtolower(pathinfo($this->targetFile, PATHINFO_EXTENSION));

        //build sql
        $sql = "INSERT INTO tbl_gallery (imagePath) VALUES ('$this->fileName')";

        if(self::checkImg($file)){
            if(move_uploaded_file($file["fgalimg"]["tmp_name"], $this->targetFile)){
                $query = mysqli_query($this->conn, $sql);

                if($query){
                    return true;
                } else {
                    return false;
                }

            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function allImg()
    {
        //build sql
        $sql    = "SELECT * FROM tbl_gallery";
        $query  = mysqli_query($this->conn, $sql);

        //check if query is run
        if($query){
            //array select value
            $result = [];
            while($row = mysqli_fetch_array($query)){
                $result[] = [
                    'id'    => $row['id'],
                    'imagePath'  => $row['imagePath']
                ];
            }

            return $result;
        } else {
            return [];
        }
    }

    public function selectImageById($id)
    {
        //build sql
        $sql    = "SELECT imagePath FROM tbl_gallery WHERE id = '$id'";
        $query  = mysqli_query($this->conn, $sql);

        if($query){
            //array select value
            $result = [];
            while($row = mysqli_fetch_array($query)){
                $result = [
                    'imagePath'  => $row['imagePath']
                ];
            }

            return $result;
        } else {
            return [];
        }
    }

    public function deleteImg($id)
    {
        $cImgPath = self::selectImageById($id);

        if(!empty($cImgPath)){
            unlink(self::targetDir.$cImgPath['imagePath']);
        }

        //build mysql query
        $sql = "DELETE FROM tbl_gallery WHERE id='$id'";
        //run mysql query
        $query  = mysqli_query($this->conn, $sql);

        return $query;
    }
}

//init gallery obj
$gallery = new Gallery($dbc);

if(!empty($_SERVER['QUERY_STRING'])){
    $imgId = $_GET['id'];

    //delete img
    if($gallery->deleteImg($imgId)){
        echo "<script>alert('Image is deleted'); window.location = '".$_SERVER['PHP_SELF']."';</script>";
    }

}

if(isset($_POST['btnUpload'])){
    if($gallery->uploadImg($_FILES)){
        echo "<script>alert('Photo uploaded and saved');</script>";
    } else {
        echo "<script>alert('Photo was not uploaded, please try again!');</script>";
    }
}