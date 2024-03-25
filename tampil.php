<h2>Data Mahasiswa</h2>
  
<a href="tambah.php">Input Data</a>
  
<table border="1">
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Usia</th>
        <th>Opsi</th>
    </tr>
  
    <?php 
  
        include 'koneksi.php';
        $sql = "SELECT *FROM mahasiswa";
        $que = mysqli_query($sambungan, $sql);
        $no=1;
        while ($data=mysqli_fetch_array($que)) 
        {
            $id   = $data['id'];
            $nama   = $data['nama'];
            $alamat = $data['alamat'];
            $umur = $data['umur'];
  
            echo
            "
                <tr>
                    <td align='center'>$no</td>
                    <td>$nama</td>
                    <td>$alamat</td>
                    <td>$umur</td>
                    <td>
                        <a href='hapus.php?id=$id'>Hapus</a>
                    </td>
                </tr>
            ";
            $no++;
        }
  
    ?>
</table>