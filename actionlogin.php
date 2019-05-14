<?php 
	require 'koneksi.php';
	session_start();
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$result = mysqli_query($conn,"SELECT * FROM user where email='$email' and password ='$password'");

	$data	= mysqli_fetch_assoc($result);

 	if (mysqli_num_rows($result)>0){
 		//login
 		$_SESSION['login'] = true;
 		$_SESSION['email'] = $email;
 		$_SESSION['id'] = $data['id'];
 		$_SESSION['password'] = $data['password'];
 		if($data['password']==true){
            header("location:Home.php");
        }
    	else{
            echo "Password Salah. <a href='login.php'>Ulangi<a>"; 
        }
 	}
 	
 	else {
 		echo "Login Gagal. Silahkan ";
 		echo "<a href='register.php'>registrasi<a>";
 		echo " terlebih dahulu";
 		echo "<br>";
 		echo "<br>";
 		echo "<a href='login.php'> login?<a>";
 	}

?><title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
</title>
<body>
    <script src="C://xampp/htdocs/Ahay/dist/js/bootstrap.min.js"></script>
    <script src="C://xampp/htdocs/Ahay/assets/js/docs.min.js"></script>
</body>