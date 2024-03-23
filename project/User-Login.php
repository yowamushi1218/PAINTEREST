<?php require'includes/fbconfig.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XYT INC.</title>
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style2.css">
    <style>
        .srouce{
            text-align: center;
            color: white;
            padding: 10px;
        }
    </style>
</head>
<body>
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
     </div>
    </div>
    <div class="col-md-12" style="color: white;">
     <div class="row2" style="text-align: center;">
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
    <div class="main-container">
        <div class="form-container">

            <div class="srouce"><a title="XYT Incorporation" href="index.php">XYT Incorporation</a></div>

            <div class="form-body">
                <h2 class="title">Log in with</h2>
                <div class="social-login">
                    <ul>
                        <li class="google"><a href="#">Google</a></li>
                        <?php if (isset($_SESSION['access_token'])): ?>
                        <?php else: ?>
                        <li class="fb"><a href="<?php echo $login_url; ?>">Facebook</a></li>
                        <?php endif; ?>
                    </ul>
                </div>

                <div class="_or">or</div>

                <form action="execute/login.php" method="POST" class="the-form">

                    <label for="username" style="text-align: left;">Username</label>
                    <input type="username" name="username" id="username" placeholder="Enter your username" required="username">

                    <label for="password" style="text-align: left;">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" required="password">
                    <div class="text-align" style="text-align: center;">
                     <a href="Forgot Password.php">Forgot Password?</a>
                    </div>
                    <input type="submit" value="Log In">

                </form>

            </div>

            <div class="form-footer">
                <div>
                    <span>Don't have an account?</span> <a href="User-SignUp.php">Sign Up</a>
                </div>
            </div>

        </div>
    </div>

</body>
</html>