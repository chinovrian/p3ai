@extends('layouts.index')

@section('content')
      <div class="panel panel-default">
          <div class="panel-heading"><h4>Isi Data Dosen</h4></div>
          <div class="row">
          <div class="col-md-6 col-sm-9 col-xs-12">
			<div class="col-xs-12">


			<!-- PAGE CONTENT BEGINS -->
			
				{!! Form::model($asessor, ['method' => 'patch','route' => ['asessor.update', $asessor->id]]) !!}

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">NIP Dosen</label>
					<div class="col-sm-9">
						<div class="pos-rel">
							 {!! Form::text('nip_asessor', null, array('placeholder' => 'Nip asessor','class' => 'form-control')) !!}
                              <br/>
						</div>
					</div>
				</div>


				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Nama Asessor</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::text('nama_asessor', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}
							 
                              <br/>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">jurusan</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							 {!! Form::select('jurusan_id', $jurusan, array('class' => 'form-control')) !!}
							
                              <br/><br/>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Alamat Dosen</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							 {!! Form::textarea('alamat_asessor', null, array('placeholder' => 'Alamat','class' => 'form-control')) !!}
							
                              <br/>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Email</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							 {!! Form::email('email_asessor', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
							
                              <br/>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">No.Telp</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							 {!! Form::text('telepon', null, array('placeholder' => 'No.Telp','class' => 'form-control')) !!}
							 
                              <br/>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Foto</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							<input type="file" name="foto" class="form-control" placeholder="Foto">
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
					<label class="col-sm-3 control-label no-padding-right">Tahun</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							 <select name="tahun" class="form_control">
							 <?php $i=2001?>
							 @while($i<2050)
							 	<option value="{{$i=$i+1}}">{{$i}} </option>
							 @endwhile
							 </select>
							 
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