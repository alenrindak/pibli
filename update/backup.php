<?php
//inisialisasi session
require('koneksi_admin.php');
session_start();

//mengecek username pada session
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
    header('Location: login_admin.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Data Siswa</title>

    <!-- Link CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Style CSS -->
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Arial';
            font-weight: 500;
        }

        .container {
            margin-top: 50px;
        }

        .foto {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
    </style>

    <!-- Link JS -->
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h2 class="text-center mb-5">List Data Produk</h2>
        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "insert") {
                echo "
                    <script>
                    alert('Siswa Berhasil di Tambah')
                    </script>
                  ";
            } elseif ($_GET['pesan'] == "update") {
                echo "
                    <script>
                    alert('Siswa Berhasil di Update')
                    </script>
                  ";
            } elseif ($_GET['pesan'] == "delete") {
                echo "
                    <script>
                    alert('Siswa Berhasil di Hapus')
                    </script>
                  ";
            }
        }
        ?>

        <br>
        <div class="d-grid gap-2">
            <a href="create.php" class="btn btn-primary mb-4">Tambah Produk</a>
            <a href="logout_admin.php" class="nav-link text-light"> Log Out </a>
        </div>
        <table class="table table-striped" style="width: 100%;">
            <thead>
                <tr>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Tanggal Upload</th>
                    <th scope="col">Kode Produk</th>
                    <th scope="col">Link Aplikasi</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php

                include 'koneksi.php';
                $data = mysqli_query($koneksi, "select * from siswa");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <th scope="row"><img class="foto" src="<?php echo "foto/" . $d['foto']; ?>"></th>
                        <td><?php echo $d['nama'] ?></td>
                        <td><?php echo $d['deskripsi'] ?></td>
                        <td><?php echo $d['harga'] ?></td>
                        <td><?php echo $d['tgl_upload'] ?></td>
                        <td><?php echo $d['kode'] ?></td>
                        <td><?php echo $d['link'] ?></td>
                        <td>
                            <div class="d-grid gap-2">
                                <a href="update.php?id=<?php echo $d['id']; ?>" class="btn btn-warning text-white mb-2">Edit</a>
                                <a href="delete.php?id=<?php echo $d['id']; ?>" class="btn btn-danger mb-2">Hapus</a>
                            </div>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>