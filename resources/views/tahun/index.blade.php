@extends('layouts.indexx')
 
@section('content')
<div class="page-content">
  <div class="row">
	<div class="page-header">
		<h1>Tables
			<small><i class="ace-icon fa fa-angle-double-right"></i>
			Tahun
			</small>
		</h1>
		<div class="pull-right">
	            <a class="btn btn-success" href="{{ route('tahun.create') }}"> Create Tahun</a>
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
						<th>Nama Tahun</th>
						<th width="280px">Action</th>
					</tr>
					@foreach ($tahuns as $key => $tahun)
					<tr>
						<td>{{ ++$i }}</td>
						<td>{{ $tahun->tahun }}</td>

						<td>
							<a class="btn btn-minier btn-purple" href="{{ route('tahun.edit',$tahun->id) }}">Edit</a>
							
							
							{!! Form::open(['method' => 'DELETE','route' => ['tahun.destroy', $tahun->id],'style'=>'display:inline']) !!}
				            {!! Form::submit('Delete', ['class' => 'btn btn-minier btn-purple']) !!}
				        	{!! Form::close() !!}
				        	
						</td>
					</tr>

				  @endforeach
				</table>
			  </div>
	{!! $tahuns->render() !!}
			</div>
		  </div>
		 </div>
		</div>
	  </div>
	 </div>
@endsection
