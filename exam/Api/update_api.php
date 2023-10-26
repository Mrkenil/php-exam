<?php

include("../config/config.php");
header("Access-Control-Allow-Methods: PUT");

$config = new Config();

if($_SERVER['REQUEST_METHOD'] == 'PUT'){
    $input = file_get_contents("php://input");
    parse_str($input,$_UPDATE);

    $name = $_UPDATE['name'];
    $pincod = $_UPDATE['pincod'];
    $id = $_UPDATE['id'];

    $res = $config->update($name,$pincod,$id);

    if($res){
        $arr['data'] = "Record update successfully....";
    }else{
        $arr['data'] = "Record updation Failed.....";
    }

}else{
    $arr['error'] = "..................";
}

echo json_encode($arr);


?>