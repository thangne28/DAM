<div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH SẢN PHẨM </h1>
         </div>
         <form action="index.php?act=listsp" method="post" style="margin: 30px 0px;">
            <input type="text" name=kyw style="float:left;margin: 10px 0px;" >
            <select name="iddm" style="float:left;margin: 10px 0px;" >
            <option value="0" selected>Tất cả</option>
                <?php   
                 foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    echo '<option value="'.$id.'">'.$name.'</option>';
                  }
                ?>
            </select>
            <input name="listok" type="submit" value="GO" style="float:left;margin: 10px 0px;">
            
            </form>
         <div class="row2 form_content ">

          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
        

           <table>
            <tr>
                <th></th>
                <th>MÃ SẢN PHẨM</th>
                <th>TÊN SẢN PHẨM</th>
                <th>HÌNH</th>
                <th>GIÁ</th>
                <th>LƯỢT XEM</th>
                <th></th>
            </tr>
            <?php
            foreach($listsanpham as $sanpham){
                extract($sanpham);
                $suasp="index.php?act=suasp&id=".$id;
                $xoasp="index.php?act=xoasp&id=".$id;
                $hinhpath="../upload/".$img;
                if(is_file($hinhpath)){
                    $hinh="<img src='".$hinhpath."' height='80'>";
                }else{
                    $hinh="....";
                }
                
                echo 
                '<tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>'.$id.'</td>
                <td>'.$name.'</td>
                <td>'.$hinh.'</td>
                <td>'.$price.'</td>
                <td>'.$luotxem.'</td>
                <td><a href="'.$suasp.'"><input type="button" value="Sửa">
                </a> <a href="'.$xoasp.'"><input type="button" value="Xóa"></a>
                </td>
                </tr>';
            }

            ?>
                      
            
           </table>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
         <a href="index.php?act=addsp"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
           </div>
          </form>
         </div>
        </div>



       
    </div>