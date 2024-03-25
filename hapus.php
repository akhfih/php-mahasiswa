<?php 
    include 'koneksi.php';
    $id  = $_GET['id'];
    $sql = "DELETE FROM mahasiswa WHERE id='$id'";
    $que = mysqli_query($sambungan, $sql);  
    //peyimpanan
    if ($que) //jika berhasil
    {
        echo
        "
            <script type='text/javascript'>
                alert('Data telah dihapus');
                window.location='tampil.php';
            </script>
        ";
    }
    else //jika gagal
    {
        echo
        "
            <script type='text/javascript'>
                alert('Gagal dihapus');
                window.location='tampil.php';
            </script>
        ";
    }
  
?>