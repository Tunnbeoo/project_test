<?php 
$host="localhost";
$db_name="laptop";
$db_un="root";
$db_pw="";
$conn=null;
try{
$conn = new PDO("mysql:host=$host; dbname=$db_name; charset=utf8", $db_un, $db_pw);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    die('loi database' .$e->getMessage());
}
function layxemnhieu(){
    global $conn;
    try{
        $sql="SELECT id_sp, ten_sp, gia, hinh
        FROM sanpham
        WHERE anhien=1 AND hot=1 ORDER BY soluotxem DESC LIMIT 0,9";
     $kq = $conn->query($sql);
     return $kq;
        }
        catch(PDOException $e){
             die('loi thuc thi sql' .$e->getMessage(). "<br>" .$sql);
        }
}