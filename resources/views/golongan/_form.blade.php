	<div class="row">
	<div class="col-md-6">
		<div class="form-group {{ $errors ->has('golongan') ? 'has-error' : ''}}">
			
			{{Form::label('Nama Golongan','Nama Golongan')}}

			
			{{Form::text('golongan',null,['class'=>'form-control'])}}

			  @if ($errors->has('golongan'))
		        <span class="help-block">
		                 <strong>{{ $errors->first('golongan') }}</strong>
		         </span>
		       @endif
			
			
			
		</div>
		</div>
		</div>
		


<div class="row">
	<div class="col-md-6">
		<div class="form-group ">
		
			{{Form::submit(isset($model)? 'Update' :'Add',['class'=>'btn btn-danger'])}}
			
			
		</div>
</div>
</div>

	