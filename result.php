<?php

$name = filter_input(INPUT_POST, 'name');
$pass = filter_input(INPUT_POST,'password');


if(empty($name)){
    echo $name_error = 'Please Insert Your Name';
}
if(empty($pass)){
    echo $pass_error = 'Please Insert Your Name';
}

?>