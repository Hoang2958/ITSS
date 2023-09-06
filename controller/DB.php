<?php
class Database {
    public $link;
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "health";

    
    public $error;


    public function __construct()
    {
        $this->connectDB();
    }

    private function connectDB(){
        $this->link = mysqli_connect($this->servername,$this->username,$this->password,$this->dbname);
        if($this->link){
            $this->error = "Connection fail".$this->link->connect_error;
            return false;
        }
    }

    // select or read data
    public function select($query){
        $result = $this->link->query($query) or die($this->link->error.__LINE__);
        if($result->num_rows > 0){
            return $result;
        }
        else{
            return false;
        }
    }

    // insert data
    public function insert($query){
        $insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
        if($insert_row)
            return $insert_row;
        else
            return false;
    }

    // update data
    public function update($query){
        $update_row = $this->link->query($query) or die($this->link->error.__LINE__);
        if($update_row)
            return $update_row;
        else
            return false;
    }

    // delete data
    public function delete($query){
        $delete_row = $this->link->query($query) or die($this->link->error.__LINE__);
        if($delete_row)
            return $delete_row;
        else
            return false;
    }


}


?>