<!DOCTYPE html>
<?php 
session_start();
include './db.php';
$n=$mysqli->query("SELECT * FROM tbl_user");
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
         <span>Listado de Usuarios</span><br><br>
         <?php 
            echo"
               <table align='center'>
               <tr>
                  <th>Full Name</th>
                  <th>Username</th>
                  <th>Password</th>
               </tr>
            ";
            while($user=$n->fetch_assoc()){
               echo"
                  <tr>
                     <td style='width:35%;padding-top:15px;text-align:left;'>
                        <span style='margin-top:20px;'>".$user['lastname'].", ".$user['firstname']." </span><br>
                     </td>
                     <td style='width:35%;'>
                        <span style='margin-top:20px;'>".$user['username']."</span><br>
                     </td>
                     <td style='width:35%;'>
                        <span style='margin-top:20px;'>".base64_decode($user['password'])."</span><br>
                     </td>
                  </tr>
               ";
            }
            echo "</table>
            ";
            echo "<br><br><button onclick='recall()' type='button' class='submit'>Back</button><br>";
         ?>
      </div>
   </div>
</body>
<script>
   function recall(){
      window.location="./session.php";
   }
</script>
</html>