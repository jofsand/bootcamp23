<?php
require "../koneksi.php";

$nim = $_GET["nim"];

mysqli_query($db, "DELETE FROM tb_mhs WHERE nim = '$nim'");

echo "<script>
alert('Anda telah menghapus data dengan nim : $nim')
document.location.href = '../index.php?p=data_mhs';
</script>";
?>