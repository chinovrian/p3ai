
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
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		//<a class="btn btn-succses" href="{{route('rekapdataasessor.setpdfass',[$asessorth])}}">
		<i class="fa fa-download"></i>Report PDF
		</a>
			<!-- PAGE CONTENT BEGINS -->
			<table id="simple-table" class="table  table-bordered table-hover">
			<tr>
				<th>No</th>
				<th>Nama Asessor</th>
				<th>Tahun </th>
			</tr>
				@foreach ($asessor as $key => $asessor)
			<tr>
				<td> {{$i=$i+1}}</td>
				<td>{{ $asessor->nama_asessor }}</td>
				<td>{{ $asessor->tahun}}</td>
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
