
@extends('layouts.indexx')
 
@section('content')
<div class="page-content">
  <div class="row">
	<div class="page-header">
		<h2>Data Asessor 
			
		</h2>
<?php
	$i=0
?>

	</div><!-- /.page-header -->
	<div class="row">
		<div class="col-xs-12">
		<a class="btn btn-succses" href="{{route('rekapasessordosen.setpdfass',[ $serdosth,$serdossmt,$asessornm])}}">
		<i class="fa fa-download"></i>Report PDF
		</a>
			<!-- PAGE CONTENT BEGINS -->
			<table id="simple-table" class="table  table-bordered table-hover">
			<tr>
				<th>No</th>
				<th>Nama Dosen</th>
				<th>Password </th>
			</tr>
				@foreach ($serdos as $key => $serdos)
			<tr>
				<td> {{$i=$i+1}}</td>
				<td>{{ $serdos->nama_dosen }}</td>
				<td>{{ $serdos->Password}}</td>
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
