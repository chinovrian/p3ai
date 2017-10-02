@extends('layouts.index')

@section('content')
      <div class="panel panel-default">
          <div class="panel-heading"><h4>Isi Data Kurikulum</h4></div>
          <div class="row">
          <div class="col-md-6 col-sm-9 col-xs-12">
			<div class="col-xs-12">


			<!-- PAGE CONTENT BEGINS -->
			
				{!! Form::model($kurikulum, ['method' => 'patch','route' => ['kurikulum.update', $kurikulum->id],'files'=>true]) !!}


				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Matakuliah</label>
					<div class="col-sm-9">
						<div class="pos-rel">
							 {!! Form::text('matakuliah', null, array('placeholder' => 'Matakuliah','class' => 'form-control')) !!}
							 @if ($errors->has('matakuliah'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('matakuliah') }}</strong>
                                    </span>
                              @endif
                              <br/>
						</div>
					</div>
				</div>


				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Dosen Pengampu</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::text('dosen_pengampu', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}
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
					<label class="col-sm-3 control-label no-padding-right">jurusan</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::select('nama_jurusan', $jurusan, array('class' => 'form-control')) !!}
                       </div>
                       <br/>
					</div>
				</div>


					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right">Prodi</label>
					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::select('prodi', $prodi, array('class' => 'form-control')) !!}
                          
						</div>
						<br/>
					</div>
				</div>


				
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">FIle RPS</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::file('file_rps', null, array('class' => 'form-control')) !!}
							 
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