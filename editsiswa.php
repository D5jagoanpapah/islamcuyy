<?php 
   require 'functions.php';

   //    ambil data di URL
       $id = $_GET["id"];
   
       // query data berdasarkan id
       $sws = query("SELECT * FROM siswa WHERE id = $id")[0];
   
       if( isset($_POST["submit"]) ) {
   
               if( ubah($_POST) > 0 ){
                       echo "
                       
                       <script>
                           alert('data berhasil diubah!')
                           document.location.href = 'tambahsiswa.php';
                       </script>
                       
                       ";
               } else {
                   echo "
                       
                   <script>
                       alert('data gagal diubah!')
                       document.location.href = 'tambahsiswa.php';
                   </script>
                   
                   ";
                       
               }
   
       }
   
   
   ?>
   


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>data siswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header">
                    <h4 class="text-center">edit data</h4>
                </div>
                <div class="card-body">
            
                    <form method="POST" action="">
                          <div class="mb-2">
                            <label for="" class="col-form-label">NO SISWA</label>
                            <input type="text" name="id" class="form-control" id="id" readonly  value="<?php echo $sws["id"] ; ?>">
                          </div>
                          <div class="mb-2">
                            <label for="" class="col-form-label">NAMA</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $sws["nama"] ; ?>">
                          </div>
                          <div class="mb-2">
                            <label for="" class="col-form-label">KELAS</label>
                            <input type="text" name="kelas" class="form-control" id="kelas" value="<?php echo $sws["kelas"] ; ?>">
                          </div>
                          <div class="mb-2">
                            <label for="" class="col-form-label">TEMPAT LAHIR</label>
                            <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" value="<?php echo $sws["tempat_lahir"] ; ?>">
                          </div>
                          <div class="mb-2">
                            <label for="" class="col-form-label">TANGGAL LAHIR</label>
                            <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="<?php echo $sws["tanggal_lahir"] ; ?>">
                          </div>
                          <div class="mb-2">
                            <label for="" class="col-form-label">ALAMAT</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $sws["alamat"] ; ?>">
                          </div>
                          <div class="mb-2">
                            <label for="" class="col-form-label">NO HANDPHONE</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp" value="<?php echo $sws["no_hp"] ; ?>">
                          </div>

                          <button type="submit" name="submit" class="btn btn-outline-success w-100 mt-4">UBAH</button>
                        </form>
                </div>
            </div>
        

   </div>

 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>