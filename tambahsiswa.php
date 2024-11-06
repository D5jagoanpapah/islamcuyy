<?php 
   require 'functions.php';


    if( isset($_POST["submit"]) ) {

            if( tambah($_POST) > 0 ){
                    echo "
                    
                    <script>
                    alert('data berhasil di tambahkan!')
                    document.location.href = 'tambahsiswa.php';
                    </script>
                    
                    ";
                } else {
                echo "
                    
                <script>
                alert('data gagal di tambahkan!')
                document.location.href = 'tambahsiswa.php';
                </script>
                ";       
            }
    }
    
    
  $siswa = query("SELECT * FROM siswa");


?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>data siswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
   
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
   <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet"> 
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  
   <script type="text/javascript" src="js/jquery.signature.min.js"></script>
   <script type="text/javascript" src="js/jquery.ui.touch-punch.min.js"></script>
   <link rel="stylesheet" type="text/css" href="css/jquery.signature.css">
        <style>
        .kbw-signature { width: 300px; height: 300px;}
        #sig canvas{
            width: 100% !important;
            height: auto;
        }
    </style>
   
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header">
                    <h4 class="text-center">tambah data</h4>
                </div>
                <div class="card-body">
            
                    <form method="POST" action="upload.php">
                          <div class="mb-2">
                            <label for="" class="col-form-label">NO SISWA</label>
                            <input type="text" name="id" class="form-control" id="">
                          </div>
                          <div class="mb-2">
                            <label for="" class="col-form-label">NAMA</label>
                            <input type="text" name="nama" class="form-control" id="">
                          </div>
                          <div class="mb-2">
                            <label for="" class="col-form-label">KELAS</label>
                            <input type="text" name="kelas" class="form-control" id="">
                          </div>
                          <div class="mb-2">
                            <label for="" class="col-form-label">TEMPAT LAHIR</label>
                            <input type="text" name="tempat_lahir" class="form-control" id="">
                          </div>
                          <div class="mb-2">
                            <label for="" class="col-form-label">TANGGAL LAHIR</label>
                            <input type="date" name="tanggal_lahir" class="form-control" id="">
                          </div>
                          <div class="mb-2">
                            <label for="" class="col-form-label">ALAMAT</label>
                            <input type="text" name="alamat" class="form-control" id="">
                          </div>
                          <div class="mb-2">
                            <label for="" class="col-form-label">NO HANDPHONE</label>
                            <input type="text" name="no_hp" class="form-control" id="">
                          </div>

                          
                          
                          
                    <div class="row">
                         <div class="col-md-4">
                        <label for="">orang tua</label>
                        <div id="sig1"></div>
                        <button id="clear1" type="button" class="btn btn-secondary mt-2">Hapus </button>
                        <textarea id="signature1" name="signed1" style="display: none"></textarea>
                    </div>
                    <div class="col-md-4">
                        <label for="">guru pembimbing</label>
                        <div id="sig2"></div>
                        <button id="clear2" type="button" class="btn btn-secondary mt-2">Hapus</button>
                        <textarea id="signature2" name="signed2" style="display: none"></textarea>
                    </div>
                    <div class="col-md-4">
                        <label for="">siswa</label>
                        <div id="sig3"></div>
                        <button id="clear3" type="button" class="btn btn-secondary mt-2">Hapus </button>
                        <textarea id="signature3" name="signed3" style="display: none"></textarea>
                    </div>
                         </div>
                          
                        
                          <button type="submit" name="submit" class="btn btn-outline-success w-100 mt-4">TAMBAH</button>
                        </form>
                </div>
            </div>
        
            
            
           
            <div class="card mt-5">
                <div class="card-header">
                    <h4 class="text-center">Data Siswa</h4>
                </div>
                <div class="card-body">
                    
                    <table class="table table-bordered table-striped">
                        <tr class="text-center">
                            <th>NO</th>
                            <th>NAMA</th>
                            <th>KELAS</th>
                            <th>TEMPAT LAHIR</th>
                            <th>TANGGAL LAHIR</th>
                            <th>ALAMAT</th>
                            <th>NO HANPHONE</th>
                            <th>ACTION</th>
                          </tr>

        <?php foreach($siswa as $row) : ?>
        <tr>
            <td><?php echo $row["id"] ; ?></td>
            <td><?php echo $row["nama"] ; ?></td>
            <td><?php echo $row["kelas"] ; ?></td>
            <td><?php echo $row["tempat_lahir"] ; ?></td>
            <td><?php echo $row["tanggal_lahir"] ; ?></td>
            <td><?php echo $row["alamat"] ; ?></td>
            <td><?php echo $row["no_hp"] ; ?></td>   
            <td>
             
                <a href="editsiswa.php?id=<?php echo $row["id"] ; ?>" class="btn btn-warning">Ubah</a>
                <a href="hapus.php?id=<?php echo $row["id"] ; ?>" class="btn btn-danger" onclick="return confirm('yakin?');">Hapus</a>
                </td>
        </tr>
        <?php endforeach ;?>



</table>
        </div>
    </div>

   </div>

   
   <script type="text/javascript">
    var sig1 = $('#sig1').signature({syncField: '#signature1', syncFormat: 'PNG'});
    var sig2 = $('#sig2').signature({syncField: '#signature2', syncFormat: 'PNG'});
    var sig3 = $('#sig3').signature({syncField: '#signature3', syncFormat: 'PNG'});

    $('#clear1').click(function(e) {
        e.preventDefault();
        sig1.signature('clear');
        $("#signature1").val('');
    });
    $('#clear2').click(function(e) {
        e.preventDefault();
        sig2.signature('clear');
        $("#signature2").val('');
    });
    $('#clear3').click(function(e) {
        e.preventDefault();
        sig3.signature('clear');
        $("#signature3").val('');
    });
</script>

   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
   
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  
   <script type="text/javascript" src="js/jquery.signature.min.js"></script>
   <script type="text/javascript" src="js/jquery.ui.touch-punch.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>