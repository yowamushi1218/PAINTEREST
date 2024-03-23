<?php
include'execute/delete.php';
?>
<!DOCTYPE html>  
 <head>  
  <title>Information</title>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="dist/jquery-highlighttextarea/jquery.highlighttextarea.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <?php include('Includes/home style.css') ?> 
                 <?php if(!empty($result)){ ?>
            <center>
              <div class="col-sm-4  col-sm-offset-4"> 
              <div class="alert alert-success"><?php echo $result; ?></div>
            </div>
              </center>
            <?php } ?> 
    </head>  
    <body>  
  <?php include('Includes/navigation.php') ?>
  <div class="container">  
   <br />  
   <br />  
   <br />  
    <form name="bulk_action_form" action="" method="post"/>
    <div class="table-responsive">  
    <h3 align="center">Message Records</h3><br /> 
    <div class="col-sm-4  col-sm-offset-4"> 
      <input type="text" name="search" id="search" class="form-control" placeholder="Search" />  
    </div> 
    <br></br>
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>
           <input type="checkbox" id="select_all" value=""/>
       </th>
       <th>Datetime</th>
         <th>Program</th>
          <th>Username</th>
           <th>Email</th>
      </tr>
     </thead>
     <tbody>
        <?php  
           include'execute/connection.php';
          $query ="SELECT * FROM sms_records ORDER BY sms_id";  
         $result = mysqli_query($connection, $query);  
         if( $result->num_rows > 0){
           while($row =$result->fetch_assoc()){
         ?>        
        <tr> 
          <td align="center">
              <input type="checkbox" name="checked_id[]" class="checkbox" placeholder="Select Contact Number" value="<?php echo $row['sms_id']; ?>"/>
           </td>                                
            <td><?php echo $row['date_time']; ?></td>
            <td><?php echo $row['program']; ?></td> 
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['email']; ?></td>
       </tr>  
     <?php } }else{ ?>
      <tr><td colspan="5">No records found.</td></tr>
      <?php } ?>
     </tbody>
    </table>
   <div class="form-group">
        <input type="submit" class="btn btn-danger" name="delete" value="DELETE"/>
    </div>
      </form>
     <br></br>
 </body>  
</html>  
<script>  
      $(document).ready(function(){  
           $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#editable_table tr').each(function(){  
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

