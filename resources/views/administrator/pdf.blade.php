<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
</head>
<body>
	<center>
	<h1>Laporan Pengaduan Desa Bojongnangka per {{Carbon\Carbon::today()->format('l, d F Y')}}</h1>
	<table border=1 cellspacing=0 cellpadding=10> 
		<thead class="">
			<tr>
				<th>#</th>
				<th>Tanggal Pengaduan</th> 	
				<th>Nama Pengadu</th>
				<th>NIK</th>
				<th>Judul Laporan</th>   
				<th>Isi Laporan</th>   
				<th>Status</th> 
			</tr>
		</thead>
			<tbody class="border">
				@foreach($data_pengaduan as $pengaduan)
				<tr class="text-center">
					<td>{{$loop->iteration}}</td>
					<td>{{Carbon\Carbon::parse($pengaduan->tanggal_pengaduan)->format('D, d F Y')}}</td> 
					<td>{{$pengaduan->masyarakat->nama}}</td> 
					<td>{{$pengaduan->masyarakat->nik}}</td> 
					<td>{{$pengaduan->judul_laporan}}</td> 
					<td>{{\Str::limit($pengaduan->isi_laporan,30)}}</td> 
					<td>{{$pengaduan->status}}</td> 
				</tr>
				@endforeach
			</tbody>
		</table>
		</center>
</body>
</html>