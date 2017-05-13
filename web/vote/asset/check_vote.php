<?php
session_start();
require 'db_connect.php';

if ($_SESSION["digit"])
{
  $digit = $_SESSION["digit"];
  $id_vote = $_SESSION["id_vote"];
  $student_data_id = $_POST["data_id"];

  $sql_update_vote = "UPDATE web11_ultraline_vote SET im11_member_id = $student_data_id, im11_status = 1, im11_datetime = NOW() WHERE im11_digit = $digit AND im11_vote_id = $id_vote";
  $query_update = mysqli_query($conn, $sql_update_vote);

  mysqli_close($conn);

  header('Location: ../vote_success.php');
}
else
{
  header('Location: error_page.php');
}



 ?>
