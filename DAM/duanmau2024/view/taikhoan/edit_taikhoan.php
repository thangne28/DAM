<main class="catalog  mb ">

          
          <div class="boxleft">
          <div class="mb">
          <div class="box_title">Cập nhật tài khoản</div>
      <div class="box_content form_account">

      <?php
      if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
        extract($_SESSION['user']);
      }
      ?>
        <form action="index.php?act=edit_taikhoan" method="post">
          <div>
            <p style="float: left;">Email</p>
            <input type="email" name="email" value="<?=$email?>">
          </div>

          <div>
            <p style="float: left;">Tên đăng nhập</p>
            <input type="text" name="user"  value="<?=$user?>">
          </div>

          <p style="float: left;">Mật khẩu</p>
          <div >
            <input type="password" name="pass"  value="<?=$pass?>">
          </div>

          <p style="float: left;">Địa chỉ</p>
          <div >
            <input type="text" name="address"  value="<?=$address?>">
          </div>

          <p style="float: left;">Điện thoại</p>
          <div >
            <input type="text" name="tel"  value="<?=$tel?>">
          </div>

          <input type="hidden" name="id" value="<?=$id?>">
          <input type="submit" value="Cập nhật" name="capnhat">
          <input type="reset" value="Nhập lại">
        </form>
        <h3 class="thongbao">
         <?php
   if(isset($thongbao)&&($thongbao!="")){
        echo $thongbao;
   }
        ?>
        </h3>
      </div>

    </div>
          </div>
   
          <div class="boxright">
           <?php include "view/boxright.php" ?>
          </div>
         
      </main>