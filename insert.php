<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "crud";
$conect = mysqli_connect($host, $user, $pass, $db);

$nama = $_POST["nama"];
$nim = $_POST["nim"];
$kelas = $_POST["kelas"];
$jurusan = $_POST["jurusan"];
$fakultas = $_POST["fakultas"];
$universitas = $_POST["universitas"];

$sql =  "INSERT INTO data (id, nama, nim, kelas, jurusan, fakultas, universitas)VALUES ('', '$nama', '$nim', '$kelas', '$jurusan', '$fakultas', '$universitas')";
if (mysqli_query($conect, $sql)){
    header("Location: index.php");
} else{
    echo "error:". $sql ."<br>" . mysqli_error($conect);
}
mysqli_close($conect);

?>
