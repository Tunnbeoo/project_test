<?php 
$ten_loai = trim(strip_tags($_POST['ten_sp']));
$id_loai = (int) $_POST['id_loai'];
$anhien = (int) $_POST['anhien'];
require_once "../functions.php";
$kq = chensp($ten_sp, $id_loai, $anhien);
if($kq == true) header('location: admin.php?page=thongvao');
?>
