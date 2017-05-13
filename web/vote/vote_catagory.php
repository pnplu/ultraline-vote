<?php
session_start();

if ($_SESSION["digit"])
{
  $digit = $_SESSION["digit"];
  $id_vote = $_SESSION["id_vote"];
}
else
{
  header('Location: error_page.php');
}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>เลือกประเภท</title>
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
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div> <!-- navbar-header -->
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="vote_catagory.php" class="active">HOME<span class="sr-only">(current)</span></a></li>
              <li><a href="vote_choose.php?choose_type=1">IOT</a></li>
              <li><a href="vote_choose.php?choose_type=5">APPLICATION IOS</a></li>
              <li><a href="vote_choose.php?choose_type=2">BASE ON DESKTOP</a></li>
              <li><a href="vote_choose.php?choose_type=6">WEB MOBILE</a></li>
              <li><a href="vote_choose.php?choose_type=3">ANDROID</a></li>
              <li><a href="vote_choose.php?choose_type=7">TABLET</a></li>
              <li><a href="vote_choose.php?choose_type=4">UNITY KINECT</a></li>
              <li><a href="vote_choose.php?choose_type=8">INTERACTIVE IOS</a></li>
            </ul> <!-- nav navbar-nav -->
            <ul class="nav navbar-nav navbar-right">
                </ul>
              </li>
            </ul>
          </div><!-- collapse .navbar-collapse -->
        </div><!-- .container-fluid -->
      </nav>
      <div class="container catagory">
      <div class="row">
        <div class="col-xs-offset-3 col-xs-6">
          <img class="logo2" src="image/logo_login.png" alt="logo">
        </div>
      </div> <!-- row -->
      <h1>ยินดีต้อนรับเข้าสู่การโหวตผลงานของ<br>นักศึกษาเพื่อเลือกผลงานที่เหมาะสมกับ<br>รางวัล Popular Vote</h1>

      <div class="row choose">
          <div class="col-xs-offset-1 col-xs-5">
            <a href="vote_choose.php?choose_type=1">
              <div class="bt-choose">
                IOT
              </div>
            </a>
          </div> <!-- col-xs-offset-1 col-xs-5 -->
          <div class="col-xs-5">
            <a href="vote_choose.php?choose_type=5">
              <div class="bt-choose">
                Application IOS
              </div>
            </a>
          </div> <!-- col-xs-5 -->
          <div class="col-xs-offset-1 col-xs-5">
            <a href="vote_choose.php?choose_type=2">
              <div class="bt-choose">
                Bass on Desktop
              </div>
            </a>
          </div> <!-- col-xs-offset-1 col-xs-5 -->
          <div class="col-xs-5">
            <a href="vote_choose.php?choose_type=6">
              <div class="bt-choose">
                Web Mobile
              </div>
            </a>
          </div> <!-- col-xs-5 -->
          <div class="col-xs-offset-1 col-xs-5">
            <a href="vote_choose.php?choose_type=3">
              <div class="bt-choose">
                Android
              </div>
            </a>
          </div> <!-- col-xs-offset-1 col-xs-5 -->
          <div class="col-xs-5">
            <a href="vote_choose.php?choose_type=8">
              <div class="bt-choose">
                Tablet
              </div>
            </a>
          </div> <!-- col-xs-5 -->
          <div class="col-xs-offset-1 col-xs-5">
            <a href="vote_choose.php?choose_type=4">
              <div class="bt-choose">
                Unity Kinect
              </div>
            </a>
          </div> <!-- col-xs-offset-1 col-xs-5 -->
          <div class="col-xs-5">
            <a href="vote_choose.php?choose_type=8">
              <div class="bt-choose">
                Interactive iOS
              </div>
            </a>
          </div> <!-- col-xs-5 -->
      </div> <!-- row choose -->
    </div> <!-- container catagory -->
  </div> <!-- mobile only -->
  <div class="etc_screen">
    <div class="block_big_screen">
      <div class="position_img">
        <img class="logo" src="image/logo_r.png" alt="logo">
      </div>
      <h3 class="topic_big_screen">ขออภัยไม่สามารถเข้าใช้งานได้</h3>
      <p class="discrip_big_screen">เปิดเข้าใช้งานเฉพาะหน้า Mobile เท่านั้น</p>
      <a href="http://im11.ictsilpakorn.com"><div class="link_index"><button class="btn_back_index" type="button" name="button">กลับสู่หน้าเริ่มต้น</button></div></a>
    </div>
  </div> <!-- etc_screen -->
  </body>
</html>
