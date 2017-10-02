@extends('layouts.index')

@section('content')
      <div class="panel panel-default">
          <div class="panel-heading"><h4>Isi Data Asessor</h4></div>
          <div class="row">
          <div class="col-md-6 col-sm-9 col-xs-12">
			<div class="col-xs-12">


			<!-- PAGE CONTENT BEGINS -->
			
				{!! Form::model($serdos, ['method' => 'patch','route' => ['serdos.updateasessor', $serdos->id]]) !!}

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
							<select name="nama_asessor1" class="form-control">
								<option>--pilih asessor</option>
								@foreach($asessor as $asessor)

								<option value="{{$asessor->id}}">{{$asessor->nama_asessor}}</option>

								@endforeach
								
							</select>
                             
                         </div>
                         <br/>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Nama Asessor2</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							<select name="nama_asessor2" class="form-control">
								<option>--pilih asessor</option>
								@foreach($asessors as $asessors)

								<option value="{{$asessors->id}}">{{$asessors->nama_asessor}}</option>

								@endforeach
								
							</select>
                             
                         </div>
                         <br/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Password</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							 {!! Form::text('passw', null, array('placeholder' => 'passw','class' => 'form-control')) !!}
                             
                         </div>
                         <br/>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">jurusan</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::select('jurusan_id', $jurusan, array('class' => 'form-control')) !!}

                         </div>
                         <br/>
					</div>
				</div>

			<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Tahun</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							 <select name="tahun_sertifikasi" class="form_control">
							 <?php $i=2001?>
							 @while($i<2050)
							 	<option value="{{$i=$i+1}}">{{$i}} </option>
							 @endwhile
							 </select>
							 
						</div>
						<br/>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Semester</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							 <select name="smt_sertifikasi" class="form_control" >
							 	<option>-pilih semester--</option>
							 	<option value="Ganjil"> Ganjil</option>
							 	<option value="Genap"> Genap</option>
							 </select>
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