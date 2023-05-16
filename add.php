<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD MAHASISWA</title>
</head>
<body>
<h2>SIMPLE CRUD CASE STUDY = MAHASISWA</h2>
<form action="insert.php" method="post">
    <label for="">Nama : </label>
    <input type="text" name="nama" required><br>

    <label for="">Nim   : </label>
    <input type="text" name="nim" required><br>

    <label for="">kelas   : </label>
    <input type="text" name="kelas" required><br>

    <label for="">jurusan :</label>
    <input type="text" name="jurusan" required><br>

    <label for="">fakultas : </label>
    <input type="text" name="fakultas" required><br>

    <label for="">Universitas</label>
    <input type="text" name="universitas" required><br>

    <button type="submit">Proses</button>
    </form>
    <div><p> <a href="index.php">kembali</a></p>  
</div>
</body>
</html>
