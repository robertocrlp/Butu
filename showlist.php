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
   <title>Carolina</title>
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
               <table align='center' style='font-size:12px;width:40%;border-collapse:collapse;'>
               <tr>
                  
                  <th style='width:5%;'>Username</th>
                  <th style='width:5%;'>Password</th>
                  <th style='width:5%;'>Role</th>
                  <th style='width:5%;'>Privilege</th>
                  <th style='width:10%'></th>
                  <th style='width:10%'></th>
               </tr>
            ";
            while($user=$n->fetch_assoc()){
               echo"
                  <tr>
                     
                     <td>
                        <span style='margin-top:20px;'>".$user['username']."</span><br>
                     </td>
                     <td>
                        <span style='margin-top:20px;'>".base64_decode($user['password'])."</span><br>
                     </td>
                     <td>
                        <select>
                           <option>Estudiante</option>
                           <option>Profesor</option>
                           <option>Administrador</option>
                        </select>
                     </td>
                     <td>
                        <select>
                           <option>Solo ver</option>
                           <option>Ver y Listar</option>
                           <option>Global</option>
                        </select>
                     </td>
                     <td>
                     <a class='submit' style='background-color:green;color:white;font-size:10px;text-decoration:none;box-shadow:none;padding:5px;' href='./edit.php?id=".$user['cod_user']."'>Editar</a>
                     </td>
                     <td>
                        <a class='submit' style='background-color:red;color:white;font-size:10px;text-decoration:none;box-shadow:none;padding:5px;' href='./delete.php?id=".$user['cod_user']."'>Eliminar</a>
                     </td>
                  </tr>
               ";
            }
            echo "</table>
            ";
            echo "<br><br><button onclick='recall()' type='button' class='submit'>Back</button>
            <button onclick='adduser()' type='button' class='submit'>Add User</button><br>
            ";
         ?>
      </div>
   </div>
</body>
<script>
   function recall(){
      window.location="./session.php";
   }

   function adduser(){
      window.location="./register.php";
   }
</script>
</html>