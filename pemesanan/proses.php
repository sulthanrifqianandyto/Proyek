<?php

$host   = "localhost";
$user   = "root";
$pw     = "";
$db     = "proyek";

$con    = mysqli_connect($host,$user,$pw,$db);
if(!$con){
    die ("Koneksi berhasil");

}
mysqli_select_db($con,$db);
?>