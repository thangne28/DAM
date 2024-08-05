<main class="catalog  mb ">

          
          <div class="boxleft">
          <div class="mb">
          <div class="box_title">Đăng ký thành viên</div>
      <div class="box_content form_account">
        <form action="index.php?act=quenmk" method="post">
          <div>
            <p style="float: left;">Email</p>
            <input type="email" name="email" >
          </div>
      
          <input type="submit" value="Gửi" name="guiemail">
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