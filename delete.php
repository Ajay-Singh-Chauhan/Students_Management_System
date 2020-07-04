<?php include 'header.php';
include 'config.php'; ?>
<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>
      <?php if(isset($_POST['showbtn'])) {?>
        <form class="post-form" action="delete2.php" method="post">
          <?php $sql1="select sid, sname from students where sid={$_POST['sid']}";
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
      <?php } ?>
      </div>
      </body>
      </html>
