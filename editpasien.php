<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY APP | Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row-nt3">
            <div class="col-4">
                <h3>EDIT DATA PASIEN</h3>
                <?php
                include 'koneksi.php';
                $panggil =$koneksi ->query("SELECT * FROM pasien where idpasien='$_GET[edit]'");

                while($row=$panggil ->fetch_assoc()){
                    ?>
                
                <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="idpasien">ID PASIEN </label>
                        <input type="text" class="form-control mb-3" name="idpasien" placeholder="id pasien" value="<?= $row['idpasien']?>"readonly>
                    </div>
                    <div class="form-group">
                        <label for="nmpasien">NAMA PASIEN </label>
                        <input type="text" class="form-control mb-3" name="nmpasien" placeholder="nama pasien" value="<?= $row['nmpasien']?>"readonly>
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis kelamin </label>
                        <div class="form-check"></div>
                        <input type="radio" class="form-check-input" value="perempuan"<?php if (($row['jk']) === "perempuan"){
                            echo"checked";
                        }?>>perempuan
                    </div>
                    <div class="form-check"> <input type="radio" class="form-check-input" value="laki-laki"<?php if (($row['jk']) === "laki-laki"){
                            echo"checked";
                        }?>>laki-laki
                        
                    </div>
                       
                    </div>
                    <div class="form-group mt-3">
                        <label for="alamat">alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" cols="5" rows="3" placeholder="alamat"<?= $row['alamat']?>></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <input type="submit" name="simpan" value="simpan" class="form-control btn btn-primary">
                         
                    </div>
                </form>
                <?php }?>
            </div>
        </div>
    </div>
</body>
</html>