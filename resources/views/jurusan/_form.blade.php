	<div class="row">
	<div class="col-md-6">
		<div class="form-group {{ $errors ->has('name') ? 'has-error' : ''}}">
			
			{{Form::label('Nama Prody','Nama Jurusan')}}

			
			{{Form::text('jurusan',null,['class'=>'form-control'])}}

			  @if ($errors->has('nama'))
		        <span class="help-block">
		                 <strong>{{ $errors->first('nama') }}</strong>
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

	