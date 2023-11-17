<?php
try{
   $sql="SELECT id_sp, ten_sp, gia, hinh
   FROM sanpham
   WHERE anhien=1 AND hot=1 ORDER BY ngay DESC LIMIT 0,9";
$sanphamnoibat = $conn->query($sql);
   }
   catch(PDOException $e){
        die('loi thuc thi sql' .$e->getMessage(). "<br>" .$sql);
   }
?>
<style>
  .product-container{
    width: 294px;
    height: 240px;
    padding: 5px;
    border: 5px solid #f5f5f5;
    background-color: #fff;
    float: left;
    padding-bottom: 18px;
  }
  .product{
    width: 294px;
    height: auto;
  }
  .product>a>img{
    width: 235px;
    height: 235px;
    margin: 0 19px 0 19px;
  }
</style>
<div class="container-product">
              <div class="pro-head d-flex">
                                  <div class="title">
                                      <h5>
                                        <a href="/laptop-van-phong.html">HỌC TẬP - VĂN PHÒNG</a>
                                      </h5>
                                  </div>
                                  <div class="filter-price d-flex align-items-center">
                                    <div class="product-list">   
                                          <h6><span>Mức giá:</span></h6>
                                          <ul class="d-flex m-0 list-unstyled">
                                            <li>
                                              <a href="/laptop-mong-nhe.html?max=10000000&amp;min=5000000">5 Triệu - 10 Triệu</a>
                                            </li>
                                            <li>
                                              <a href="/laptop-mong-nhe.html?max=20000000&amp;min=10000000">10 Triệu - 20 Triệu</a>
                                            </li>
                                            <li>
                                              <a href="/laptop-mong-nhe.html?max=30000000&amp;min=20000000">20 Triệu - 30 Triệu</a>
                                            </li>
                                            <li>
                                              <a href="/laptop-mong-nhe.html?max=40000000&amp;min=30000000">30 Triệu - 40 Triệu</a>
                                            </li>
                                            <li>
                                              <a href="/laptop-mong-nhe.html?max=400000000&amp;min=40000000">Trên 40 Triệu</a>
                                            </li>
                                          </ul>
                                      </div> 
                                  </div>
                              </div>

                            
                <div class="sanpham">
                      <?php foreach ($sanphamnoibat as $sp) { ?>
                          <section class="product-container">
                                <div class="product">
                                <a href="index.php?page=sp&id=<?php echo $sp[0] ?>"> 
                                  <img src="<?php echo $sp[3]?>"> 
                                </a>
                                    <h2>
                                      <a href="index.php?page=sp&id=<?php echo $sp[0] ?>"><?php echo $sp[1]?></a>
                                    </h2>
                                    <p class="price"><?php echo $sp[2]?>VND</p>
                                    <p>Mô tả ngắn về sản phẩm. Mô tả ngắn về sản phẩm. Mô tả ngắn về sản phẩm.</p>
                                    

                                <!-- Thêm các sản phẩm khác tương tự -->

                            </section>
                  </div>
                  <?php } ?>
        </div>