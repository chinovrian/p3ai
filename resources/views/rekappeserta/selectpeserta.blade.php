@extends('layouts.indexx')

@section('content')
 <div class="panel panel-default">
 <div class="panel-heading"><h4>Laporan</h4></div>
    <div class="row">
        <div class="col-md-6 col-sm-9 col-xs-12">
			<div class="col-xs-12">


			<!-- PAGE CONTENT BEGINS -->
			
		<form method="post" action="{{route('rekappeserta.filterpeserta')}}">
			
		

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Tahun</label>

					<div class="col-sm-9">
						<div class="pos-rel">
							 <select name="th" class="form_control">
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
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					 <button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
</form>
	</div>

</div>
</div>
</div>      
</div>
@endsection