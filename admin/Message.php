                          <?php  
                            include'execute/connection.php';
                            $query ="SELECT * FROM user ORDER BY id";  
                             $result = mysqli_query($connection, $query);  
                         if( $result->num_rows > 0){
                          ?>

<!DOCTYPE html>  
 <head>  
  <title>Information</title>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    </head>  
    <style>
      
  body{
    color: black;
    background: antiquewhite;
    font-family: 'Roboto', sans-serif;
    background-size: contain; 

  }
.header1 img{
  display: block;
    margin-top: 0%;
  margin-left: 0px;
  margin-right: auto;
  width:100%;
  height:150px;

}
.container{
  width:90%;
  margin: 20px auto;
  padding: 20px;
  border: 2px black;
  background: white;
}
.signup-form{
  width: 60%;
  margin: auto;
  padding: 20px;
  border: 1px solid black;
  background: lightsalmon;
}
.header {
  width: 60%;
  margin: auto;
  color: black;
  background: cadetblue;
  text-align: center;
  border: solid grey;
  border-bottom: none;
  padding: 20px;
}
    </style>
    
    <script>  
      $(document).ready(function(){  
           $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#student tr').each(function(){  
                     var found = 'false';  
                     $(this).each(function(){  
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                          {  
                               found = 'true';  
                          }  
                     });  
                     if(found == 'true')  
                     {  
                          $(this).show();  
                     }  
                     else  
                     {  
                          $(this).hide();  
                     }  
                });  
           }  
      });  
 </script> 
    <body> 
<div class="header1">
<img src="Includes/img/po.jpg" >
</div>
<div class="container">
     <form name="bulk_action_form" action="" method="post"/>
                <h1 align="center">Student Records</h1>  
              <div class="form-group">
                <div align="center">
               <div class="col-sm-2  col-sm-offset-10"> 
                     <input type="text" name="search" id="search" class="form-control" placeholder="Search" />  
                </div>
                </div>
                </div>
                <br> </br>
                <div class="table-responsive">  
                     <table id="student" class="table table-striped table-bordered">  
                       <thead>  
                        <tr>
                            <th>Student ID</th>
                            <th> Firstname </th>
                            <th>Middlename</th>
                            <th>Lastname</th>
                             <th>School</th>
                            <th>Program</th>
                             <th>Year Level</th>
                            <th>Contact Number</th>
                            <th>Username</th>
                            <th>Email</th>
                        </tr> 
                     </thead>  
                     <?php
                            while($row =$result->fetch_assoc()){
                                
                                 ?>       
                               <tr>                            
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['firstname']; ?></td>
                                    <td><?php echo $row['middlename']; ?></td>
                                   <td><?php echo $row['lastname']; ?></td> 
                                    <td><?php echo $row['school']; ?></td>
                                    <td><?php echo $row['program']; ?></td>
                                    <td><?php echo $row['yearlevel']; ?></td>
                                   <td><?php echo $row['phonenumber']; ?></td>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                               </tr>  
                          <?php } }else{ ?>
                        <tr><td colspan="5">No records found.</td></tr>
                      <?php } ?>
                     </table>  
                   </div>
               </form>
             </div>
             <h1 class="header" align="center">Message Information</h1>   
<div align="center" class="signup-form">
<form class="form-horizontal" action="Process.php" id="multi-select" method="POST">
    <div class="form-group">
    <label for="date_time" class="col-sm-3 control-label">Set Date & Time:</label>
    <div class="col-sm-4">
      <input type="datetime-local" class="form-control" id="date_time" name="date_time" placeholder="" value="" required>
    </div>
  </div>
    <div class="form-group">
    <label for="phonenumber" class="col-sm-3 control-label">Contact Number:</label>
    <div class="col-sm-5">
      <select type="dropdown" class="form-control selectpicker" data-live-search ="true" multiple id="phonenumber" name="phonenumber[]" required>
       <?php

          $query ="SELECT * FROM user";  
         $result = mysqli_query($connection, $query);  
         if( $result->num_rows > 0){
           while($row = $result->fetch_assoc()){
         ?>
        <option><?php echo $row['phonenumber']; ?></option>
     <?php } }else{ ?>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="program" class="col-sm-3 control-label">Subject:</label>
    <div class="col-sm-2">
   <input type="text" class="form-control" id="program" name="program" placeholder="Course" value="" required>
    </div>
  </div>
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label">From:</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="" required>
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-3 control-label">Email:</label>
    <div class="col-sm-4">
      <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value=""required>
    </div>
  </div>
  <div class="form-group">
    <label for="message" class="col-sm-3 control-label">Message:</label>
    <div class="col-sm-7">
      <textarea class="form-control" rows="4" id="message" name="message" value=""required>





Please do not reply to this conversation.</textarea> 
    </div>
  </div>
    <div class="form-group">
       <div class="col-sm-16">
     <button type="submit" class="btn btn-primary btn-lg" name="submit">Send</button>   
    <button type="cancel" class="btn btn-secondary btn-lg"><a href="Home.php">Cancel</a></button>
  </div>
    </div>
  </form>
</div>


</body>  
 </html> 


 <script>
$(document).ready(function(){
 $('#phonenumber').multiselect({
  nonSelectedText: 'Contact Number',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 });
 
 $('#multi-select').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"Process.php",
   method:"POST",
   data:form_data,
   success:function(data)
   {
    $('#phonenumber option:selected').each(function(){
     $(this).prop('selected', false);
    });
    $('#phonenumber').multiselect('refresh');
    alert(data);
   }
  });
 });
 
 
});
</script>