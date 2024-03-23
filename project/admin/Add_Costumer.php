<?php
include "header.php";
include "execute/connection.php";
?>


<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
        <div id="content-header">
        <div id="breadcrumb"><a href="home.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
           Dashboard</a><a href="Add_User.php" title="Go to User" class="tip-bottom"><i class="icon-file"></i>
           Add User</a>
    </div>
  </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">

        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
        <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Customer-info</h5>
        </div>
        <div class="widget-content nopadding">
          <form name="form1" action="" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Fullname:</label>
              <div class="controls">
                <input type="fullname" class="span11" placeholder=" " name="fullname" required/>
              </div>
            </div>
              <div class="control-group">
              <label class="control-label">Username:</label>
              <div class="controls">
                <input type="username" class="span11" placeholder=" " name="username" required/>
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Email:</label>
              <div class="controls">
                <input type="Email" class="span11" placeholder=" " name="email" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Contact Number:</label>
              <div class="controls">
                <input type="mobile_number" class="span11" placeholder=" " name="mobile_number" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Address:</label>
              <div class="controls">
                <input type="address" class="span11" placeholder=" " name="address" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label"> New Address :</label>
              <div class="controls">
                <input type="new_address" class="span11" placeholder=" " name="new_address" required />
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Status :</label>
              <div class="controls">
                  <select name="status" class="span11">
                      <option>Active</option>
                      <option>Inactive</option>

                  </select>
              </div>
            </div>

             <div class="alert alert-danger" id="error" style="display:none">
                Username already Exist! Please Try Another.
            </div>

            <div class="form-actions">
              <button type="submit" name="submit1" class="btn btn-success">ADD</button>
            </div>

             <div class="alert alert-success" id="success" style="display:none">
                Record Inserted Successfully
            </div>


          </form>
        </div>
      </div>

      
      <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Customer ID</th>
                  <th>Fullname</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Contact Number</th>
                  <th>Address</th>  
                  <th>New Address</th>
                  <th>Status</th>
                  <th>Date</th>
                  <th>Edit</th>
                  <th>Delete</th> 
                </tr>
              </thead>
              <tbody>
                <?php
                $res=mysqli_query( $connection,"SELECT * FROM costumer");
                while($row=mysqli_fetch_array($res))
                {
                  ?>
                  <tr>
                  <td><?php echo $row["customerID"];?></td>
                  <td><?php echo $row["fullname"];?></td>
                  <td><?php echo $row["username"];?></td>
                  <td><?php echo $row["email"];?></td>
                  <td><?php echo $row["mobile_number"];?></td>
                  <td><?php echo $row["address"];?></td>
                  <td><?php echo $row["new_address"];?></td>
                  <td><?php echo $row["status"];?></td>
                  <td><?php echo $row["createdOn"];?></td>
                  <td><a href="edit_costumer.php?customerID=<?php echo $row["customerID"];?>">Edit</a></td> 
                  <td><a href="delete_costumer.php?customerID=<?php echo $row["customerID"];?>">Delete</a></td> 
                  </tr>

                <?php
                }
                ?>
               
                
              </tbody>
            </table>
          </div>
        </div>

    </div>
</div>

<?php

if(isset($_POST["submit1"]))
{
    $count=0;
    $res=mysqli_query($connection,"SELECT * FROM costumer where username='$_POST[username]'");
    $count=mysqli_num_rows($res);

    if($count>0)
    {
        ?>
        <script type="text/javascript">
        document.getElementById("success").style.display="none";
        document.getElementById("error").style.display="block";
        </script>
        <?php
    }
    else{
        mysqli_query($connection,"insert into costumer values(NULL,'$_POST[fullname]','$_POST[username]','$_POST[email]','$_POST[mobile_number]','$_POST[address]','$_POST[new_address]','$_POST[status]',NULL)")or die(mysqli_error($connection));
        ?>
        <script type="text/javascript">
        document.getElementById("error").style.display="none";
        document.getElementById("success").style.display="block";
        setTimeout(function(){
          window.location.href=window.location.href; 
        },2000)
        </script>

        <?php
    }



}
?>
<!--end-main-container-part-->

<?php
include "footer.php"
?>