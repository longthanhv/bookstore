
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="./asset/css/style.css">
</head>
<body>
<div class="main">
  <form action="" method="POST" class="form" id="form-1">
    <h3 class="heading">Thành viên đăng nhập</h3>
    <p class="desc">Đăng để mua hàng một cách nhanh chóng chính xác ❤️</p>

    <div class="spacer"></div>
    <div class="form-group">
      <label for="email" class="form-label">Email</label>
      <input id="email" name="email" type="text" placeholder="VD: email@gmail.com" class="form-control">
      <span class="form-message"></span>
    </div>
    <div class="form-group">
      <label for="password" class="form-label">Mật khẩu</label>
      <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control">
      <span class="form-message"></span>
    </div>
    <button class="form-submit">Đăng Nhập</button>
    <div class="span"><span >Chưa có tài khoản <a href="./register.php">Đăng ký</a></span></div>
  </form>

</div>
</body>
</html>