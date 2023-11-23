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
function laysp_chitiet($id = 0 ){
    global $conn;
    try{
        $sql="SELECT sanpham.id_sp, ten_sp, gia, gia_km,hinh,ngay,RAM,CPU,Dia,Mausac,Cannang
        FROM sanpham, sanphamchitiet
        WHERE sanpham.id_sp=sanphamchitiet.id_sp AND sanpham.id_sp=$id";
     $sp = $conn->query($sql);
     return $sp;
        }
        catch(PDOException $e){
             die('loi thuc thi sql' .$e->getMessage(). "<br>" .$sql);
        }
}
function layloaisp(){
    global $conn;
    try{
        $sql="SELECT id_loai, ten_loai, thutu, anhien
        FROM loai
        WHERE anhien=1 ORDER BY thutu asc";
     $loaisp_arr = $conn->query($sql);
     return $loaisp_arr;
        }
        catch(PDOException $e){
             die('loi thuc thi sql' .$e->getMessage(). "<br>" .$sql);
        }
}
function laysp_trongloai($id=0, $page_num=1 , $page_size=9 ){
    global $conn;
    try{
        $start_row = ($page_num-1)* $page_size;
        $sql="SELECT id_sp, ten_sp, gia,hinh,ngay
        FROM sanpham WHERE id_loai=$id 
        ORDER BY ngay DESC LIMIT $start_row, $page_size";
     $sp = $conn->query($sql);
     return $sp;
        }
        catch(PDOException $e){
             die('loi thuc thi sql' .$e->getMessage(). "<br>" .$sql);
        }
}
function laytenloai($id = 0 ){
    global $conn;
    try{
        $sql="SELECT ten_loai FROM loai WHERE id_loai=$id ";
     $kq = $conn->query($sql);
     $row = $kq->fetch();
     return $row['ten_loai'];
        }
        catch(PDOException $e){
             die('loi thuc thi sql' .$e->getMessage(). "<br>" .$sql);
        }
}