<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Next Train Indicator</title>

    <!-- Script Section -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
    .time{
        color:red; 
        font-size: 34px;
    }
    </style>
</head>
<body>
<div class="container">
    <h2 class="text-center" style="margin: 27px;">Next Train Indicator</h2>
   <table id="usertable" class="table table-striped table-border text-center">
   <thead>
   <tr>  
    <th width="5%">Train Order</th>
          <th width="20%" id="key">Destination</th>
          <th  width="20%" id="data">Timing</th>
        </tr>
        </thead>
      <tbody id="responce">
      <p id="Count"></p>
      </tbody>
   </table>  
</div>


<!-- Set Time Function -->
<div class="time text-center">
<?php
      date_default_timezone_set("Asia/Kolkata");
      echo date("h:i:s A");
     
   ?>
   </div>
</body>

<!-- ........JavaScript/Ajax......... -->
<script type="text/javascript">
    
    
    var id= setTimeout(FirstAdd,1000);
          
    function FirstAdd(){
    $(document).ready(function(){
    $.ajax({
        type: 'POST',
        url: 'demo.php',
    
    success: function(responcedata){
    $('#responce').html(responcedata);
        }
       
     });
    
 });

}
</script>
<script>
var id2= setTimeout(FirstAddd,8000);
          
          function FirstAddd(){
          $(document).ready(function(){
          $.ajax({
              type: 'POST',
              url: 'time.php',
          
          success: function(responced){
          $('#responce').html(responced);
              }
             
           });
          
       });
      
      }
      </script>

</html>
