<?php
include 'header.php';
include "config.php";
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
      $sql='select * from students left join studentclass on students.sclass = studentclass.cid';
      $res=mysqli_query($con,$sql) or die('query failed');
      if(mysqli_num_rows($res)>0){
     ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>

        <tbody>  <?php while($row=mysqli_fetch_assoc($res)){ ?>
            <tr>
                <td><?php echo $row['sid']; ?></td>
                <td><?php echo $row['sname']; ?></td>
                <td><?php echo $row['sadress']; ?></td>
                <td><?php echo $row['sclass']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td>
                    <a href='inline-update.php?sid=<?php echo $row['sid']; ?>'>Edit</a>
                    <a href='inline-delete.php?sid=<?php echo $row['sid']; ?>'>Delete</a>
                </td>
            </tr>
    <?php } ?>
        </tbody>

    </table>
    <?php mysqli_close($con);} ?>
</div>
</div>
</body>
</html>
