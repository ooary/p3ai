                     <div class="form-group{{ $errors->has('nip') ? ' has-error' : '' }}">
                        <div class="row">
                            <label class="col-md-4 control-label">nip</label>

                            <div class="col-md-4">
                                {{Form::text('nip',null,['class'=>'form-control','disabled'])}}

                                @if ($errors->has('nip'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        </div>
                 
                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                        <div class="row">
                            <label class="col-md-4 control-label">nama</label>

                            <div class="col-md-4">
                                {{Form::text('nama',null,['class'=>'form-control','disabled'])}}
                              

                                @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif

                            </div>
                           
                         </div>  
                       </div>
                   
                   
                   
                           <div class="form-group{{ $errors->has('jurusan_id') ? ' has-error' : '' }}">
                            <div class="row">
                                <label class="col-md-4 control-label">jurusan</label>

                                <div class="col-md-4">

                                {{Form::select('jurusan_id',[''=>'']+App\Jurusan::lists('jurusan','id')->all(),null,['class'=>'form-control','disabled'])}}
                                   
                                   
                                    @if ($errors->has('jurusan_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('jurusan_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>  
                            </div>

                                <div class="form-group{{ $errors->has('thn_serdos') ? ' has-error' : '' }}">
                            <div class="row">
                                <label class="col-md-4 control-label">Tahun Serdos</label>

                                <div class="col-md-4">

                                {{Form::text('thn_serdos',null,['class'=>'form-control'])}}
                                   
                                   
                                    @if ($errors->has('thn_serdos'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('thn_serdos') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>  
                            </div>
                                    <div class="form-group{{ $errors->has('gelombang') ? ' has-error' : '' }}">
                            <div class="row">
                                <label class="col-md-4 control-label">Gelombang</label>

                                <div class="col-md-4">

                                {{Form::select('gelombang',[''=>'','1'=>'1','2'=>'2','3'=>'3'],null,['class'=>'form-control'])}}
                                   
                                   
                                    @if ($errors->has('gelombang'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('gelombang') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>  
                            </div>
                             <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <div class="row">
                                <label class="col-md-4 control-label">status</label>

                                <div class="col-md-4">

                                {{Form::select('status',[''=>'','1'=>'LULUS','2'=>'TIDAK LULUS','3'=>'BELUM SERDOS'],null,['class'=>'form-control'])}}
                                   
                                   
                                    @if ($errors->has('status'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('status') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>  
                            </div>
                          
                            {{Form::hidden('jurusan_id',$dataDosen->jurusan_id)}}


                            <div class="form-group{{ $errors->has('editor1') ? ' has-error' : '' }}">
                            <div class="row">
                                <label class="col-md-4 control-label"></label>

                                <div class="col-md-6">

                                {{Form::submit(isset($model)? 'Update' :'Posting',['class'=>'btn btn-primary'])}}
                                   <button onclick="history.go(-1)" class="btn btn-danger">Kembali</button>
                                </div>
                            </div>  
                            </div>

