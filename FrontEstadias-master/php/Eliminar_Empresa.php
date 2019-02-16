<?php 
include("../conf/db.php");
    if(isset($_GET["id"])){
        $id=$_GET["id"];
        $query="DELETE FROM empresa WHERE Id_Empresa='$id';";
        
       $resultado= mysqli_query($conn,$query);

       if($resultado){
            header("Location:../empresas.php");
       }else{
           echo "No Eliminado";
       }
    }
    
?>