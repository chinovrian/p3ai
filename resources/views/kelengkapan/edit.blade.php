@extends('layouts.indexx')

@section('content')
      <div class="panel panel-default">
          <div class="panel-heading"><h4>Isi Data Kelengkapan</h4></div>
          <div class="row">
          <div class="col-md-6 col-sm-9 col-xs-12">
			<div class="col-xs-12">


			<!-- PAGE CONTENT BEGINS -->
			
				{!! Form::model($kelengkapan, ['method' => 'patch','route' => ['kelengkapan.update', $kelengkapan->id,'files'=>true]]) !!}


				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Nip Dosen</label>
					<div class="col-sm-9">
						<div class="pos-rel">
							 {!! Form::text('nip_dosen', null, array('placeholder' => 'nip_dosen','class' => 'form-control')) !!}
							
                              <br/>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Nama Dosen</label>
					<div class="col-sm-9">
						<div class="pos-rel">
							 {!! Form::text('nama_dosen', null, array('placeholder' => 'nama','class' => 'form-control')) !!}
							
                              <br/>
						</div>
					</div>
				</div>

				
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Ijazah S1</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::file('ijas1', null, array('class' => 'form-control')) !!}
                              <br/>
						</div>
					</div>
				</div>

				
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Ijazah S2</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::file('ijas2', null, array('class' => 'form-control')) !!}
                              <br/>
						</div>
					</div>
				</div>


				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Ijazah S3</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::file('ijas3', null, array('class' => 'form-control')) !!}
                              <br/>
						</div>
					</div>
				</div>


				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Sertifikat Pendidik</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::file('ser_pen', null, array('class' => 'form-control')) !!}
                              <br/>
						</div>
					</div>
				</div>

				
						<div class="form-group">
							<div class="col-sm-9">
								<div class="pos-rel">
									 <button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</div>
						</div>
	
</div>
  </div>

  {!! Form::close() !!}  
   </div>      
  </div>
 </div>
</div>
</div>
@endsection