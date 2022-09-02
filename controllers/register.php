<?php

include('connect.php');

if(isset($_POST['Registrar'])){
    $nombre=mysqli_real_escape_string($con,$_POST['Nombre']); // para evitar sql inyeccion
    $correo=mysqli_real_escape_string($con,$_POST['Correo']);
    $usuario=mysqli_real_escape_string($con,$_POST['Usuario']);
    $clave=mysqli_real_escape_string($con,$_POST['Clave']);
    $claveEncriptada=sha1($clave); // para encriptar la clave

    //hacer consulta para verificar si ya existe el usuario

    $consultaUsuario="SELECT id  FROM  usuarios WHERE usuario='$usuario'";
    $continuar=$con->query($consultaUsuario); // para ejecutar la consulta

    //para recorrer cada fila de la base de datos

    $filas=$continuar->num_rows;
    if ($filas>0){
        echo 
        "<script>
            alert('el usuario ya existe ')
            window.location='../views/register.html'  
        </script>"; // para redireccionar al registro de ususarios en caso de ususario ya existente
    } else {
        //se inserta usuario
        $nuevoUsuario="INSERT INTO usuarios(nombre,correo,usuario,clave) VALUES ('$nombre','$correo','$usuario','$claveEncriptada')";
        $continuarUs=$con->query($nuevoUsuario); // para guardar

        if($continuarUs>0){
            echo 
            "<script>
                alert('Registro exitoso...')
                window.location='../views/login.html'  
            </script>";
        } else{
            echo "<script>
            alert('Error... intente de nuevo')
            window.location='../views/register.html'  
            </script>";

        }
        
   }
    
}

?>