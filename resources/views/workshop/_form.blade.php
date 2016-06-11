                     <div class="form-group{{ $errors->has('tema') ? ' has-error' : '' }}">
                        <div class="row">
                            <label class="col-md-4 control-label">Tema Workshop</label>

                            <div class="col-md-6">
                                {{Form::text('tema',null,['class'=>'form-control'])}}

                                @if ($errors->has('tema'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tema') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        </div>
                        <div class="form-group{{ $errors->has('narasumber') ? ' has-error' : '' }}">
                        <div class="row">
                            <label class="col-md-4 control-label">Narasumber</label>

                            <div class="col-md-6">
                                {{Form::text('narasumber',null,['class'=>'form-control'])}}

                                @if ($errors->has('narasumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('narasumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        </div>
                          <div class="form-group{{ $errors->has('tempat') ? ' has-error' : '' }}">
                        <div class="row">
                            <label class="col-md-4 control-label">Tempat</label>

                            <div class="col-md-6">
                                {{Form::text('tempat',null,['class'=>'form-control'])}}

                                @if ($errors->has('tempat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tempat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        </div>
                 
                        <div class="form-group{{ $errors->has('tgl_mulai') ? ' has-error' : '' }}">
                        <div class="row">
                            <label class="col-md-4 control-label">Tanggal mulai</label>

                             <div class="col-md-2">
                                {{Form::text('tgl_mulai',null,['class'=>'form-control datePicker'])}}

                                @if($errors->has('tgl_mulai'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tgl_mulai') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        </div>

                        <div class="form-group{{ $errors->has('tgl_selesai') ? ' has-error' : '' }}">
                        <div class="row">
                            <label class="col-md-4 control-label">Tanggal Selesai</label>

                             <div class="col-md-2">
                                {{Form::text('tgl_selesai',null,['class'=>'form-control datePicker'])}}

                                @if ($errors->has('tgl_selesai'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tgl_selesai') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        </div>
                     

                         <div class="form-group{{ $errors->has('isi') ? ' has-error' : '' }}">
                            <div class="row">
                                <label class="col-md-4 control-label">Keterangan Workshop</label>

                                <div class="col-md-6">

                                    {{Form::textarea('isi',null,['class'=>'form-control'],['id'=>'content'])}}
                                    <script>
                                        CKEDITOR.replace('isi')

                                    </script>
                                    @if ($errors->has('isi'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('isi') }}</strong>
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

         
                       

                   

                   
                   

                    