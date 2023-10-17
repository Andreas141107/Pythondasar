<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Myapp || Halaman utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container"></div>
    <nav class="navbar navnar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">myapp</a>\
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggle-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportContent">
            <ul class="navbar-collapse" id="navbar-nav me-auto nb-lg-0">
                <li class="navbar-item">
                    <a href="#" class="nav-link" aria-current="page">pasien</a>
                </li>
            </ul>
            
        </div>
        </div>
    </nav>
  <div class="row nt-3">
    <div class="col-sn">
        <h3>Tabel pasien</h3>
    </div>
    <div class="row">
        <div class="col">
            <a href="tambahpasien.php" class="btn btn-primary btn-sn d-flex justify-content-center">tambah data</a>

        </div>
    </div>
    <div class="row nt-3">
        <div class="col">
            <table class="table table-striped table-hover tabel-sm">
                <tr>
                    <th>no</th>
                    <th>id pasien</th>
                    <th>nama pasien</th>
                    <th>Jenis kelamin</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
                <?php
                    include 'koneksi.php';
                    $no= 1;
                    $hasil =$koneksi -> query("SELECT *FROM pasien");
                    while($row =$hasil->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row['idpasien']; ?></td>
                            <td><?= $row['nmpasien']; ?></td>
                            <td><?= $row['jk']; ?></td>
                            <td><?= $row['alamat']; ?></td>
                            <td><a href="editpasien.php?edit=<?= $row['idpasien']; ?> " class="btn btn-warning btn-sn">Edit</a>
                                <a href="koneksi.php?idpasien=<?= $row['idpasien']; ?>" class="btn btn-danger btn-sm">Hapus</a></td>
                        </tr>
                    <?php } ?>
                
            </table>
        
        </div>
    </div>
  </div>

</body>
</html>