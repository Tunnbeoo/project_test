<?php
if (isset($_POST['btn'])){
    $mota = $_POST['mota'];
    $f1 = $_FILES['f1']; //print_r($f1); 
    //[name=>a.png, type=>image/png ,tmp_name=>E:\tmp\p6C.tmp, size=>75628 ]    
    $filesize = $f1['size'];
    $filename = $f1['name'];
    $filetype = $f1['type'];
    $filepath = $f1['tmp_name'];
    $dest ="img/". $filename;
    $acceptType = ['image/png','image/jpeg','video/mp4'];
    $loi='';
    try {        
        if ($filesize>1024*200) $loi.='File lớn quá không upload nhé<br>';
        if ( in_array($filetype, $acceptType)==false) $loi.='Không nhận kiểu này<br>';
        move_uploaded_file($filepath, $dest);
        //thông báo thành công
        if (session_status() === PHP_SESSION_NONE) session_start();        
         $_SESSION['thongbao'] ='Đã gửi upload file.';
         header("location:index.php?page=thongbao");
    } catch (Exception $e) {
        echo "Có lỗi: " . $e;
    }
}//if
?>

<form action="" method="post" id="frmupload">
<h2>UPLOAD FILE</h2>
<div> <label>Chọn file </label> <input type="file" class="txt" name="f1">  </div>
<div> <label>Mô tả</label> <input class="txt" name="mota" type="text"> </div>
<div> <label></label> <button name="btn" type="submit">Upload</button> </div>
<div> 
<style>
#frmupload { width: 700px; margin: auto; border: 1px solid black; ;}
#frmupload h2 { background: black; color:white; padding: 10px; margin: 0; }
#frmupload > div { padding: 5px 10px;  }
#frmupload label {display: inline-block;  width: 100px; font-size: 20px}
#frmupload .txt { 
    padding: 5px;  width: calc(100% - 110px); outline: none;font-size: 18px;
    border: 1px dotted black;
}
#frmupload button{ width: 120px; height: 35px;}

</style>