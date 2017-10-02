@extends('layouts.index')
 
@section('content')
<div class="page-content">
  <div class="row">
	<div class="page-header">
		<h1>Tables
			<small><i class="ace-icon fa fa-angle-double-right"></i>
				Jurusan
			</small>
		</h1>
	        </div>


	</div><!-- /.page-header -->
	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			<div class="row">
				<div class="col-xs-12">
			  <div class="well clearfix">
				@if ($message = Session::get('success'))
					<div class="alert alert-success">
						<p>{{ $message }}</p>
					</div>
				@endif
					<table id="simple-table" class="table  table-bordered table-hover">
						<tr>
						<th>id</th>
						<th>Nip Dosen</th>
						<th>Nama Dosen</th>
						<th>Keterangan</th>
						<th>tahun</th>
						<th>Semester</th>


						<th width="280px">Action</th>
					</tr>
					@foreach ($bkds as $key => $bkd)
					<tr>
						<td>{{ ++$i }}</td>
						<td>{{ $bkd->nip_dosen }}</td>
						<td>{{ $bkd->nama_dosen }}</td>
						<td>{{ $bkd->keterangan }}</td>
						<td>{{ $bkd->tahun }}</td>
						<td>{{ $bkd->smt }}</td>

						<td>
							<a class="btn btn-minier btn-purple" href="{{ route('bkd.edit',$bkd->id) }}">Edit</a>
							
							{!! Form::open(['method' => 'DELETE','route' => ['bkd.delete', $bkd->id],'style'=>'display:inline']) !!}
				            {!! Form::submit('Delete', ['class' => 'btn btn-minier btn-purple']) !!}
				        	{!! Form::close() !!}
				        	
						</td>
					</tr>

				  @endforeach
				</table>
			  </div>
	{!! $bkds->render() !!}
			</div>
		  </div>
		 </div>
		</div>
	  </div>
	 </div>
@endsection
