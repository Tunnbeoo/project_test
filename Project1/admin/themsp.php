<form action="themsp_.php" method="post" id="frm1">
<h2>THÊM SẢN PHẨM</h2>
<div> 
    <label>Tên sản phẩm </label> <input type="text" class="txt" value="" name="ten_sp">
</div>
<div> 
    <label>id_sp </label> <input type="number" class="txt" min="1" name="id_sp">
</div>
<div> 
    <label>Ẩn hiện </label>
    <input type="radio" value="0" name="anhien"> Ẩn
    <input type="radio" value="1" name="anhien" checked> Hiện
</div>
<div> <label></label> <button type="submit">Lưu thông tin loại</button> </div>
</form>
<style>
    #frm1 { width: auto; margin: auto; border: 1px solid black;}
#frm1 h2 { background: dimgrey; color:white; padding: 10px; }
#frm1 div { padding: 10px 10px; border-bottom: 1px dotted black; }
#frm1 label {display: inline-block;width:120px }
#frm1 .txt { padding: 5px; width: calc(100% - 130px); outline: none;}
#frm1 button{ width: 120px; height: 30px;}

</style>