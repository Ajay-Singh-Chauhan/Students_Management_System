<?php include 'header.php';
include 'config.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>
      <?php if(isset($_POST['showbtn'])) {?>
    <form class="post-form" action="inline-update2.php" method="post">

      <?php $sql1="select * from students where sid={$_POST['sid']}";
      $r=mysqli_query($con,$sql1) or die();
      while($res=mysqli_fetch_assoc($r)) { ?>
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="sid"  value="<?php echo $res['sid']; ?>" />
            <input type="text" name="sname" value="<?php echo $res['sname']; ?>" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" value="<?php echo $res['sadress']; ?>" />
        </div>
        <div class="form-group">
        <label>Class</label>
        <select name="sclass">
            <option value="" selected disabled>Select Class</option>
            <?php $sql2="select * from studentclass";
            $r2=mysqli_query($con,$sql2) or die();
            while($res1=mysqli_fetch_assoc($r2)) {
              if($res1['cid']==$res['sclass']){
                echo "<option value='{$res1['cid']}' selected>{$res1['cname']}</option>";
              }
              else {
                echo "<option value='{$res1['cid']}'>{$res1['cname']}</option>";
              }

        } ?>
        </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="<?php echo $res['phone']; ?>" />
        </div>
      <?php } ?>
      <input class="submit" type="submit" name="submit" value="Update"/>
    </form>
  <?php } ?>
</div>
</div>
</body>
</html>
