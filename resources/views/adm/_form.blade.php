                     <div class="form-group{{ $errors->has('nip') ? ' has-error' : '' }}">
                        <div class="row">
                            <label class="col-md-4 control-label">nip</label>

                            <div class="col-md-4">
                                {{Form::text('nip',null,['class'=>'form-control'])}}

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
                                {{Form::text('nama',null,['class'=>'form-control'])}}
                              

                                @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif

                            </div>
                           
                        </div>  
                    </div>
                     <div class="form-group{{ $errors->has('agama') ? ' has-error' : '' }}">
                        <div class="row">
                            <label class="col-md-4 control-label">agama</label>

                            <div class="col-md-4">
                                {{Form::text('agama',null,['class'=>'form-control'])}}
                              

                                @if ($errors->has('agama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('agama') }}</strong>
                                    </span>
                                @endif

                            </div>
                           
                        </div>  
                    </div>
                        <div class="form-group{{ $errors->has('tgl_lahir') ? ' has-error' : '' }}">
                        <div class="row">
                            <label class="col-md-4 control-label">Tanggal lahir</label>

                             <div class="col-md-2">
                                {{Form::text('tgl_lahir',null,['class'=>'form-control datePicker'])}}

                                @if ($errors->has('tgl_lahir'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tgl_lahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        </div>
                      <div class="form-group{{ $errors->has('no_hp') ? ' has-error' : '' }}">
                            <div class="row">
                                <label class="col-md-4 control-label">no Hp</label>

                                <div class="col-md-4">

                                {{Form::text('no_hp',null,['class'=>'form-control','max'=>'12'])}}
                                   
                                   
                                    @if ($errors->has('no_hp'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('no_hp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>  
                            </div>
                           <div class="form-group{{ $errors->has('jurusan_id') ? ' has-error' : '' }}">
                            <div class="row">
                                <label class="col-md-4 control-label">jurusan</label>

                                <div class="col-md-4">

                                {{Form::select('jurusan_id',[''=>'']+App\Jurusan::lists('jurusan','id')->all(),null,['class'=>'form-control'])}}
                                   
                                   
                                    @if ($errors->has('jurusan_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('jurusan_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>  
                            </div>
                             <div class="form-group{{ $errors->has('golongan_id') ? ' has-error' : '' }}">
                            <div class="row">
                                <label class="col-md-4 control-label">Golongan</label>

                                <div class="col-md-4">

                                {{Form::select('golongan_id',[''=>'']+App\Golongan::lists('golongan','id')->all(),null,['class'=>'form-control'])}}
                                   
                                   
                                    @if ($errors->has('golongan_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('golongan_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>  
                            </div>
                               <div class="form-group{{ $errors->has('pendidikan') ? ' has-error' : '' }}">
                            <div class="row">
                                <label class="col-md-4 control-label">pendidikan</label>

                                <div class="col-md-4">

                                {{Form::select('pendidikan',[''=>'','sma'=>'SMA','s1'=>'S1','s2'=>'S2','s3'=>'S3'],null,['class'=>'form-control'])}}
                                   
                                   
                                    @if ($errors->has('pendidikan'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('pendidikan') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>  
                            </div>
                              <div class="form-group{{ $errors->has('posisi') ? ' has-error' : '' }}">
                            <div class="row">
                                <label class="col-md-4 control-label">posisi</label>

                                <div class="col-md-4">

                               {{Form::text('posisi',null,['class'=>'form-control'])}}
                                   
                                   
                                    @if ($errors->has('posisi'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('posisi') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>  
                            </div>
                            <div class="form-group{{ $errors->has('editor1') ? ' has-error' : '' }}">
                            <div class="row">
                                <label class="col-md-4 control-label"></label>

                                <div class="col-md-6">

                                   {{Form::submit(isset($model)? 'Update' :'Posting',['class'=>'btn btn-primary'])}}
                                </div>
                            </div>  
                            </div>
