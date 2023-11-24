<?php 
if ( isset($_GET['id']) ==true){
    $id = $_GET['id'];
    settype($id, "int");
}
else $id=0;
$page_num=1;
if(isset($_GET['pn'])) $page_num = (int) $_GET['pn'];
if($page_num <= 0) $page_num = 1;
$page_size = 9;
$page_prev = $page_num -1;
$page_next = $page_num +1;
$listsp = laysp_trongloai($id, $page_num, $page_size);
$tenloai = laytenloai($id);
?>
<div id="sp_trongloai" >
<h3> <?php echo $tenloai ?></h3>
<div id="data" > 
<?php foreach($listsp as $sp) { ?>    
<div class="sp">
<h3> <a href="#"> <?php echo $sp[1]; ?> </a> </h3>
<a href="#"> <img src="<?php echo $sp[3]; ?> " > </a>
<p>Giá: <b><?php echo $sp[2]; ?></b> VNĐ </p>
<!-- <p> <button onclick="chonsp('<?=$sp[0]?>','<?=$sp[1]?>','<?=$sp[3]?>','<?=$sp[2]?>')">
 Chọn</button></p> -->
</div>
    <?php } ?>
</div>
<div class="phantrang">
   <?php if($page_prev>1) {?>
      <a href="index.php?page=loai&id =<?=$id?>&pn=<?$page_prev?>">trang truoc</a>
   <?php } ?>
   <?php if($page_next<100) {?>
      <a href="index.php?page=loai&id =<?=$id?>&pn=<?$page_prev?>">trang sau</a>
   <?php } ?>
</div>
</div>
<script>
   function chonsp(id,ten,hinh,gia){
      let cart = JSON.parse(localStorage.getItem('cart'));
      if(cart==null) cart = [];
      index = cart.findIndex(sp=>sp[0]==id);
      if ( index ==-1){
         cart.push([id,ten,hinh,gia,soluong=1]);
      }else{
         cart[index][4]++;
      }
      localStorage.setItem("cart", JSON.stringify(cart));
   }
</script>
<style>
   #sp_trongloai > #data {width: 200px;}
#sp_trongloai > #data >.sp {
 border: 1px solid darkblue; padding: 10px; text-align: center;
}
#sp_trongloai > #data >.sp h3 { height: 60px; line-height: 100%; font-size: 20px;}
#sp_trongloai > #data >.sp h3 a {text-decoration: none; color: black; }
#sp_trongloai > #data >.sp img {
 width: 96%; height: 180px; border: 1px solid black;
}
#sp_trongloai > #data >.sp > p:nth-child(3) {font-size:20px;margin:15px;color:rgb(125, 125, 125);}
#sp_trongloai > #data >.sp button { width: 90px; height: 30px; }
</style>
