@extends('layouts.indexx')
 
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
	            <a class="btn btn-success" href="{{ route('prodi.create') }}"> Create New Prodi</a>
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
						<th>Nama Prodi</th>
						<th width="280px">Action</th>
					</tr>
					@foreach ($prodis as $key => $prodi)
					<tr>
						<td>{{ ++$i }}</td>
						<td>{{ $prodi->nama_prodi }}</td>

						<td>
							<a class="btn btn-minier btn-purple" href="{{ route('prodi.edit',$prodi->id) }}">Edit</a>
							
							
							{!! Form::open(['method' => 'DELETE','route' => ['prodi.destroy', $prodi->id],'style'=>'display:inline']) !!}
				            {!! Form::submit('Delete', ['class' => 'btn btn-minier btn-purple']) !!}
				        	{!! Form::close() !!}
				        	
						</td>
					</tr>

				  @endforeach
				</table>
			  </div>
	{!! $prodis->render() !!}
			</div>
		  </div>
		 </div>
		</div>
	  </div>
	 </div>
@endsection
