@extends('layouts.index')

@section('content')
      <div class="panel panel-default">
          <div class="panel-heading"><h4>Isi Data Dosen</h4></div>
          <div class="row">
          <div class="col-md-6 col-sm-9 col-xs-12">
			<div class="col-xs-12">


			<!-- PAGE CONTENT BEGINS -->
			
				{!! Form::model($jurusan, ['method' => 'patch','route' => ['jurusan.update', $jurusan->id]]) !!}

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Nama Jurusan</label>
					<div class="col-sm-9">
						<div class="pos-rel">
							 {!! Form::text('nama_jurusan', null, array('placeholder' => 'Nama_jurusan','class' => 'form-control')) !!}
							 @if ($errors->has('nip_dosen'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_jurusan') }}</strong>
                                    </span>
                              @endif
                              <br/>
						</div>
					</div>
				</div>


						
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