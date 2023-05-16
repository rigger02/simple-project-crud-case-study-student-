<?php

include "koneksi.php";

$ID=$_GET['id'];
$sql ="SELECT * FROM data where id=$ID";

$result = mysqli_query($conect, $sql);
$row=mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit data mahasiswa</title>
</head>
<body>
<h2>FORM EDIT DATA MAHASISWA</h2>
<form action="update.php" method="post">
    <label for="">ID :</label>
    <input type="text" name="id" value="<?php echo "$row[id]";?>"disabled>
    <input type="hidden" name="id" value="<?php echo "$row[id]";?>"><br>

    <label for="">Nama :</label>
    <input type="text" name="nama" value="<?php echo "$row[nama]";?>"><br>

    <label for="">Nim :</label>
    <input type="text" name="nim" value="<?php echo "$row[nim]";?>"><br>

    <label for="">kelas :</label>
    <input type="text" name="kelas" value="<?php echo "$row[kelas]";?>"><br>

    <label for="">jurusan :</label>
    <input type="text" name="jurusan" value="<?php echo "$row[jurusan]";?>"><br>

    <label for="">fakultas :</label>
    <input type="text" name="fakultas" value="<?php echo "$row[fakultas]";?>"><br>

    <label for="">universitas :</label>
    <input type="text" name="universitas" value="<?php echo "$row[universitas]";?>"><br>
    <button type="submit">UPDATE</button>
</form>
<p> <a href="index.php">Cancel</a></p>
   
</body>
</html>
