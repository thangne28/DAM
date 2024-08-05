<main class="catalog  mb ">

          
          <div class="boxleft">
          <div class="mb">
          <div class="box_title">Đăng ký thành viên</div>
      <div class="box_content form_account">
        <form action="index.php?act=dangky" method="post">
          <div>
            <p style="float: left;">Email</p>
            <input type="email" name="email" >
          </div>
          <div>
            <p style="float: left;">Tên đăng nhập</p>
            <input type="text" name="user"  >
          </div>
          <p style="float: left;">Mật khẩu</p>
          <div >
            <input type="password" name="pass"  >
          </div>
          <input type="submit" value="Đăng ký" name="dangky">
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