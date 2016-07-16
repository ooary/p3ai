		<div class="row">
	<div class="col-md-6">
		<div class="form-group {{ $errors ->has('ket') ? 'has-error' : ''}}">
			
			{{Form::label('keterangan','keterangan')}}
            {{Form::text('ket',null,['class'=>'form-control'])}}
			  @if ($errors->has('ket'))
		        <span class="help-block">
		                 <strong>{{ $errors->first('ket') }}</strong>
		         </span>
		       @endif
			
			
			
		</div>
	</div>
		</div>

	<div class="row">
	<div class="col-md-6">
		<div class="form-group {{ $errors ->has('nama_file') ? 'has-error' : ''}}">
			
			{{Form::label('File','File')}}
            {{Form::file('nama_file')}}

			  @if ($errors->has('nama_file'))
		        <span class="help-block">
		                 <strong>{{ $errors->first('nama_file') }}</strong>
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

	