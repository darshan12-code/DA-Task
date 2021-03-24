<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Design Avenue Task</title>
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration Form</div>
    <div class="content">
      <form action="connect.php" method="post">
        <div class="u-detail">
          
         
          <div class="Ibox">
            <span for="email" class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email" required>
          </div>
          <div class="Ibox">
            <span for="phoneNumber" class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="phoneNumber" required>
          </div>
          <div class="Ibox">
            <span for="password" class="details">Password</span>
            <input type="text" placeholder="Enter your password" name="password" required>
          </div>
          <div class="Ibox">
            <span for="confirmPass" class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" name="confirmPass" required>
          </div>
        </div>
   
          <div class="u-detail">

            <label for="state" class="u-detail"> State : </label>
            <select name="state" id="state" class="details" required>
              <option value="" disabled selected >Choose State</option>
              
            </select>

            <label for="city" class="u-detail"> City : </label>
            <select name="city" id="city" class="details" required>
              <option value="" disabled selected> Choose City</option>
              
            </select>
            
          </div>
       

        <div class="button">
          <input name="submit" type="submit">
        </div>
      </form>
    </div>
  </div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
 $(document).ready(function(){
   function loadData(type, category_id){
     $.ajax({
       url : "conDdl.php",
       type : "POST",
       data : {type : type , id : category_id},
       success : function(data){
         if(type=="cityData"){
          $("#city").html(data);  
         }
         else{
           $("#state").append(data);
         }
       }
     });
   }
   loadData();

   $("#state").on("change",function(){
     var states=$("#state").val();

    if(states !=""){

     loadData("cityData",states);
    }else{
      $("#city").html("");
    }
   })
 });

 </script>
</body>
</html>
