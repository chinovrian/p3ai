@extends('layouts.indexx')

@section('content')
      <div class="panel panel-default">
          <div class="panel-heading"><h4>Isi Data Asessor</h4></div>
          <div class="row">
          <div class="col-md-6 col-sm-9 col-xs-12">
			<div class="col-xs-12">


			<!-- PAGE CONTENT BEGINS -->
			
				{!! Form::model($serdos, ['method' => 'patch','route' => ['serdos.updateCeknya', $id]]) !!}

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">NIP Dosen</label>
					<div class="col-sm-9">
						<div class="pos-rel">
							<input type="text" name="nip_dosen" value="{{$serdos->nip_dosen}}"  class="form-control">
							 
                              <br/>
						</div>
					</div>
				</div>


				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Nama Dosen</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							<input type="text" name="nama_dosen" value="{{$serdos->nama_dosen}}"  class="form-control">
                              <br/>
						</div>
					</div>
				</div>

				

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Nama Asessor1</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::text('nama_asessor1', null, array('placeholder' => 'nama_asessor','class' => 'form-control')) !!}

                             
                         </div>
                         <br/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Nama Asessor2</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::text('nama_asessor2', null, array('placeholder' => 'nama_asessor','class' => 'form-control')) !!}


                             
                         </div>
                         <br/>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">kinerja Bidang Pendidikan</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							<input type="checkbox" name="sk" value="1"> Sk Mengajar<br/>
							<input type="checkbox" name="rps" value="1"> RPS<br/>
							<input type="checkbox" name="absen" value="1"> absen<br/>
							<input type="checkbox" name="nilai" value="1"> Nilai<br/>
                         </div>
                         <br/>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Kinerja Bidang Penelitian</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							<input type="checkbox" name="bp_penelitian" value="1"> Bukti Penugasan <br/>
							<input type="checkbox" name="bd_penelitian" value="1"> Bukti Dokumen <br/>
                             
                         </div>
                         <br/>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Pengabdian Masyarakat</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							<input type="checkbox" name="bp_pengabdian" value="1"> Bukti Penugasan <br/>
							<input type="checkbox" name="bd_pengabdian" value="1"> Bukti Dokumen <br/>
                             
                         </div>
                         <br/>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Penunjang Lainnya</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							<input type="checkbox" name="bp_penunjang" value="1"> Bukti Penugasan <br/>
							<input type="checkbox" name="bd_penunjang" value="1"> Bukti Dokumen <br/>
                             
                         </div>
                         <br/>
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