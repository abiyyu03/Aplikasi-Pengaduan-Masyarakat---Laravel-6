<!DOCTYPE html>
<html>
<head>
	<title>PDF</title>
</head>
<body>
	<style type="text/css" media="screen">
		h1,h5 {
			font-family:sans-serif;
		}
		p {
			font-family:sans-serif; 
			text-align:justify;
		}
	</style>
	<center>
		<h1>{{$data_pengaduan->judul_laporan}}</h1> 
		<h5>{{Carbon\Carbon::parse($data_pengaduan->tanggal_pengaduan)->format('l,d F Y')}}</h5>
		<img src="img/{{$data_pengaduan->foto}}" alt="">
	</center>
		<p>{{$data_pengaduan->isi_laporan}}</p> 
		Diadukan oleh : {{$data_pengaduan->masyarakat->nama}} | {{$data_pengaduan->masyarakat->nik}}
		| {{$data_pengaduan->masyarakat->telp}}
		<br><br><hr>
	<center> 
		<h5>{{Carbon\Carbon::parse(@$data_tanggapan->tanggal_tanggapan)->format('l,d F Y')}}</h5>
	</center>
		<p>{{@$data_tanggapan->tanggapan}}</p> 
</body>
</html>