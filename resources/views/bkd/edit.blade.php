@extends('layouts.index')

@section('content')
      <div class="panel panel-default">
          <div class="panel-heading"><h4>Isi Keterangan</h4></div>
          <div class="row">
          <div class="col-md-6 col-sm-9 col-xs-12">
			<div class="col-xs-12">


			<!-- PAGE CONTENT BEGINS -->
			
				{!! Form::model($bkd, ['method' => 'patch','route' => ['bkd.update', $bkd->id]]) !!}
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">NIP Dosen</label>
					<div class="col-sm-9">
						<div class="pos-rel">
							<input type="text" name="nip_dosen" value="{{$bkd->nip_dosen}}"  class="form-control">
							 
                              <br/>
						</div>
					</div>
				</div>


				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Nama Dosen</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							<input type="text" name="nama_dosen" value="{{$bkd->nama_dosen}}"  class="form-control">
                              <br/>
						</div>
					</div>
				</div>


				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Keterangan</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							 <select name="keterangan" class="form_control" >
							 	<option >-Pilih Keterangan-</option>
							 	<option value="sudah menyerahkan"> Sudah Menyerahkan</option>
							 	<option value="belum menyerahkan"> Belum Menyerahkan</option>
							 </select>
                   		</div>
                   <br/>
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
						<br/>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Semester</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							 <select name="smt" class="form_control" >
							 	<option>--pilih semester--</option>
							 	<option value="Ganjil"> Ganjil</option>
							 	<option value="Genap"> Genap</option>
							 </select>
                   		</div>
                   <br/>
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