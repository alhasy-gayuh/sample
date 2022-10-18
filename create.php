<?php
$conn = mysqli_connect('localhost','root','','latihan');

if( isset($_POST['submit']) ){
    $namaDepan = $_POST['namaDepan'];
    $namaBelakang = $_POST['namaBelakang'];

    $sql = "INSERT INTO persons (first_name, last_name)
            VALUES ('$namaDepan', '$namaBelakang')";
    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) > 0 ){
        // echo "Data Berhasil Ditambah";
        header('Location: index.php');
          exit();
    
    }else{
        echo "Gagal Menambahkan Data";
        echo "<br>";
        echo mysqli_error($conn);
    }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Terdistribusi</title>
</head>

<body>
<h1>Gayuh | Sistem Terdistribusi</h1>
    <form action="" method="post">
        <ul>
            <label for="nama-depan">Nama Depan : </label>
            <input type="text" id="namaDepan" name="namaDepan">
        </ul>
        <ul>
            <label for="nama-belakang">Nama Belakang : </label>
            <input type="text" id="namaBelakang", name="namaBelakang">
        </ul>
        <ul>
            <button type="submit" name="submit">Simpan</button>
        </ul>
    </form>

</body>

</html>