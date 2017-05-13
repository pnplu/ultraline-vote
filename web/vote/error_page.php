<?php
session_start();
session_destroy();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Error</title>
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
        </div>
        <div class="row formback">
          <div class="col-xs-12">
            <h1>เกิดข้อผิดพลาดบางประการ</h1>
            <div class="col-xs-offset-4 col-xs-4">
              <a href="index.php"><button type="button" class="bt-back" name="button">กลับ</button></a>
            </div>
          </div>
        </div>
      </div>
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
