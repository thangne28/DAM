  <main class="catalog  mb ">

          
          <div class="boxleft">
          <div class="mb">
              <div class="box_title" style="color: red;font-size: 20px;"><?=$name?></div>
              <div class="box_content">
        <?php
        
        extract($onesp);
        $img=$img_path.$img;
        echo '<div style="text-align: center;"><img src="'.$img.'"> </div>';
        echo $mota;
        
        ?>
              </div>
           </div>
           <div class="mb">
            <div class="box_title">BÌNH LUẬN</div>
            <div class="box_content2  product_portfolio binhluan ">
                <table>
                    <?php foreach($binhluan as $value): ?>
                    <tr>
                        <td><?php echo $value['noidung']?> - </td>
                        <td><?php echo $value['iduser']?> - </td>
                        <td><?php echo date("d/m/Y", strtotime($value['ngaybinhluan'])) ?></td>
                    </tr>
                    <?php endforeach; ?>
                    
                </table>
            </div>
            <?php 
            ?>
            <?php 
            ?>
            <div class="box_search">
                <form action="index.php?act=sanphamct&idsp=<?=$id?>" method="POST">
                    <input type="hidden" name="idpro" value="<?=$id?>">
                    <input type="text" name="noidung">
                    <input type="submit" name="guibinhluan" value="Gửi bình luận">
                </form>
            </div>

        </div>
           
            
           <div class="mb">
              <div class="box_title">SẢN PHẨM CÙNG LOẠI</div>
              <div class="box_content" >
        <?php
          foreach($sanpham_cungloai as $sp_cungloai){
            extract($sp_cungloai);
            $linksp="index.php?act=sanphamct&idsp=".$id;
            echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
          }
        ?>
              </div>
           </div>
      </div>
   

          <div class="boxright">
           <?php include "boxright.php" ?>
          </div>
         
      </main>