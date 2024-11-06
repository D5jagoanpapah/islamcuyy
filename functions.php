<?php 
  // koneksi database
   $conn = mysqli_connect("localhost", "root", "", "db_bukukun");

   function query($query) {
    global $conn;

    $result = mysqli_query($conn, $query);

    $rows = [];
    
    while( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
    }
        return $rows;
   }


   function tambah($data){
                global $conn;
           
           $id = htmlspecialchars($data["id"]);
           $nama = htmlspecialchars($data["nama"]);
           $kelas = htmlspecialchars($data["kelas"]);
           $tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
           $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
           $alamat = htmlspecialchars($data["alamat"]);
           $no_hp = htmlspecialchars($data["no_hp"]);

           $query = "INSERT INTO siswa
           VALUES
           ('$id', '$nama', '$kelas', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$no_hp')
           ";

           mysqli_query($conn, $query);

           return mysqli_affected_rows($conn);
   }

   function hapus($id) {
        global $conn;

        mysqli_query($conn, "DELETE FROM siswa WHERE id = $id");
        return mysqli_affected_rows($conn);

   }


   function ubah($data) {
     global $conn;

     $id = $data["id"];
     $nama = htmlspecialchars($data["nama"]);
     $kelas = htmlspecialchars($data["kelas"]);
     $tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
     $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
     $alamat = htmlspecialchars($data["alamat"]);
     $no_hp = htmlspecialchars($data["no_hp"]);
     $query = "UPDATE siswa SET
               nama = '$nama',
               kelas = '$kelas',
               tempat_lahir = '$tempat_lahir',
               tanggal_lahir = '$tanggal_lahir',
               alamat = '$alamat',
               no_hp = '$no_hp'
               WHERE id = $id
     ";

     mysqli_query($conn, $query);

     return mysqli_affected_rows($conn);
   }

 
?>