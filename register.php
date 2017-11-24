<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" type="text/css" href="style.css"> 
   <title>Document</title>
</head>
<body>
   <div class='post'>
      </div>
   <div class='post-r'>
   </div>
   <div class="header">
      <div class="hl">
         <img src="./image/logo.png" style='height:30px' alt="">  
         <a style='width:50%;' href='#'>ButU</a>
         <a href="#">Home</a>
      </div>
      <div class="hr">
      </div>
   </div>
   <div class="chart" >
      <div style=''>
         <span>Profile</span><br><br>
         <form action="./save.php" method='POST'>
            <input type="text" class="boxinput" name='username' placeholder='Username'><br>
            <input type="password" class="boxinput" name='password' placeholder='Password'><br>
            <input type="text" class="boxinput" name='firstname' placeholder='First Name'><br>
            <input type="text" class="boxinput" name='lastname' placeholder='Last Name'><br>
            <input type="submit" class="submit" value='Register'>
            <button onclick='call()' type="button" class='submit'>Cancel</button>
            <!--input type='button' class="submit" value='Cancel'-->
         </form>
      </div>
   </div>
</body>
<script>
function call(){
   window.location="./index.php";
}
</script>
</html>