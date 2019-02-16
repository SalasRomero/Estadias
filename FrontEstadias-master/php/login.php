<?php
include("../conf/db.php");
if(isset($_POST["Login"])){
    $email=$_POST["Email"];
    $pass=$_POST["Password"];
    $Matricula="";
    $Nombre='';
    $ApellidoP='';
    $ApellidoM='';
    $Especialidad='';
$query="SELECT MatriculaD,Nombre,ApellidoP,ApellidoM,Especialidad FROM docente
 WHERE Correo='$email' and Password='$pass';";

 $resultado = mysqli_query($conn,$query);
 $conteo=0;
while($fila= mysqli_fetch_array($resultado)){
    $Matricula=$fila["MatriculaD"];
    $Nombre=$fila["Nombre"];
    $ApellidoP=$fila["ApellidoP"];
    $ApellidoM=$fila["ApellidoM"];
    $Especialidad=$fila["Especialidad"];
    $conteo=$conteo+1;
}

if($conteo==1){
 //echo $Nombre;
 $_SESSION["Matricula"]=$Matricula;
 //$_SESSION["Nombre"]=$Nombre;
 //$_SESSION["ApellidoP"]=$ApellidoP;
 //$_SESSION["ApellidoM"]=$ApellidoM;
 //$_SESSION["Especialidad"]=$Especialidad;
 header("Location:../index.php");
}else{
    header("Location:../index.php");
    //$_SESSION["Erro"]="Credenciales Erroneas."
}


}

?>