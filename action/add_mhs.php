<?php
require "../koneksi.php";

if(isset($_POST["submit"])){
    $nim= $_POST["nim"];
    $nama= $_POST["nama"];
    $jurusan= $_POST["jurusan"];
    $domisili= $_POST["domisili"];

    $data_mhs = mysqli_query ($db, "SELECT * FROM tb_mhs");
    $data = mysqli_fetch_assoc($data_mhs);
    $nim_db = $data["nim"];
    if($nim_db !== $nim){
        mysqli_query($db,"INSERT INTO tb_mhs VALUES ('', '$nim','$nama','$jurusan','$domisili')");
        echo "<script>
        alert('Anda telah menambahkan data dengan nim : $nim')
        document.location.href = '../index.php?p=add_mhs';
        </script>";
    } else {
        echo "<script>
        alert('Nim dengan $nim tersebut, sudah terdaftar !')
        document.location.href = '../index.php?p=add_mhs';
        </script>";
    }

} else {
    header("location:../index.php?p=add_mhs");
}
?>