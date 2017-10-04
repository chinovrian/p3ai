<!DOCTYPE html>
<html>
<head>
	<title> Laporan Data Asessor</title>
</head>
<body>

	<div style="font-family: Arial; font-size: 12px;">
	<center>
		<div style="font-family: Arial; font-size: 12px;">
			<h2>Daftar Asessor</h2>
			
		</div> 
	</center>
	<?php
		$i=0
	?>

			<table id="simple-table" class="table  table-bordered table-hover">
			<tr>
				<th>No</th>
				<th>Nama Asessor</th>
				<th>Tahun</th>
				
			</tr>
				@foreach ($asessor as $key => $asessor)
			<tr>
				<td> {{$i=$i+1}}</td>
				<td>{{ $asessor->nama_asessor }}</td>
				<td>{{ $asessor->tahun}}</td>
				
			</tr>

				  @endforeach
				</table>
		<br/>
	</div>

</body>
</html>