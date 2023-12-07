<?php
	include 'conf/conn.php';

        $username = $_POST['username']; 
        $password = $_POST['password']; 
        
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'"; 
        $hasil = mysqli_query($koneksi, $sql); 
        $jumlah = mysqli_num_rows($hasil);
        
        
        if ($jumlah == 1) {
          header("Location: mapel.html"); 
        } else { 
          echo "Username atau password salah"; 
          echo "<script>alert('Username atau password salah');</script>"; 
        }

	$mysqli->close();
?>



