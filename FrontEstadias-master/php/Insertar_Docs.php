<?php 
include("../conf/db.php");
if(isset($_POST["Save_Docs"])){
    $proyecto=$_POST["proyecto"];
    $doc1=$_POST["d1"];
    $doc2=$_POST["d2"];
    $doc3=$_POST["d3"];
    $doc4=$_POST["d4"];
    $doc5=$_POST["d5"];

    $query="INSERT INTO documentos(Id_Proyecto,Doc_1,Doc_2,Doc_3,Doc_4,Doc_5) 
    VALUES('$proyecto','$doc1','$doc2','$doc3','$doc4','$doc5');";

    $resultado=mysqli_query($conn,$query);

    if(isset($resultado)){
        
        header("Location:../documentos.php");
    }else{
        header("Location:../documentos.php");
    }


}
?>