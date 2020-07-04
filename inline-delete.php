<?php
include 'config.php';

 include 'header.php';

 if(!isset($_GET['sid'])){
   header("Location: $hostname");
 }
 ?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="delete2.php" method="post">
      <?php $sql1="select sid, sname from students where sid={$_GET['sid']}";
      $r=mysqli_query($con,$sql1) or die();
      while($res=mysqli_fetch_assoc($r)) { ?>
      <div class="form-group">
          <input type="hidden" name="sid" value="<?php echo $res['sid']; ?>" />
      </div>
      <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" value="<?php echo $res['sname']; ?>"/>
      </div>
    <?php
    mysqli_close($con); } ?>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
