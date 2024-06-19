<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>WPSGS</title>
</head>

<body>
    <nav class="navbar bg-light p-2">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://www.piblisuperapp.my.id/gbr/ukm.png" alt="" width="30" height="24" class="d-inline-block align-text-top rounded" />
                Project WPSGS
            </a>
            <h3>Hallo <?php echo $d['nama'] ?></h3>
            <a class="btn btn-primary" href="https://piblisuperapp.my.id/sgs/upload.php" role="button">Upload Project</a>
        </div>
    </nav>

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


    <center>
        <div class="row row-cols-2 row-cols-md-2 g-4" style="width: 98%">
            <?php
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "select * from siswa");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <div class="col">

                    <div class="card">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" border-radius: 5px;>
                            <div class="carousel-inner shadow p-3 mb-3 bg-body rounded">
                                <div class="carousel-item active">
                                    <img src="<?php echo "foto/" . $d['foto']; ?>" class="d-flex w-100" alt="..." />
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $d['nama'] ?></h5>
                            <p class="card-text"><?php echo $d['link'] ?></p>
                            <p class="card-text"><?php echo $d['tgl_upload'] ?></p>
                            <!-- Button trigger modal -->
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="button" onclick="beli<?php echo $d['kode'] ?>()">
                                    Kunjungi
                                </button>

                            </div>
                        </div>
                    </div>

                </div>
                <script>
                    //ikan
                    function tawar<?php echo $d['kode'] ?>() {
                        window.location.href =
                            "https://www.piblisuperapp.my.id/pasar/oesapa/<?php echo $d['kode'] ?>/tawar.html";
                    }

                    function beli<?php echo $d['kode'] ?>() {
                        window.location.href =
                            "https://<?php echo $d['link'] ?>";
                    }
                </script>
            <?php
            }
            ?>
        </div>
    </center>
    <br>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>