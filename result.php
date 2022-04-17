<?php

$name = filter_input(INPUT_POST, 'name');
$pass = filter_input(INPUT_POST,'password');


if(empty($name)){
    echo $name_error = 'Please Insert Your Name';
}elseif(strlen($name) < 6){
    echo $name_error = 'Name must have minimum 6 characters';
}


if(empty($pass)){
    echo $pass_error = 'Please Insert Your Name';
}elseif(strlen($name) < 6){
    echo $name_error = 'Name must have minimum 6 characters';
}


include("index.php");
?>