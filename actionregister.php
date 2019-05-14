<?php 
	require 'koneksi.php';
	session_start();
	
	$username = $_POST['username'];
  $email = $_POST['email'];
  
	$password = md5($_POST['password']);
	

	$sql = "SELECT * FROM user WHERE username = '$username'";
   $query = $conn->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Username Sudah Terdaftar! Coba lagi!!!<a href='register.php'>Back</a></div>";
   } else {
     if(!$username || !$email || !$password) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='register.php'>Back</a>";
}

      else {
       $data = "INSERT INTO user VALUES (NULL, '$username',  '$email', '$password')";
       $simpan = $conn->query($data);
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='login.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }


?>
<title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
</title>
<body style="background-color: whitesmoke;">
</body>