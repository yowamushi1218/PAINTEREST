<?php
include'execute/Config.php';
?>
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Student Documentary</title> 
             <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
          <script src="dist/jquery-highlighttextarea/jquery.highlighttextarea.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
           <?php include('Includes/home style.css') ?> 
          <?php if(!empty($result)){ ?>
            <center>
              <div class="col-sm-4  col-sm-offset-4"> 
              <div class="alert alert-success"><?php echo $result; ?></div>
            </div>
              </center>
            <?php } ?> 
      </head>
      <style>  

.signup-form{
    width: 600px;
    margin-left: 200px;

  }

</style>
  <body>  
<?php include('Includes/navigation.php') ?>
           <br /><br /> 
<div class="signup-form">
     <form name="bulk_action_form" action="" method="post"/>
           <div class="container">  
                <h2 align="center">Student Documents</h2>  
                <br />
              <div class="form-group">
                <div align="center">
               <div class="col-sm-4  col-sm-offset-4"> 
                     <input type="text" name="search" id="search" class="form-control" placeholder="Search" />  
                </div>
                </div>
                </div>
                <br> </br>
                <div class="table-responsive">  
                     <table id="student" class="table table-striped table-bordered">  
                       <thead>  
                        <tr>
                        <th>
                          <input type="checkbox" id="select_all" value=""/>
                          </th>
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
                            include'execute/connection.php';
                            $query ="SELECT * FROM user ORDER BY id";  
                             $result = mysqli_query($connection, $query);  
                         if( $result->num_rows > 0){
                            while($row =$result->fetch_assoc()){
                                
                                 ?>       
                               <tr>
                                <td align="center">
                                <input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['id']; ?>"/>
                                  </td>                                 
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
                </div>
                 <div class="col-sm-2"> 
              <input type="submit" class="btn btn-danger" name="delete" value="DELETE"/>
            </div>
</form>
</div>
</body>
</html>
<script>
    $(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
    
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
});

</script>
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

