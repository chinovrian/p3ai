@extends('layout.index')

@section('content')
<div class="row">
<div class="col-xs-12">
<!-- PAGE CONTENT BEGINS -->
<form class="form-horizontal" role="form">
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Text Field </label>

		<div class="col-sm-9">
			<input type="text" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5" />
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Full Length </label>

		<div class="col-sm-9">
			<input type="text" id="form-field-1-1" placeholder="Text Field" class="form-control" />
		</div>
	</div>

	<div class="space-4"></div>

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Password Field </label>

		<div class="col-sm-9">
			<input type="password" id="form-field-2" placeholder="Password" class="col-xs-10 col-sm-5" />
			<span class="help-inline col-xs-12 col-sm-7">
				<span class="middle">Inline help text</span>
			</span>
		</div>
	</div>

	<div class="space-4"></div>

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Readonly field </label>

		<div class="col-sm-9">
			<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="This text field is readonly!" />
			<span class="help-inline col-xs-12 col-sm-7">
				<label class="middle">
					<input class="ace" type="checkbox" id="id-disable-check" />
					<span class="lbl"> Disable it!</span>
				</label>
			</span>
		</div>
	</div>

	<div class="space-4"></div>

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Relative Sizing</label>

		<div class="col-sm-9">
			<input class="input-sm" type="text" id="form-field-4" placeholder=".input-sm" />
			<div class="space-2"></div>

			<div class="help-block" id="input-size-slider"></div>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-5">Grid Sizing</label>

		<div class="col-sm-9">
			<div class="clearfix">
				<input class="col-xs-1" type="text" id="form-field-5" placeholder=".col-xs-1" />
			</div>

			<div class="space-2"></div>

			<div class="help-block" id="input-span-slider"></div>
		</div>
	</div>
@endsection