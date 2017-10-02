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
		<div class="pull-right">
	            <a class="btn btn-success" href="{{ route('jurusan.create') }}"> Create New Jurusan</a>
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
						<th>Nama Jurusan</th>
						<th width="280px">Action</th>
					</tr>
					@foreach ($jurusans as $key => $jurusan)
					<tr>
						<td>{{ ++$i }}</td>
						<td>{{ $jurusan->nama_jurusan }}</td>

						<td>
							<a class="btn btn-minier btn-purple" href="{{ route('jurusan.edit',$jurusan->id) }}">Edit</a>
							
							
							{!! Form::open(['method' => 'DELETE','route' => ['jurusan.destroy', $jurusan->id],'style'=>'display:inline']) !!}
				            {!! Form::submit('Delete', ['class' => 'btn btn-minier btn-purple']) !!}
				        	{!! Form::close() !!}
				        	
						</td>
					</tr>

				  @endforeach
				</table>
			  </div>
	{!! $jurusans->render() !!}
			</div>
		  </div>
		 </div>
		</div>
	  </div>
	 </div>
@endsection
