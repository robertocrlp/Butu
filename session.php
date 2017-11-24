<!DOCTYPE html>
<?php
session_start();
include './db.php';
echo $_SESSION['username'];
if(empty($_SESSION['username'])){
   header('location: ./index.php');
}
else{



$row=$mysqli->query("SELECT * FROM tbl_user WHERE username='$_SESSION[username]'");
$user = $row->fetch_assoc();

?>
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
         <span>Edit Profile</span><br><br>
         <form action="./update.php" method='POST'>
            <input type="text" class="boxinput" name='username'  value="<?php echo $user['username'];?>"><br>
            <input type="text" class="boxinput" name='password' value='<?php echo base64_decode($user['password']);?>'><br>
            <input type="text" class="boxinput" name='firstname' value='<?php echo $user['firstname']; ?>'><br>
            <input type="text" class="boxinput" name='lastname' value='<?php echo $user['lastname']; ?>'><br>
            <input type="submit" class="submit" value='Save Changes'>
            <button onclick='call()' type="button" class='submit'>Cancel</button><br>
            <?php if($user['permission']==0){
               echo "<button onclick='recall()' type='button' class='submit'>Show Users</button><br>";
            }
            ?>
            <!--input type='button' class="submit" value='Cancel'-->
         </form>
      </div>
   </div>
</body>
<script>
function call(){
   window.location="./index.php";
}
function recall(){
   window.location="./showlist.php";
}
</script>
</html>
<?php }?>