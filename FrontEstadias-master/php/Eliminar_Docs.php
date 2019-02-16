<?php 
include("../conf/db.php");
    if(isset($_GET["id"])){
        $id=$_GET["id"];
        $query="DELETE FROM documentos WHERE Id_Documentos='$id';";
        
       $resultado= mysqli_query($conn,$query);

       if($resultado){
            header("Location:../documentos.php");
       }else{
           echo "No Eliminado";
       }
    }
    
?>