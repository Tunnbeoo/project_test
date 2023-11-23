<?php 
//$loaisp_arr [
//   [1,'apple'] ,
 //    [2,'lenovo'] ,
 //     [3,'xiaomi'],
  //    [4,'huawei'],
  //    [5,'nokia'],
  //    [6,'combook']
//];
$loaisp_arr = layloaisp();

?>
<div class="menu" id="menu">
        <div class="container">
            <div class="d-flex position-relative menu-list">
                <div class="item js-hover-menu" data-id="42">                   
                    <span class="icon_root transition">
                        <img src="/media/category/cb_e90d157ceaa8bd152905d6b420c3bd29.png" alt=""></span>                   
                    <a href="/laptop-moi.html" class="root">LAPTOP MỚI</a>
                    <div class="sub_nav">
                      <div class="sub_filter">
                        <div class="list-unstyled sub_list-attr list_2col m-0 p-0 d-flex flex-wrap"> 
                            <div class="danhmuc-2">
                              
                              <div class="danhmuc-3 d-flex flex-wrap">
                                <div class="d-flex align-items item-3"><!--<i class="fa fa-angle-double-right" style="padding-right:3px;"></i>-->
                                <?php foreach($loaisp_arr as $loaisp) { ?>
        <li>
            <a href="index.php?page=loai&id=<?php echo $loaisp[0]?>">
            <?php echo $loaisp [1]?></a>
        </li>
<?php } ?>
                                </div>
                              </div>
                          	</div>
                            
                        </div>
                    </div>
                    </div>
                </div>
                <div class="item js-hover-menu" data-id="42">                   
                    <span class="icon_root transition">
                        <img src="/media/category/cb_e90d157ceaa8bd152905d6b420c3bd29.png" alt=""></span>                   
                    <a href="/laptop-moi.html" class="root">LAPTOP LIKE NEW</a>
                    <div class="sub_nav">
                      <div class="sub_filter">
                        <div class="list-unstyled sub_list-attr list_2col m-0 p-0 d-flex flex-wrap"> 
                            <div class="danhmuc-2">
                              
                              <div class="danhmuc-3 d-flex flex-wrap">
                                <div class="d-flex align-items item-3"><!--<i class="fa fa-angle-double-right" style="padding-right:3px;"></i>-->
                                <?php foreach($loaisp_arr as $loaisp) { ?>
        <li>
            <a href="index.php?page=loai&id=<?php echo $loaisp[0]?>">
            <?php echo $loaisp [1]?></a>
        </li>
<?php } ?>
                                </div>
                              </div>
                          	</div>
                            
                        </div>
                    </div>
                    </div>
                </div>
                
              	<div class="item js-hover-menu">
                    <span class="icon_root transition"><img src="https://laptopaz.vn/media/lib/hot-sale.png" alt=""></span>
                    <a href="/tin-khuyen-mai.html" class="root">KHUYẾN MÃI</a>
               </div>
              <div class="item js-hover-menu">
                    <span class="icon_root transition"><img src="https://laptopaz.vn/media/lib/tr-gp.png" alt=""></span>
                    <a href="/huong-dan-tra-gop.html" class="root">TRẢ GÓP</a>
               </div>
            </div>
        </div>
    </div>  