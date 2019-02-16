<?php 
include("../conf/db.php");
    if(isset($_GET["id"])){
        $id=$_GET["id"];
        $query="DELETE FROM acesor_empresarial WHERE Id_AEmpresarial='$id';";
        
       $resultado= mysqli_query($conn,$query);

       if($resultado){
            header("Location:../asesor-empresarial.php");
       }else{
           echo "No Eliminado";
       }
    }
    
?>