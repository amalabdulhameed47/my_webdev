<?php
$array=explode('.', $_SERVER['REMOVE_ADDR']);
if(($array[0]=='143')) {
header('location:study1.html');
else {
    echo("You are not authorized");
    die();
}

}
?>