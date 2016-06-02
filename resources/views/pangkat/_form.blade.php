	<div class="row">
	<div class="col-md-6">
		<div class="form-group {{ $errors ->has('pangkat') ? 'has-error' : ''}}">
			
			{{Form::label('Nama Pangkat','Nama Pangkat')}}

			
			{{Form::text('pangkat',null,['class'=>'form-control'])}}

			  @if ($errors->has('pangkat'))
		        <span class="help-block">
		                 <strong>{{ $errors->first('pangkat') }}</strong>
		         </span>
		       @endif
			
			
			
		</div>
	</div>
	</div>
      <div class="row">

     <div class="col-md-6">
				 <div class="form-group{{ $errors->has('golongan_list') ? ' has-error' : '' }}">
			{{Form::label('Golongan ','Golongan')}}
					
                    {!! Form::select('golongan_list[]',[''=>'']+App\Golongan::lists('golongan','id')->all(), null, ['class'=>'js-selectize', 'multiple']) !!}
	
                                @if ($errors->has('golongan_list'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('golongan_list') }}</strong>
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

	