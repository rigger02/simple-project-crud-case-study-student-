<?php
include "koneksi.php";

//get parameter
$ID=$_GET['id'];


$sql= "DELETE FROM `data` WHERE  id=$ID";

//menjalankan query
if (mysqli_query($conect, $sql)){
    header("Location: index.php");
} else{
    echo "error:". $sql ."<br>" . mysqli_error($conect);
}
    ?>