@extends('layouts.index')
 
@section('content')
<div class="page-content">
  <div class="row">
	<div class="page-header">
		<h1>Tables
			<small><i class="ace-icon fa fa-angle-double-right"></i>
				Dosen
			</small>
		</h1>
		<div class="pull-right">
	            <a class="btn btn-success" href="{{ route('dosen.create') }}"> ADD</a>
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
						<th>Jurusan</th>
						<th>Email Dosen</th>
						<th>Telepon</th>
						<th width="280px">Action</th>
					</tr>
					@foreach ($dosens as $key => $dosen)
					<tr>
						<td>{{ ++$i }}</td>
						<td>{{ $dosen->nip_dosen }}</td>
						<td>{{ $dosen->nama_dosen }}</td>
						<td>{{ $dosen->namjur }}</td>
						<td>{{ $dosen->email_dosen}}</td>
						<td>{{ $dosen->telepon }}</td>
						

						<td>
							<a class="btn btn-minier btn-purple" href="{{ route('dosen.show',$dosen->id) }}">Show</a>
							
							<a class="btn btn-minier btn-purple" href="{{ route('dosen.edit',$dosen->id) }}">Edit</a>
							
							
							

							
							
							{!! Form::open(['method' => 'DELETE','route' => ['dosen.destroy', $dosen->id],'style'=>'display:inline']) !!}
				            {!! Form::submit('Delete', ['class' => 'btn btn-minier btn-purple']) !!}
				        	{!! Form::close() !!}
				        	
						</td>
					</tr>

				  @endforeach
				</table>
			  </div>
	{!! $dosens->render() !!}
			</div>
		  </div>
		 </div>
		</div>
	  </div>
	 </div>
@endsection
