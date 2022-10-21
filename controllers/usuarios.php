<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <style> 
    body{
    background-color:grey;
    }
</style>

</head>
<body>

    <nav class="navbar navbar-expand-sm bg-dark">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.html">Registro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../controllers/usuarios.php">Usuario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html">Login</a>
          </li>
        </ul>
      </nav><br><br>

      <?php
      include ('connect.php');
      $query='SELECT* FROM usuarios';
      echo'<table  class="table table-striped table-dark"" border="0"cellspacing="2" cellpadding="2"
        
          <tr>
            <td><font face="Arial">Codigo</font></td>
            <td><font face="Arial">Nombre</font></td>
            <td><font face="Arial">Correo</font></td>
            <td><font face="Arial">Clave</font></td>
            <td><font face="Arial">Usuario</font></td>
          </tr>';

          if($result=$con->query($query)){
            while($row=$result->fetch_assoc()){
              $field1name=$row["id"];
              $field2name=$row["nombre"];
              $field3name=$row["correo"];
              $field4name=$row["clave"];
              $field5name=$row["usuario"];

              echo'<tr>
                      <td>'.$field1name.'</td>
                      <td>'.$field2name.'</td>
                      <td>'.$field3name.'</td>
                      <td>'.$field4name.'</td>
                      <td>'.$field5name.'</td>
              
              </tr>';
            }

              

            
          }
     ?>

      </body>
</html>