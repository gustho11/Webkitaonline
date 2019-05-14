<?php 
	
	$conn = mysqli_connect("sql111.epizy.com","epiz_23902761","z6qyS77jZ","epiz_23902761_webkita");

	function query ($query){
		global $conn;
		$result = mysqli_query ($conn,$query);
		$rows = [];

		while ($mhs = mysqli_fetch_assoc($result)) {
			$rows[]=$mhs;
		}
		return $rolocalhostws;
	}
	//fungsi untuk mengkonversi size file

	function ubah($data)
	{
		global $conn;

		$id = $data["id"];
		$nama_file = htmlspecialchars($data["nama_file"]);
		$tanggal_upload = htmlspecialchars($data["tanggal_upload"]);
		$jenis_file = htmlspecialchars($data["jenis_file"]);
		$ukuran_file = htmlspecialchars($data["ukuran_file"]);
		

		$query = "UPDATE blog SET nama_file = '$nama_file', tanggal_upload = '$tanggal_upload', jenis_file = '$jenis_file', ukuran_file = '$ukuran_file' WHERE id = $id";

		mysqli_query ($conn, $query);
		return mysqli_affected_rows ($conn);
	}

	// function creat ($data){
	// 	global $conn;

	// 	$judul = $data["judul"];
	// 	$isi = $data["isi"];

	// 	$query = "INSERT INTO blog VALUES ('','$judul', '$isi')";

	// 	mysql_query($conn, $query);

	// 	return mysqli_affected_rows($conn);



	
 ?>