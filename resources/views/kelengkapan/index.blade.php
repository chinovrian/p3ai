@extends('layouts.indexx')
 
@section('content')
<div class="page-content">
  <div class="row">
	<div class="page-header">
		<h1>Tables
			<small><i class="ace-icon fa fa-angle-double-right"></i>
				Kelengkapan
			</small>
		</h1>
		<div class="pull-right">
	            <a class="btn btn-success" href="{{ route('kelengkapan.create') }}"> Add</a>
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
						<th>Ijazah S1</th>
						<th>Ijazah S2</th>
						<th>Ijazah S3</th>
						<th>Sertifikat Pendidik</th>
						<th width="280px">Action</th>
					</tr>
					@foreach ($kelengkapans as $key => $kelengkapan)
					<tr>
						<td>{{ ++$i }}</td>
						<td>{{ $kelengkapan->nip_dosen }}</td>
						<td>{{ $kelengkapan->nama_dosen }}</td>
						<td><a href="storage/{{$kelengkapan->ijas1}}">{{ $kelengkapan->ijas1 }}</a></a></td>
						<td><a href="storage/{{$kelengkapan->ijas2}}">{{ $kelengkapan->ijas2 }}</a></td>
						<td><a href="storage/{{$kelengkapan->ijas3}}">{{ $kelengkapan->ijas3 }}</a></a></td>
						<td><a href="storage/{{$kelengkapan->ser_pen}}">{{ $kelengkapan->ser_pen }}</a></td>

						<td>
							<a class="btn btn-minier btn-purple" href="{{ route('kelengkapan.edit',$kelengkapan->id) }}">Edit</a>
							
							
							 {!! Form::open(['method' => 'DELETE','route' => ['kelengkapan.destroy', $kelengkapan->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-minier btn-purple']) !!}
                            {!! Form::close() !!}
				        	
						</td>
					</tr>

				  @endforeach
				</table>
			  </div>
	{!! $kelengkapans->render() !!}
			</div>
		  </div>
		 </div>
		</div>
	  </div>
	 </div>
@endsection
