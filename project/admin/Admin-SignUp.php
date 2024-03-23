<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XYT INC. Registration</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style1.css">
    <style>
        .srouce{
            padding: 10px;
            font-size: 20px;
        }
    </style>
</head>
<body>
<div class="container">
       <div class="col-md-12">
     <div class="row1" style="text-align: center; font-color: white;">
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

    <div class="col-md-12">
     <div class="row2" style="text-align: center; font-color: white;">
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
    </div>
  </div>
        <div class="row">
          <div class="srouce" style="text-align: center;"><a title="XYT Incorporation" href="..\index.php">XYT Incorporation</a></div>
            <div class="col-md-8 col-md-offset-2">
                <form role="form" method="POST" action="execute/signup.php">

                    <legend class="text-center" style="color: white;">Create Account</legend>
                    <fieldset>
                        <legend>Account Details</legend>

                        <div class="form-group col-md-6">
                            <label for="fullname" style="text-align: left;">Fullname</label>
                            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Fullname" required="fullname">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="username" style="text-align: left;">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username" required="username">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="email"style="text-align: left;">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="email">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password" style="text-align: left;">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="password">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="confirm_password" style="text-align: left;">Confirm Password</label>
                            <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required="confirm_password">
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Required Details</legend>

                        <div class="form-group col-md-6">
                            <label for="position" style="text-align: left;">Position</label>
                            <select class="form-control" name="position" id="position" required="position">
                                <option>Ceo</option>
                                <option>Secretary</option>
                                <option>Accountant</option>
                                <option>Head</option>
                                <option>Staff</option>
                                <option>Cashier</option>
                                <option>Sales Staff</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="Department" style="text-align: left;">Department</label>
                            <select class="form-control" name="department" id="Department" required="department">
                                <option>Purchasing Department</option>
                                <option>Warehouse Department</option>
                                <option>Sales Department</option>
                                <option>Accounting Department</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="form-group col-md-12 hidden">
                            <label for="specify" style="text-align: left;">Please Specify</label>
                            <textarea class="form-control" id="specify" name=""></textarea>
                        </div>

                    </fieldset>

                    <div class="form-group">
                        <div class="col-md-12" style="text-align: left; margin-top: 5%;">
                            <button type="submit" class="btn btn-primary" style="font-size: 15px;">
                                Register
                            </button>
                            <a href="Admin-Login.php" style="color: orange; font-size: 15px; margin-left: 15px;">Already have an account?</a>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
                  <?php
                  require 'includes/footer.php'; ?>
    </body>
</html>
<script type="text/javascript">  
  $(document).ready(function() {
    $('#Department').on('change', function() {
       $(this).val() == "other" ? $('#specify').closest('.form-group').show() : $('#specify').closest('.form-group').hide();
    })
})
</script>