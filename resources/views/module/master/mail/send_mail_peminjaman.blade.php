<?php 

	function formatTanggal ($tanggal){
		$bulan = array (
			1 =>   'Januari',
			2 => 'Februari',
			3 => 'Maret',
			4 => 'April',
			5 => 'Mei',
			6 => 'Juni',
			7 =>'Juli',
			8 =>'Agustus',
			9 =>'September',
			10 =>'Oktober',
			11 =>'November',
			12 =>'Desember'
		);

		$pecahkan = explode('-', $tanggal);
		return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Teknologi Informasi Komunikasi Universitas Pertamina </title>
</head>
<body>

	<p> Kepada Yth, {{ $peminjaman->peminjam}} <br> Di tempat </p> 

	<?php 
	
		if ($status) {
			echo $isi_pesan->approve_mail;
		} else {
			echo $isi_pesan->reject_mail;
		}
	?>

    <p>Dengan kode Transaksi <b>{{$peminjaman->kode_transaksi}}</b>

	<p> Jakarta, {{ formatTanggal(date('Y-m-d')) }} <br> Hormat Kami, <br> Fungsi TIK Universitas Pertamina </p>

</body>
</html>