<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY | Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row-nt3">
            <div class="col-4">
                <h3>TAMBAH DATA PASIEN</h3>
            </div>
            <form action="koneksi.php" method="post">
                <div class="form-group">
                    <label for="idpasien">ID PASIEN</label>
                    <input type="text" class="form-control nb-3" name="idpasien" placeholder="ID pasien">
                </div>
                <div class="form-group">
                    <label for="nmpasien">NAMA PASIEN</label>
                    <input type="text" class="form-control nb-3" name="nmpasien" placeholder="NAMA pasien">
                </div>
                <div class="form-group">
                    <label for="jk">jenis kelamin</label>
                    <div class="form-check"></div>
                    <input type="radio" class="form-check-input" name="jk" value="perempuan">perempuan
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jk" value="laki-laki">laki-laki
                </div>
                <div class="form-group nt-3">
                    <label for="alamat">ALAMAT</label>
                    <textarea name="alamat" id="alamat" cols="5" rows="3" placeholder="alamat" class="form-control"></textarea>
                </div>
                <div class="form-group nt-3">
                    <input type="submit" name="simpan" value="simpan" class="form-control btn btn-primary">

                </div>
            </form>
        </div>
    </div>
</body>
</html>