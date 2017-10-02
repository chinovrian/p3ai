@extends('layouts.index')
 
@section('content')
<div class="page-content">
  <div class="row">
	<div class="page-header">
		<h1>Tables
			<small><i class="ace-icon fa fa-angle-double-right"></i>
				Asessor
			</small>
		</h1>
		<div class="pull-right">
	            <a class="btn btn-success" href="{{ route('asessor.create') }}"> ADD</a>
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
						<th>Nip Asessor</th>
						<th>Nama Asessor</th>
						<th>Jurusan</th>
						<th>Tahun</th>
						<th width="280px">Action</th>
					</tr>
					@foreach ($asessors as $key => $asessor)
					<tr>
						<td>{{ ++$i }}</td>
						<td>{{ $asessor->nip_asessor }}</td>
						<td>{{ $asessor->nama_asessor }}</td>
						<td>{{ $asessor->namajur }}</td>
						<td>{{ $asessor->tahun}}</td>
						

						<td>
							<a class="btn btn-minier btn-purple" href="{{ route('asessor.show',$asessor->id) }}">Show</a>
							
							<a class="btn btn-minier btn-purple" href="{{ route('asessor.edit',$asessor->id) }}">Edit</a>
							
							
							

							
							
							{!! Form::open(['method' => 'DELETE','route' => ['asessor.destroy', $asessor->id],'style'=>'display:inline']) !!}
				            {!! Form::submit('Delete', ['class' => 'btn btn-minier btn-purple']) !!}
				        	{!! Form::close() !!}
				        	
						</td>
					</tr>

				  @endforeach
				</table>
			  </div>
	{!! $asessors->render() !!}
			</div>
		  </div>
		 </div>
		</div>
	  </div>
	 </div>
@endsection
