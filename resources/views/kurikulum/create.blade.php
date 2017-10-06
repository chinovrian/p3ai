@extends('layouts.indexx')

@section('content')
      <div class="panel panel-default">
          <div class="panel-heading"><h4>Isi Data Kurikulum</h4></div>
          <div class="row">
          <div class="col-md-6 col-sm-9 col-xs-12">
			<div class="col-xs-12">


			<!-- PAGE CONTENT BEGINS -->
			
				{!! Form::open(array('route' => 'kurikulum.store','method'=>'POST','class'=>'form form-horizontal','files'=>true)) !!}

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Kode</label>
					<div class="col-sm-9">
						<div class="pos-rel">
							 {!! Form::text('kd', null, array('placeholder' => 'kode','class' => 'form-control')) !!}
							
                              <br/>
						</div>
					</div>
				</div>


				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Semester</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							 <select name="smt" class="form_conrol" >
							 	<option value="I">I</option>
							 	<option value="II"> II</option>
							 </select>
                   </div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Matakuliah</label>
					<div class="col-sm-9">
						<div class="pos-rel">
							 {!! Form::text('matakuliah', null, array('placeholder' => 'Matakuliah','class' => 'form-control')) !!}
							
                              <br/>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Judul Kurikulum</label>
					<div class="col-sm-9">
						<div class="pos-rel">
							 {!! Form::text('judul_kurikulum', null, array('placeholder' => 'Matakuliah','class' => 'form-control')) !!}
							
                              <br/>
						</div>
					</div>
				</div>


				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">SKS</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::text('sks', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}
							
                              <br/>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Jam/Minggu</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::text('jam', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}
							
                              <br/>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">jurusan</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::select('nama_jurusan', $jurusan, array('class' => 'form-control')) !!}
                       </div>
					</div>
				</div>


				<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right">Prodi</label>
					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::select('prodi', $prodi, array('class' => 'form-control')) !!}
                          
						</div>
					</div>
				</div>

				<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right">Tahun</label>
					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::select('tahun', $tahun, array('class' => 'form-control')) !!}
                          
						</div>
					</div>
				</div>
				

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">RPS</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::file('rps', null, array('class' => 'form-control')) !!}
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