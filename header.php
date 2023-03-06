<header class="header">


   <div class="header-1">
      <div class="flex">
         <div class="share">
            <a href="#" class="fa-brands fa-facebook"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fa-brands fa-telegram"></a>
         </div>
         <p> Mới <a href="login.php">Đăng Nhập</a> | <a href="register.php">Đăng Kí</a> </p>
         
      </div>
   </div>
   <div class="header-2">
      <div class="flex">
         <a href="home.php" class="logo"><img class="image" src="./asset/img/logo.png"  alt=""></a>
         <div class="navbar blue">
            <a href="index.php">Trang Chủ</a>
            <a href="shop.php">Cửa Hàng</a>
            <a href="contact.php">Liên Hệ</a>
            <a href="favourite.php">Yêu Thích</a>
         </div>
         <div class="icons">
            <!-- <div id="menu-btn" class="fas fa-bars"></div> -->
            <a href="#search" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            
            <a href="cart.php" class="fas fa-shopping-cart"> </a>
         </div>
         <div class="user-box">
         <?php
                    // Include config file
                    require_once "config.php";
                    // Attempt select query execution
                    $sql = "SELECT * FROM users ";
                    $result = mysqli_query($conn, $sql);
                     
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)){
                        ?> 
      
                     <p>username : <span><?php echo $row['first_name'].' '.$row["last_name"] ?></span></p>
                     <p>email : <span><?php echo $row['email']; ?></span></p>
                      <?php 
                           
                        }
                    } else {
                        echo "0 results";
                    }
                   ?>
            <!-- <a href="logout.php" class="delete-btn">logout</a> -->
            <a href="logout.php" class="delete-btn">Logout</a>
         </div>
      </div>
   </div>

</header>