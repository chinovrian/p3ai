@extends('layouts.index')
 
@section('content')
<div class="page-content">
  <div class="row">
	<div class="page-header">
		<h1>Tables
			<small><i class="ace-icon fa fa-angle-double-right"></i>
				Sertifikasi Dosen
			</small>
		</h1>


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
						<th>Nama Asessor 1</th>
						<th>Nama Asessor 2</th>
						<th>Password</th>
						<th>Jurusan</th>
						<th>Tahun</th>
						<th>Kelengkapan Data</th>
						<th width="280px">Action</th>
					</tr>
					@foreach ($serdoss as $serdos)
					<tr>
						<td>{{ ++$i }}</td>
						<td>{{ $serdos->nip_dosen }}</td>
						<td>{{ $serdos->nama_dosen }}</td>
							@if($serdos->nama_asessor1 != NULL)
								<td>{{ $serdos->getAsessor($serdos->nama_asessor1)}}</td>
							
							@endif

							@if($serdos->nama_asessor2 != NULL)
								<td>{{ $serdos->getAsessor($serdos->nama_asessor2)}}</td>
							
								
							
							@endif
						<td>{{ $serdos->passw}}</td>
						<td>{{ $serdos->namjur}}</td>
						<td>{{ $serdos->tahun_sertifikasi }}/{{$serdos->smt_sertifikasi}}</td>
						<td>
							@if($serdos->data === 10)
								Lengkap
							@else
								
								Tidak Lengkap
							@endif
						</td>

						<td>
							
							
							<a class="btn btn-minier btn-purple" href="{{ route('serdos.pilihasessor',$serdos->id) }}">Pilih Asessor</a>

							<a class="btn btn-minier btn-purple" href="{{ route('serdos.edit',$serdos->id) }}">Edit</a>

							@if($serdos->cn===NULL)	
							<a class="btn btn-minier btn-purple" href="{{ route('serdos.cek',$serdos->id) }}">Cek</a>
							@else
							<a class="btn btn-minier btn-purple" href="{{ route('serdos.cekLagi',$serdos->nip_dosen) }}">Update Cek</a>
							@endif
							
							<br/><br/>
							{!! Form::open(['method' => 'DELETE','route' => ['serdos.destroy', $serdos->id],'style'=>'display:inline']) !!}
				            {!! Form::submit('Delete', ['class' => 'btn btn-minier btn-purple']) !!}
				        	{!! Form::close() !!}
				        	
						</td>
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
