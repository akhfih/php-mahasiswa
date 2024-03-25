<?php 
      
    $server   = "localhost";
    $username = "root";
    $password = "";
    $database = "db_akademik";
  
    $sambungan = mysqli_connect($server, $username, $password, $database);
  
    if (!$sambungan)
    {
        echo "<h1>Sambungan Gagal</h1>";
    }
  
?>