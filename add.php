<?php include 'header.php';
      include "config.php";?>
<div id="main-content">
    <h2>Add New Student Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" />
        </div>

        <div class="form-group">
          <?php $sql2="select * from studentclass";
                $res2=mysqli_query($con,$sql2) or die("query failed of course");
          ?>
            <label>Class</label>
            <select name="class">
              <option value="" disabled selected>Select Class</option>
              <?php while ($r=mysqli_fetch_assoc($res2)){
              echo "<option value='{$r['cid']}'>{$r['cname']}</option>";
              
            } ?>
            </select>
        </div>

        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" name="submit" type="submit" value="Save"  />
    </form>

</div>
</body>
</html>

<?php if(isset($_POST['submit'])){
  $sname = mysqli_real_escape_string($con,$_POST['sname']);
  $adress = mysqli_real_escape_string($con,$_POST['saddress']);
  $sclass = intval(mysqli_real_escape_string($con,$_POST['class']));
   //  var_dump($sclass);
  $phone = intval(mysqli_real_escape_string($con,$_POST['sphone']));

  $sql="insert into students (sname,sadress,sclass,phone)
  values ('{$sname}','{$adress}',{$sclass},{$phone})";
  $res=mysqli_query($con,$sql);
  if($res){
    mysqli_close($con);
    header("Location: $hostname");
  }
  else {
    echo "query failed";
    mysqli_close($con);
  }
} ?>
