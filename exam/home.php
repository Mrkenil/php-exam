<?php

include("config/config.php");

$config = Config();

$res = $config->connect();

if($res){
    echo "kenil";
}else{
    echo "om";
}

?>