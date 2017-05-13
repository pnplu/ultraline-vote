<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Vote Ultraline</title>
    <link href="https://fonts.googleapis.com/css?family=Kanit:200,300,400" rel="stylesheet">
    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
    <link rel="icon" href="image/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/jquery-3.1.1.slim.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="mobile_only">
    <div class="container">
      <div class="row">
        <div class="col-xs-offset-3 col-xs-6">
          <img class="logo" src="image/logo_login.png" alt="logo">
        </div>
      </div> <!-- row -->
      <div class="row formlogin">
        <div class="col-xs-12">
          <h1>เข้าสู่ระบบ</h1>
          <form action="asset/check_number_user.php" method="post">
            <input type="text" style="background: none; border: none; border-bottom: 2px solid #e12a4d; color: #FFFFFF;" class="form-control" name="digit" placeholder="เบอร์โทรศัพท์ที่ใช้ลงทะเบียน ( 4 หลักสุดท้าย )" maxlength="4" pattern="\d{4}" required><br>
            <div class="col-xs-offset-1 col-xs-5">
              <button type="reset" style="background: linear-gradient(#bd58ff, #8148e3);" class="bt-reset" name="button">ยกเลิก</button>
            </div>
            <div class="col-xs-5">
              <button type="submit" style="background: linear-gradient(#a5e00f, #31af73);" class="bt-login" name="button">ยืนยัน</button>
            </div>

          </form>
        </div> <!-- col-xs-12 -->
      </div> <!-- row formlogin -->
    </div> <!-- container -->
  </div> <!-- mobile_only -->
  <div class="etc_screen">
    <div class="block_big_screen">
      <div class="position_img">
        <img class="logo" src="image/logo_r.png" alt="logo">
      </div>
      <h3 class="topic_big_screen">ขออภัยไม่สามารถเข้าใช้งานได้</h3>
      <p class="discrip_big_screen">เปิดเข้าใช้งานเฉพาะหน้า Mobile เท่านั้น</p>
      <a href="http://im11.ictsilpakorn.com">
        <div class="link_index">
          <button class="btn_back_index" type="button" name="button">กลับสู่หน้าเริ่มต้น</button>
        </div>
      </a>
    </div>
  </div> <!-- etc_screen -->
  </body>
</html>
