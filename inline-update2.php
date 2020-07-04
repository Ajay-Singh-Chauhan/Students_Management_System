<?php
include "config.php";
if(isset($_POST['submit'])){

  $sql2="update students set sname='{$_POST['sname']}',sadress='{$_POST['saddress']}',sclass='{$_POST['sclass']}',phone='{$_POST['sphone']}' where sid={$_POST['sid']} ";

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
