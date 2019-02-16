<?php 
include("../conf/db.php");
if(isset($_POST["Update_Asesor"])){
    $id=$_POST["id"];
    $nombre=$_POST["nombre"];
    $telefono=$_POST["telefono"];
    $email=$_POST["email"];
    $empresa=$_POST["AsesorEmpresa"];

    $query="UPDATE acesor_empresarial set Nombre='$nombre',Telefono='$telefono',Correo='$email',
     Id_Empresa='$empresa' WHERE Id_AEmpresarial='$id';";
     $resultado=mysqli_query($conn,$query);
     if(isset($resultado)){
        header("Location:../asesor-empresarial.php");
     }
 
}if(isset($_POST["Cancelar"])){
    header("Location:../asesor-empresarial.php");
}

?>