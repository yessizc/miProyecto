<?php

include('connect.php');
if (!empty($_POST)){
    $usuario=mysqli_real_escape_string($con,$_POST["Usuario"]);
    $pass=mysqli_real_escape_string($con,$_POST["Clave"]);
    $passEncriptado=sha1($pass);

    $consultaSql="SELECT id FROM usuarios WHERE usuario='$usuario'AND clave='$passEncriptado'";
    //ejecucion de sentencia sql
    $resultado=$con->query($consultaSql);

    $rows=$resultado->num_rows;
    if($rows>0){
        $row= $resultado->fetch_assoc();
        $_SESSION['iduser']=$row['id'];
        header('Location:usuarios.php');
    }else {
        echo"<script>
                alert('Usuario o Pasword Incorrecto...!')
                window.location='../views/login.html'
        </script>";
    }

}

?>