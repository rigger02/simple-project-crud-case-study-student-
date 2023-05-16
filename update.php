<?php
include "koneksi.php";

$id = $_POST["id"];
$nama = $_POST["nama"];
$nim = $_POST["nim"];
$kelas = $_POST["kelas"];
$jurusan = $_POST["jurusan"];
$fakultas = $_POST["fakultas"];
$universitas = $_POST["universitas"];

$sql="UPDATE `data` SET `id`='$id',`nama`='$nama',`nim`='$nim',`kelas`='$kelas',`jurusan`='$jurusan',`fakultas`='$fakultas',`universitas`='$universitas' WHERE id='$id'";

//menjalankan query
if (mysqli_query($conect, $sql)){
    header("Location: index.php");
} else{
    echo "error:". $sql ."<br>" . mysqli_error($conect);
}
mysqli_close($conect);




?>


