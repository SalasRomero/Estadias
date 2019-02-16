<?php
    include("../conf/db.php");

    if(isset($_POST["Save_Empresa"])){
        $nombre=$_POST["nombre"];
        $telefono=$_POST["telefono"];
        $direccion=$_POST["direccion"];
        $email=$_POST["email"];

        $query="INSERT INTO empresa(Nombre,Direccion,Telefono,Correo) 
        VALUES('$nombre','$direccion','$telefono','$email');";
        
       $resultado= mysqli_query($conn,$query);

       if($resultado){
            header("Location:../empresas.php");
       }else{
           echo "No insertado";
       }
    }

?>