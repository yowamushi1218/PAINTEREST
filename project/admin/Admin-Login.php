<?php session_start(); 
    if(isset($_SESSION['password'])){
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>XYT INC.</title>
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        .srouce{
            text-align: center;
            color: white;
            padding: 10px;
            margin-top: 20%;
        }
        .row2 {
            color: red; 
            margin-left: -25px;
            text-align: center;
            font-size: 15px;
        }
        .row1 {
            color: red; 
            margin-left: 5px;
            text-align: center;
            font-size: 15px;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="form-container">
        <div class="col-lg-12 col-sm-12 col-12 form-input" style="position: absolute; top: 8%; left: 45%;">           

    <div class="col-md-12">
     <div class="row1">
      <?php
       if(isset($_SESSION['success_message']))
       {
      ?>
      <div class="alert alert-success">
       <span class="fa fa-exclamation-triangle">
       <?php echo $_SESSION['success_message']; ?>
      </div>
      <?php
       unset($_SESSION['success_message']);
       }
      ?>
      </span>
     </div>
    </div>
    <div class="col-md-12">
     <div class="row2">
      <?php
       if(isset($_SESSION['error_message']))
       {
      ?>
      <div class="alert alert-danger">
       <span class="fa fa-exclamation-triangle">
       <?php echo $_SESSION['error_message']; ?>
      </div>
      <?php
       unset($_SESSION['error_message']);
       }
      ?>
 </span>     
</div>
</div>

         
        </div>
            <div class="srouce"><a title="XYT Incorporation" href="..\index.php">XYT Incorporation</a></div>

            <div class="form-body">
                <h2 class="title">Log in</h2>
                <form action="execute/login.php" method="POST" class="the-form">

                    <label for="email" style="text-align: left;">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email">

                    <label for="password" style="text-align: left;">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" >
                    <div class="text-align" style="text-align: center;">
                     <a href="recover_password.php">Forgot Password?</a>
                    </div>
                    <input type="submit" id="submit" name="login" value="Log In">

                </form>

            </div>

            <div class="form-footer">
                <div>
                    <span>Don't have an account?</span> <a href="Admin-SignUp.php">Sign Up</a>

                </div>
            </div>
        </div>
    </div>
<?php require 'includes/footer.php'; ?>
</body>
</html>