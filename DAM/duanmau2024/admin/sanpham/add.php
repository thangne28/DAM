
<div class="row2">
         <div class="row2 font_title">
          <h1>THÊM MỚI SẢN PHẨM</h1>
         </div>
         <div class="row2 form_content ">
          
          <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data" >

           <div class="row2 mb10 form_content_container">
           <label> Danh mục </label> <br>
            <select name="iddm" id="" style="float:left;">
                <?php
                foreach($listdanhmuc as $danhmuc){
                  extract($danhmuc);
                  echo '<option value="'.$id.'">'.$name.'</option>';
                }
                ?>
                
            </select>
           </div>

           <div class="row2 mb10">
            <label>Tên sản phẩm </label> <br>
            <input type="text" name="tensp" placeholder="nhập vào tên" >
           </div>

           <div class="row2 mb10">
            <label>Giá sản phẩm </label> <br>
            <input type="text" name="giasp" placeholder="nhập vào giá" >  
           </div>

           <div class="row2 mb10">
            <label>Hình ảnh sản phẩm </label> <br>
            <input type="file" name="hinh" placeholder="nhập vào hình ảnh" style="float:left" >
           </div>

           <div class="row2 mb10">
            <label>Mô tả sản phẩm </label> <br>
            <textarea name="mota" id="" cols="30" rows="10" style="float:left; width:100%;"></textarea>
           </div>

           <div class="row mb10 ">
         <input class="mr20" type="submit" value="THÊM MỚI" name='themmoi'>
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=listsp"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
           <?php 
           if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
           ?>
          </form>
         </div>
        </div>
 
     <!-- END HEADER -->

       
    </div>