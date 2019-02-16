<?php
    include("../conf/db.php");

    if(isset($_POST["Update_Empresa"])){
        $id=$_POST["Id"];
        $nombre=$_POST["nombre"];
        $telefono=$_POST["telefono"];
        $direccion=$_POST["direccion"];
        $email=$_POST["email"];

        $query="UPDATE empresa SET Nombre='$nombre',Telefono='$telefono',Direccion='$direccion',Correo='$email' 
        WHERE Id_Empresa='$id';";
        
       $resultado= mysqli_query($conn,$query);

       if($resultado){
            header("Location:../empresas.php");
       }else{
           echo "No Actualizado";
       }
    }if(isset($_POST["Cancelar"])){
        header("Location:../empresas.php");
    }

?>