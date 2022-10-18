<?php
$conn = mysqli_connect('localhost','root','','latihan');

$result = mysqli_query($conn, "SELECT * FROM persons");


// while($data = mysqli_fetch_assoc($result)){
//     var_dump($data['first_name']);
// }

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
    <a href="create.php">Tambah Data</a>
    <table border="1px" cellpadding="10px" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
        </tr>
        <?php $i=1; while($data = mysqli_fetch_assoc($result)) : ?>
            
        <tr>
            <td><?= $i++ ?></td>
            <td><a href="hapus.php?id=<?= $data['id'] ?>">Hapus</a></td>
            <td><?= $data['first_name'] ?></td>
            <td><?= $data['last_name'] ?></td>
        </tr>
        <?php endwhile ?>
    </table>

</body>
</html>