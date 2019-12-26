<?php
session_start();
if($_SESSION['article']){
    $data = $_SESSION['article'];
    echo $data;
}
else{
    $data=NULL;
    echo $data;
}
?>