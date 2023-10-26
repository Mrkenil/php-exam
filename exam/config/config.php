<?php

class Config{

    public $HOSTNAME = "127.0.0.1";
    public $USERNAME = "root";
    public $PASSWORD = "";
    public $DB_NAME = 'kenil';
    public $con_res;

    public function connect(){
        $this->con_res = mysqli_connect($this->HOSTNAME,$this->USERNAME,$this->PASSWORD,$this->DB_NAME);
        return $this->con_res;
    }

    public function delete($id){
        $this->connect();

        $qury = "DELETE FROM cuntry_name WHERE id=$id";
        
        $res = mysqli_query($this->con_res,$qury);
        return $res;
    }

    public function update($name,$pincod,$id){
        $this->connect();

        $qury = "SELECT * FROM cuntry_name WHERE id=$id";

        $obj = mysqli_query($this->con_res,$qury);

        $qury = "UPDATE cuntry_name SET name='$name',pincod=$pincod WHERE id=$id";

        $res = mysqli_query($this->con_res,$qury);
        return $res;
    }
}

?>