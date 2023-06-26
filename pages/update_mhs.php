<?php
    $nim = $_GET["nim"];
    $data_mhs = mysqli_query($db, "SELECT * FROM tb_mhs WHERE nim = '$nim'");
    $data = mysqli_fetch_assoc($data_mhs);
?>
<div class="card mt-3">
    <div class="card-body">
        <form action="action/update_mhs.php" method="post">
            <input type="hidden" name="id" value="<?= $data["id"] ?>">
            <div class="mb-3">
                <input type="text" class="form-control" name="nim" placeholder="Masukkan Nim" value="<?= $data["nim"] ?>">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" value="<?= $data["nama"] ?>">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="jurusan" placeholder="Masukkan Jurusan" value="<?= $data["jurusan"] ?>">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="domisili" placeholder="Masukkan Domisili" value="<?= $data["domisili"] ?>">
            </div>
            <button type="submit" class="btn btn-outline-primary" name="submit">Update</button>
        </form>
    </div>
</div>