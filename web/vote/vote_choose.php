<?php
session_start();
require 'asset/db_connect.php';

if ($_SESSION["digit"])
{
  $digit = $_SESSION["digit"];
  $id_vote = $_SESSION["id_vote"];

  if ($_GET["choose_type"])
  {
    $choose_type = $_GET["choose_type"];
    $sql_find = "SELECT * FROM web11_ultraline_work_student INNER JOIN web11_ultraline_data_student ON web11_ultraline_work_student.im11_ultraline_data_student = web11_ultraline_data_student.im11_ultraline_data_student WHERE im11_work_type = $choose_type";
    $query_choose = mysqli_query($conn, $sql_find);
    $num_rows = mysqli_num_rows($query_choose);

    if($num_rows > 0)
    {
      ?>
      <!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <title>Choose Student</title>
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
                  <div class="logo_center">
                    <img class="logo_topic" src="image/logo.png" alt="logo">
                  </div>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li><a href="vote_catagory.php">HOME<span class="sr-only">(current)</span></a></li>
                    <li><a href="vote_choose.php?choose_type=1" <?php if($_GET["choose_type"]=='1') { echo'class="active"'; } ?>>IOT</a></li>
                    <li><a href="vote_choose.php?choose_type=5" <?php if($_GET["choose_type"]=='5') { echo'class="active"'; } ?>>APPLICATION IOS</a></li>
                    <li><a href="vote_choose.php?choose_type=2" <?php if($_GET["choose_type"]=='2') { echo'class="active"'; } ?>>BASE ON DESKTOP</a></li>
                    <li><a href="vote_choose.php?choose_type=6" <?php if($_GET["choose_type"]=='6') { echo'class="active"'; } ?>>WEB MOBILE</a></li>
                    <li><a href="vote_choose.php?choose_type=3" <?php if($_GET["choose_type"]=='3') { echo'class="active"'; } ?>>ANDROID</a></li>
                    <li><a href="vote_choose.php?choose_type=7" <?php if($_GET["choose_type"]=='7') { echo'class="active"'; } ?>>TABLET</a></li>
                    <li><a href="vote_choose.php?choose_type=4" <?php if($_GET["choose_type"]=='4') { echo'class="active"'; } ?>>UNITY</a></li>
                    <li><a href="vote_choose.php?choose_type=8" <?php if($_GET["choose_type"]=='8') { echo'class="active"'; } ?>>INTERACTIVE IOS</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                      </ul>
                    </li>
                  </ul>
                </div><!-- .navbar-collapse -->
              </div><!-- .container-fluid -->
            </nav> <!-- navbar navbar-default -->
            <div class="container">
              <div class="col-xs-12 in_topic">
                <?php if($_GET["choose_type"] === '1'){?> <h3 class="topic_h3">IOT (Internet Of Thing)</h3> <?php } ?>
                <?php if($_GET["choose_type"] === '5'){?> <h3 class="topic_h3">APPLICATION IOS</h3> <?php } ?>
                <?php if($_GET["choose_type"] === '2'){?> <h3 class="topic_h3">BASE ON DESKTOP</h3> <?php } ?>
                <?php if($_GET["choose_type"] === '6'){?> <h3 class="topic_h3">WEB MOBILE</h3> <?php } ?>
                <?php if($_GET["choose_type"] === '3'){?> <h3 class="topic_h3">ANDROID</h3> <?php } ?>
                <?php if($_GET["choose_type"] === '7'){?> <h3 class="topic_h3">TABLET</h3> <?php } ?>
                <?php if($_GET["choose_type"] === '4'){?> <h3 class="topic_h3">UNITY</h3> <?php } ?>
                <?php if($_GET["choose_type"] === '8'){?> <h3 class="topic_h3">INTERACTIVE IOS</h3> <?php } ?>
              </div>
            <form  action="asset/check_vote.php" method="post">
            <?php
              while ($row = mysqli_fetch_assoc($query_choose))
              {
                $student_user_id = $row["im11_ultraline_data_student"];
                $image_stu = $row["im11_student_image"];
                $image_work = $row["im11_work_image"];
                ?>
                <div class="col-xs-6 cover-box">
                  <div class="boxchoose">
                    <div class="imgbox">
                      <img src="image_vote/work/<?php echo $image_work; ?>" alt="Image Work">
                    </div>
                    <div class="imgstudent">
                      <img src="image_vote/student/<?php echo $image_stu; ?>" alt="student">
                    </div>
                    <h1><?php echo $work_title = $row["im11_work_title"]; ?></h1>
                    <p><?php echo $work_discription = $row["im11_work_discription"]; ?></p>
                    <button class="bt-vote" type="submit" name="data_id" onclick="return confirm('ต้องการโหวตใช่หรือไม่');" value="<?php echo $student_user_id; ?>">โหวตให้คะแนน</button>
                  </div>
                </div>
                <?php
              }
             ?>
             </form>
           </div> <!-- container -->
         </div> <!-- mobile only -->
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
      <?php
    }
    else
    {
      header('Location: error_page.php');
    }
  }
  else
  {
      header('Location: error_page.php');
  }
}
else
{
  header('Location: error_page.php');
}

 ?>
