
@extends('layouts.indexx')
 
@section('content')
<div class="page-content">
  <div class="row">
	<div class="page-header">
		<h2>Data Peserta  Sertifiksi Dosen Tahun {{$bkdth}} Semester {{$bkdsm}}
			
		</h2>
<?php
	$i=0
?>

	</div><!-- /.page-header -->
	<div class="row">
		<div class="col-xs-12">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<a class="btn btn-succses" href="{{route('rekapbkd.setpdfbkd',[$bkdth,$bkdsm,$bkdket])}}">
		<i class="fa fa-download"></i>Report PDF
		</a>
			<!-- PAGE CONTENT BEGINS -->
			<table id="simple-table" class="table  table-bordered table-hover">
			<tr>
				<th>No</th>
				<th>Nama Dosen</th>
				<th>Keterangan </th>
			</tr>
				@foreach ($bkddosen as $key => $bkddosen)
			<tr>
				<td> {{$i=$i+1}}</td>
				<td>{{ $bkddosen->nama_dosen }}</td>
				<td>{{ $bkddosen->keterangan}}</td>
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
