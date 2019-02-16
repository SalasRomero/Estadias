<?php
include("../conf/db.php");
if(isset($_POST["Save_Asesor"])){
   $nombre=$_POST["nombre"];
   $telefono=$_POST["telefono"];
   $email=$_POST["email"];
   $empresa=$_POST["AsesorEmpresa"];

   $query="INSERT INTO acesor_empresarial(Nombre,Telefono,Correo,Id_Empresa) 
   VALUES('$nombre','$telefono','$email','$empresa');";
   //echo $nombre." + ".$telefono." + ".$email." + ".$empresa ;
   $resultado=mysqli_query($conn,$query);

   if(isset($resultado)){
        header("Location:../asesor-empresarial.php");
   }else{
    echo "No  insertado";
   }

}
?>