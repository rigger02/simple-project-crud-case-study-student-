<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "crud";
$conect = mysqli_connect($host, $user, $pass, $db);

if (!$conect) {
    die("connection failed: ".mysqli_connect_error());
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DATA NILAI MAHASISWA</title>
  </head>
  <body>
        <div class="container">
            <h3 class="text-center my-5">DATA MAHASISWA</h3>
            <table border=1px>
                <thead>
                    <tr class="text-center">
                        <th scope="col">ID</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">NIM</th>
                        <th scope="col">KELAS</th>
                        <th scope="col">JURUSAN</th>
                        <th scope="col">FAKULTAS</th>
                        <th scope="col">UNIVERSITAS</th>
                        <th scope="col">OPSI</th>
                    </tr>
                </thead>
                <tbody>
                <?php
            include "koneksi.php";
            $sql ="SELECT * FROM data";
            $result = mysqli_query($conect, $sql);

            //menjalankan query
            if (mysqli_num_rows($result) > 0) {
                while ($row=mysqli_fetch_assoc($result)){
       
              echo "<tr class='text-center'>";
               
                echo "<td>".$row ['id']."</td>";
                echo "<td>".$row['nama']."</td>";
                echo "<td>".$row['nim']."</td>";
                echo "<td>".$row['kelas']."</td>";
                echo "<td>".$row['jurusan']."</td>";
                echo "<td>".$row['fakultas']."</td>";
                echo "<td>".$row['universitas']."</td>";
                echo "<td><a href=\"frm_edit.php?id=$row[id]\"'>Edit</a> | <a href=\"delete.php?id=$row[id]\">Delete</a></td>";
                
                echo"</tr>";
                
                }
            }else{
                echo "<tr class='text-center'>";
                echo "<td colspan='9'>DATA TIDAK ADA</td>";
                echo "<tr>";
            }
        ?>
    </body>
        </table>
        <a href="add.php"><input type="submit" value="TAMBAH DATA"</a>
</html>