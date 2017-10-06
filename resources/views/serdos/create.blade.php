@extends('layouts.indexx')

@section('content')
      <div class="panel panel-default">
          <div class="panel-heading"><h4>Isi Data Dosen</h4></div>
          <div class="row">
          <div class="col-md-6 col-sm-9 col-xs-12">
			<div class="col-xs-12">


			<!-- PAGE CONTENT BEGINS -->
			
				{!! Form::open(array('route' => 'serdos.store','method'=>'POST','class'=>'form form-horizontal')) !!}


				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">NIP Dosen</label>
					<div class="col-sm-9">
						<div class="pos-rel">

							{!!Form::text('nip_dosen', null, array('class' => 'form-control' ));!!} 
                              <br/>
						</div>
					</div>
				</div>


				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Nama Dosen</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							<input type="" name="nama_dosen" value="nama_dosen" readonly="readonly" class="form_control" placeholder="">
                              <br/>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Nama Asessor</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::select('nama_asessor1', $asessor, array('class' => 'form-control')) !!}

                             
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
					<label class="col-sm-3 control-label no-padding-right">Semester</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							 <select name="smt_sertifikasi" class="form_conrol" >
							 	<option value="Ganjil"> Ganjil</option>
							 	<option value="Genap"> Genap</option>
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