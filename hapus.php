<?php
$id = $_GET['id'];

$conn = mysqli_connect('localhost','root','','latihan');

$result = mysqli_query($conn, "DELETE FROM persons WHERE id=$id");

if(mysqli_affected_rows($conn) > 0){
    echo "<script>
            alert('Data Berhasil Dihapus');
            document.location.href='index.php'
        </script>";
}else{
    echo "<script>
    alert('Data Gagal Dihapus');
    document.location.href='index.php'
</script>";
}