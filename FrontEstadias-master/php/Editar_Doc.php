<?php 
include("../conf/db.php");
if(isset($_POST["Update_Docs"])){
    $idd=$_POST["id"];
    $doc1=$_POST["d1"];
    $doc2=$_POST["d2"];
    $doc3=$_POST["d3"];
    $doc4=$_POST["d4"];
    $doc5=$_POST["d5"];

    $query="UPDATE documentos set Doc_1='$doc1',Doc_2='$doc2',Doc_3='$doc3',
     Doc_4='$doc4', Doc_5='$doc5' WHERE Id_Documentos='$idd';";
     $resultado=mysqli_query($conn,$query);
     if(isset($resultado)){
        header("Location:../documentos.php");
     }
 
}if(isset($_POST["Cancelar"])){
    header("Location:../documentos.php");
}

?>