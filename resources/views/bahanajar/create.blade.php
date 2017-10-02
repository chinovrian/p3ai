@extends('layouts.index')

@section('content')
      <div class="panel panel-default">
          <div class="panel-heading"><h4>Isi Data RPS</h4></div>
          <div class="row">
          <div class="col-md-6 col-sm-9 col-xs-12">
			<div class="col-xs-12">


			<!-- PAGE CONTENT BEGINS -->
			
				{!! Form::open(array('route' => 'bahanajar.store','method'=>'POST','class'=>'form form-horizontal')) !!}


				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Judul Bahan Ajar</label>
					<div class="col-sm-9">
						<div class="pos-rel">
							 {!! Form::text('judul_bahanajar', null, array('placeholder' => 'judul','class' => 'form-control')) !!}
		
                              <br/>
						</div>
					</div>
				</div>


				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Dosen Ketua</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::text('dosen_ketua', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}
                              <br/>
						</div>
					</div>
				</div>



				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Dosen Anggota 1 </label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::text('dosen_anggota1', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}
                              <br/>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Dosen Anggota 2 </label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::text('dosen_anggota2', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}
                              <br/>
						</div>
					</div>
				</div>
			<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Dosen Anggota 3 </label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::text('dosen_anggota3', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}
                              <br/>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Dosen Anggota 4</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::text('dosen_anggota4', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}
                              <br/>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Dosen Anggota 5</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::text('dosen_anggota5', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}
                              <br/>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Dosen Anggota 6 </label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::text('dosen_anggota6', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}
                              <br/>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Dosen Anggota 7</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::text('dosen_anggota7', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}
                              <br/>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Dosen Anggota 8</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::text('dosen_anggota8', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}
                              <br/>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Dosen Anggota 9</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::text('dosen_anggota9', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}
                              <br/>
						</div>
					</div>
				</div>



				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">jurusan</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::select('nama_jurusan',$jurusan ,array('class' => 'form-control')) !!}
                       </div>
					</div>
				</div>


					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right">Prodi</label>
					<div class="col-sm-9">
						<div class="pos-rel">
							{!! Form::select('prodi',$prodi,  array('class' => 'form-control')) !!}
                          
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