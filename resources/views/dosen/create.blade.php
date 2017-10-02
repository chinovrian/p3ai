@extends('layouts.index')

@section('content')
      <div class="panel panel-default">
          <div class="panel-heading"><h4>Isi Data Dosen</h4></div>
          <div class="row">
          <div class="col-md-6 col-sm-9 col-xs-12">
			<div class="col-xs-12">


			<!-- PAGE CONTENT BEGINS -->
			
				{!! Form::open(array('route' => 'dosen.store','method'=>'POST','class'=>'form form-horizontal','files'=>true)) !!}


				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">No Sertifikat</label>
					<div class="col-sm-9">
						<div class="pos-rel">
							 {!! Form::text('no_sertifikat', null, array('placeholder' => 'No Sertifikat','class' => 'form-control')) !!}
	
                              <br/>
						</div>
					</div>
				</div>


				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">NIP Dosen</label>
					<div class="col-sm-9">
						<div class="pos-rel">
							 {!! Form::text('nip_dosen', null, array('placeholder' => 'Nip Dosen','class' => 'form-control')) !!}
							 @if ($errors->has('nip_dosen'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nip_dosen') }}</strong>
                                    </span>
                              @endif
                              <br/>
						</div>
					</div>
				</div>


				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Nama Dosen</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::text('nama_dosen', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}
							 @if ($errors->has('nama_dosen'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_dosen') }}</strong>
                                    </span>
                              @endif
                              <br/>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Nama Perguruan Tinggi</label>
					<div class="col-sm-9">
						<div class="pos-rel">
							 {!! Form::text('nama_pt', null, array('placeholder' => 'Nama PT','class' => 'form-control')) !!}
                              <br/>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Alamat Perguruan Tinggi</label>
					<div class="col-sm-9">
						<div class="pos-rel">
							 {!! Form::text('alamat_pt', null, array('placeholder' => 'alamat PT','class' => 'form-control')) !!}
                              <br/>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">jurusan</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::select('jurusan_id', $jurusan, array('class' => 'form-control')) !!}

                             
                         </div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Program Studi</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::select('prodi_id', $prodi, array('class' => 'form-control')) !!}
                         </div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Jabatan Fungsional</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							 {!! Form::text('jab_fungsional', null, array('placeholder' => 'Jabatan','class' => 'form-control')) !!}
                         </div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Golongan</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							 {!! Form::text('gol', null, array('placeholder' => 'Golongan','class' => 'form-control')) !!}
                         </div>
					</div>
				</div>


				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Tempat Lahir</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							 {!! Form::text('tempat_lahir', null, array('placeholder' => 'Tempat Lahir','class' => 'form-control')) !!}
                         </div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Tanggal Lahir</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							 {!! Form::date('tanggal_lahir', null, array('class' => 'form-control')) !!}
                         </div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Pendidikan S1</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							 {!! Form::text('pend_s1', null, array('placeholder' => 'Perguruan Tinggi S1','class' => 'form-control')) !!}
                         </div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Pendidikan S2</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							 {!! Form::text('pend_s2', null, array('placeholder' => 'Perguruan Tinggi S2','class' => 'form-control')) !!}
                         </div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Pendidikan S3</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							 {!! Form::text('pend_s3', null, array('placeholder' => 'Perguruan Tinggi S3','class' => 'form-control')) !!}
                         </div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Jenis</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							 <select name="jenis" class="form_control">
							 	<option value="DS">DOSEN BIASA</option>
							 	<option value="PR">PROFESOR</option>
							 	<option value="DT">DOSEN DEGAN TUGAS TAMBAHAN</option>
							 	<option value="PT">PROFESOR DENGAN TUGAS TAMBAHAN</option>
							 </select>
                         </div>
					</div>
				</div>


				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Bidang Ilmu</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							 {!! Form::text('bdg_ilmu', null, array('class' => 'form-control')) !!}
                         </div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Alamat Dosen</label>
					<div class="col-sm-9">
						<div class="pos-rel">
							 {!! Form::textarea('alamat_dosen', null, array('placeholder' => 'Alamat','class' => 'form-control')) !!}
							 @if ($errors->has('alamat_dosen'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat_dosen') }}</strong>
                                    </span>
                              @endif
                              <br/>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Email</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							 {!! Form::email('email_dosen', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
							 @if ($errors->has('email_dosen'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email_dosen') }}</strong>
                                    </span>
                              @endif
                              <br/>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">No.Telp</label>

					<div class="col-sm-9">
						<div class="pos-rel">
			
							 {!! Form::text('telepon', null, array('placeholder' => 'No.Telp','class' => 'form-control')) !!}
							 @if ($errors->has('telepon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telepon') }}</strong>
                                    </span>
                              @endif
                              <br/>
						</div>
					</div>
				</div>



				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Foto</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::file('foto', null, array('class' => 'form-control')) !!}
							 <!-- {!! Form::file('foto', null, array('placeholder' => 'Alamat','class' => 'form-control')) !!}
							 @if ($errors->has('foto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('foto') }}</strong>
                                    </span>
                              @endif -->
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