<?php
session_start();
require './db_connect.php';

if (isset($_POST["digit"]))
{
  $digit = $_POST["digit"];
  $sql_check_number = "SELECT im11_digit, im11_status, im11_vote_id FROM web11_ultraline_vote WHERE im11_digit = '$digit' ORDER BY im11_status ASC LIMIT 1";
  $query = mysqli_query($conn, $sql_check_number);
  while ($checks = mysqli_fetch_assoc($query))
  {
    $status = $checks["im11_status"];
    $id_vote = $checks["im11_vote_id"];
  }
  $num_rows = mysqli_num_rows($query);

  if ($num_rows > 0)
  {
    if ($status === '0')
    {
      $_SESSION["digit"] = $digit;
      $_SESSION["id_vote"] = $id_vote;
      header('Location: ../vote_catagory.php');
    }
    else
    {
      header('Location: ../vote_repete.php');
    }
  }
  else
  {
    header('Location: ../not_found_number.php');
  }
}
 ?>
