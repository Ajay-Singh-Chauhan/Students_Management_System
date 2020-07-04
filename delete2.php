<?php
include "config.php";
if(isset($_POST['deletebtn'])){

  $sql2="delete from students where sid={$_POST['sid']}";

  $r=mysqli_query($con,$sql2) or die('q f');

  if($r){
    mysqli_close($con);
    header("Location: $hostname");
  }
  else {
    echo "query failed";
  }
  mysqli_close($con);
} ?>
