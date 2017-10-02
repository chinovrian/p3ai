<!DOCTYPE html>
<html>
<head>
	<title> Laporan Data Dosen Sertifikasi</title>
</head>
<body>

	<div style="font-family: Arial; font-size: 12px;">
	<center>
		<div style="font-family: Arial; font-size: 12px;">
			<h2>Daftar Dosen Sertifikasi Politeknik Negeri Padang</h2>
			<h2>Tahun Ajaran
				<?php
				$bulan = date('m');
				$tahun = date('Y');
					if ($bulan>7 or $bulan==1)
					{
						$ta=$tahun+1;
						echo $tahun.'/'.$ta;
					}
					else{
						$ta=$tahun-1;
						echo $ta.'/'.$tahun;
					}
				
			
			?>
			</h2>
		</div> 
	</center>
	<?php
		$i=0
	?>

			<table id="simple-table" class="table  table-bordered table-hover">
			<tr>
				<th>No</th>
				<th>Nama Dosen</th>
				<th>Asessor 1</th>
				<th>Asessor 2</th>
			</tr>
				@foreach ($serdos as $key => $serdos)
			<tr>
				<td> {{$i=$i+1}}</td>
				<td>{{ $serdos->nama_dosen }}</td>
				<td>{{ $serdos->getAsessor($serdos->asessor1)}}</td>
				<td>{{ $serdos->getAsessor($serdos->asessor2)}}</td>

			</tr>

				  @endforeach
				</table>
		<br/>
	</div>

</body>
</html>