<?php 
if ( isset($_GET['id'])==true){
   $id = $_GET['id']; settype($id, "int");

}
else $id=0;
require_once "../functions.php";
$kq = xoa1loai($id);
if($kq==true) header("location: admin?page=dsloai")
?>