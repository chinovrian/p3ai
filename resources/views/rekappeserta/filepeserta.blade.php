
@extends('layouts.index')
 
@section('content')
<div class="page-content">
  <div class="row">
	<div class="page-header">
		<h2>Data Peserta  Sertifiksi Dosen Tahun {{$serdosth}} Semester {{$serdossmt}}
			
		</h2>
<?php
	$i=0
?>

	</div><!-- /.page-header -->
	<div class="row">
		<div class="col-xs-12">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<a class="btn btn-succses" href="{{route('rekappeserta.setpdfpeserta',[$serdosth,$serdossmt])}}">
		<i class="fa fa-download"></i>Report PDF
		</a>
			<!-- PAGE CONTENT BEGINS -->
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
				<td>{{ $serdos->getAsessor($serdos->asessor1)}}	</td>
				<td>{{ $serdos->getAsessor($serdos->asessor2 )}}</td>

			</tr>

				  @endforeach
				</table>
			  </div>
			</div>
		  </div>
		 </div>
		</div>
	  </div>
	 </div>
@endsection
