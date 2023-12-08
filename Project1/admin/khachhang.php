<?php  $list = listkhachhang(); ?>
<div id="danhsach">
    <h1>Danh sách khach hang</h1>
    <div class="dshead">
       <div>Id Khach hang</div><div>Tên khach hang</div><div>email</div><div>so dien thoai</div><div></div>
    </div>
    <?php foreach($list as $row){?>
    <div class="dsdata">
       <div><?php echo $row['id_user'];?></div>
       <div><?php echo $row['ho'] . $row['ten'];?></div>
       <div><?php echo $row['email'];?></div>
       <div><?php echo $row['dienthoai'];?></div>
       <div><a href="xoakh.php?id=<?=$row[0]?>">xoa</a>
       </a></div>
    </div><?php } ?>
</div>
<style>
    #danhsach { width: 1000px; margin: auto;;}
#danhsach > h1 {background: darkblue; padding: 10px; color:white;font-size: 24px;}
#danhsach > div {display: grid; grid-template-columns: 90px 400px 300px 150px 50px;}
#danhsach .dshead { font-weight: bold; font-size: 20px;}
#danhsach > div > div {border: 1px solid darkblue; padding: 10px; text-align: center;}
#danhsach a {text-decoration: none; color: wheat;font-weight: bold;}
#danhsach a:hover { text-decoration: underline; color: black;}

</style>