<?php
include "header.php";
include "execute/connection.php";

?>


<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="home.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
           Dashboard</a><a href="Add_Costumer.php" title="Go to User" class="tip-bottom"><i class="icon-file"></i>
           Back to Customer</a>
    </div>
  </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">

        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
        <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Personal-info</h5>
        </div>
        <div class="widget-content nopadding">
          <form name="form1" action="" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Fullname :</label>
              <div class="controls">
                <input type="fullname" class="span11" placeholder="Enter your name" name="fullname"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Username :</label>
              <div class="controls">
                <input type="username" class="span11" placeholder="Enter your username" name="username"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Email :</label>
              <div class="controls">
                <input type="email" class="span11" placeholder="Enter your email" name="email"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Position :</label>
              <div class="controls">
                  <select name="role" class="span11">
                    <option> ---- </option>
                    <option>User</option>
                    <option>Admin</option>
                  </select>
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Password :</label>
              <div class="controls">
                <input type="password" class="span11" placeholder="Enter your password" name="password"/>
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">New Password :</label>
              <div class="controls">
                <input type="password" class="span11" placeholder="Enter your new password" name="confirm_password"/>
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
                  <th>User ID</th>
                  <th>Fullname</th>
                  <th>Username</th>
                  <th>Email</th>  
                  <th>Position</th>
                  <th>Status</th>
                  <th>Edit</th>
                  <th>Delete</th> 
                </tr>
              </thead>
              <tbody>
                <?php
                $res=mysqli_query( $connection,"select * from user");
                while($row=mysqli_fetch_array($res))
                {
                  ?>
                  <tr>
                  <td><?php echo $row["userID"];?></td>
                  <td><?php echo $row["fullname"];?></td>
                  <td><?php echo $row["username"];?></td>
                  <td><?php echo $row["email"];?></td>
                  <td><?php echo $row["role"];?></td>
                  <td><?php echo $row["status"];?></td>
                  <td><a href="edit_user.php?userID=<?php echo $row["userID"];?>">Edit</a></td> 
                  <td><a href="delete_user.php?userID=<?php echo $row["userID"];?>">Delete</a></td> 
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
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    $count=0;
    $res=mysqli_query($connection,"select * from user where username='$_POST[username]'");
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
        mysqli_query($connection,"insert into user values(NULL,'$_POST[fullname]','$_POST[email]','$_POST[username]','$_POST[role]',md5('$password'),md5('$confirm_password'),'$_POST[status]')")or die(mysqli_error($connection));
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