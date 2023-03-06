<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Đăng Kí</title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="./asset/css/style.css">
</head>
<body>
<div class="main">
  <form action="" method="POST" class="form" id="form-1">
    <h3 class="heading">Thành viên đăng ký</h3>
    <p class="desc">Đăng kí thành viên chính thức để được nhận những ưu đãi ❤️</p>

    <div class="spacer"></div>

    <div class="form-group">
      <label for="fullname" class="form-label">Tên đầy đủ</label>
      <input id="fullname" name="fullname" type="text" placeholder="VD: Vũ Thành Long" class="form-control">
      <span class="form-message"></span>
    </div>

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

    <div class="form-group">
      <label for="password_confirmation" class="form-label">Nhập lại mật khẩu</label>
      <input id="password_confirmation" name="password_confirmation" placeholder="Nhập lại mật khẩu" type="password" class="form-control">
      <span class="form-message"></span>
    </div>

    <button class="form-submit">Đăng ký</button>
    <div class="span"><span >Đã có tài khoản <a href="./login.php">Đăng nhập</a></span></div>
  </form>

</div>
</body>
</html>