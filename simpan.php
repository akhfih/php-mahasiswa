<?php 
    include 'koneksi.php';
    $nama   = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $umur = $_POST['umur'];
  
      
    $sql = "INSERT INTO mahasiswa (nama, alamat, umur) VALUES('$nama', '$alamat', '$umur')";
    $que = mysqli_query($sambungan, $sql); 
    if ($que)
    {
        echo
        "
            <script type='text/javascript'>
                alert('Data telah disimpan');
                window.location='tampil.php';
            </script>
        ";
    }
    else 
    {
        echo
        "
            <script type='text/javascript'>
                alert('Gagal disimpan');
                window.location='tambah.php';
            </script>
        ";
    }
  
?>