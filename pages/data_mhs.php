 <div class="card-tools">
                    <form action="" method="post">
                        <div class="input-group input-group-sm" style="width:200px;">
                            <input type="text" name="keyword" placeholder="Search..." class="form-control float-right">
                            <div class="input-group-append">
                                <button class="btn btn-default" name="cari" type="submit">
                                    <i>Search</i>
                                </button>
                            </div>
<table class="table table-bordered table-hover table-stripped">
    <thead>
        <tr>
            <td>No</td>
            <td>Nim</td>
            <td>Nama</td>
            <td>Jurusan</td>
            <td>Domisili</td>
            <td colspan="2" class= "text-center">Action</td>
        </tr>
    </thead>
    <tbody>
    <?php
            $halaman = 2; /* page halaman*/
            $page    = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
            $mulai   = ($page>1) ? ($page * $halaman) - $halaman : 0;

            $result = mysqli_query($db, "SELECT * FROM tb_mhs");
            $total  = mysqli_num_rows($result);
            $pages  = ceil($total/$halaman);

            // Mendapatkan nilai keyword dari form pencarian
            $keyword = isset($_POST['keyword']) ? $_POST['keyword'] : '';

            // Query untuk mencari data mahasiswa berdasarkan keyword
            $tampilMas = mysqli_query($db, "SELECT * FROM tb_mhs WHERE nama LIKE '%$keyword%' LIMIT $mulai, $halaman");
                        
            // Hitung jumlah data yang ditemukan
            $total_ditemukan = mysqli_num_rows($tampilMas);
                        
            if ($total_ditemukan == 0) {
                            echo "<script>alert('Pencarian tidak ditemukan');</script>";
            }
                        
            $no = $mulai + 1;
            ?>
                        
            <div>Jumlah data ditemukan: <?php echo $total_ditemukan; ?></div>

            <?php while($mhs = mysqli_fetch_array($tampilMas)){ ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $mhs["nim"] ?></td>
            <td><?= $mhs["nama"] ?></td>
            <td><?= $mhs["jurusan"] ?></td>
            <td><?= $mhs["domisili"] ?></td>
            <td>
                <a href="action/delete.php?nim=<?=$mhs["nim"]?>" class="btn btn-danger">Delete</a>
            </td>
            <td>
                <a href="index.php?p=update_mhs&nim=<?=$mhs["nim"]?>" class="btn btn-warning">Update</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<div style="font-weight:bold;">
        <?php
        for ($i=1; $i<=$pages; $i++){
            ?>
            <a href="index.php?p=data_mhs&halaman=<?php echo $i; ?>" style="text-decoration:none;">
            <u><?php echo $i; ?></u></a>
        <?php
        }
    ?>
</div>