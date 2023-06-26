<?php
require "../koneksi.php";

if(isset($_POST["submit"])){
    $id = $_POST["id"];
    $nim= $_POST["nim"];
    $nama= $_POST["nama"];
    $jurusan= $_POST["jurusan"];
    $domisili= $_POST["domisili"];

    mysqli_query($db,"UPDATE tb_mhs SET nim = '$nim', nama = '$nama', jurusan = '$jurusan', domisili = '$domisili' WHERE id = '$id'");

    echo "<script>
    alert('Anda telah mengubah data dengan nim : $nim')
    document.location.href = '../index.php?p=data_mhs';
    </script>";
} else {
    header("location:../index.php?p=data_mhs");
}
?>