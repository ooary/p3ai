                     <div class="form-group{{ $errors->has('no_surat') ? ' has-error' : '' }}">
                        <div class="row">
                            <label class="col-md-4 control-label">No Surat</label>

                            <div class="col-md-6">
                                {{Form::text('no_surat',null,['class'=>'form-control'])}}

                                @if ($errors->has('no_surat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('no_surat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        </div>
                        <div class="form-group{{ $errors->has('judul_surat') ? ' has-error' : '' }}">
                        <div class="row">
                            <label class="col-md-4 control-label">Nama Surat</label>

                            <div class="col-md-6">
                                {{Form::text('judul_surat',null,['class'=>'form-control'])}}

                                @if ($errors->has('judul_surat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('judul_surat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        </div>
                            <div class="form-group{{ $errors->has('tujuan') ? ' has-error' : '' }}">
                        <div class="row">
                            <label class="col-md-4 control-label">Tujuan</label>

                            <div class="col-md-6">
                                {{Form::text('tujuan',null,['class'=>'form-control'])}}

                                @if ($errors->has('tujuan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tujuan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        </div>
                         <div class="form-group{{ $errors->has('tgl_surat') ? ' has-error' : '' }}">
                        <div class="row">
                            <label class="col-md-4 control-label">Tanggal Surat</label>

                             <div class="col-md-2">
                                {{Form::text('tgl_surat',null,['class'=>'form-control datePicker'])}}

                                @if ($errors->has('tgl_surat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tgl_surat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        </div>
                 
                        <div class="form-group{{ $errors->has('file_surat_keluar') ? ' has-error' : '' }}">
                        <div class="row">
                            <label class="col-md-4 control-label">File </label>

                            <div class="col-md-6">
                               {{Form::file('file_surat_keluar')}}

                                @if ($errors->has('file_surat_keluar'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('file_surat_keluar') }}</strong>
                                    </span>
                                @endif

                            </div>
                            @if (isset($model) && $model->file_surat_keluar !== '')
                                <div class="row">
                                    <div class="col-md-6">
                                         <p>Surat Sebelumnya:<h4 style="color:red">{{$model -> file_surat_keluar}}</h4></p>
                                            
                                    </div>
                                </div>
                             @endif
                        </div>  
                    </div>

                         <div class="form-group{{ $errors->has('isi_surat') ? ' has-error' : '' }}">
                            <div class="row">
                                <label class="col-md-4 control-label">Isi Surat</label>

                                <div class="col-md-6">

                                    {{Form::textarea('isi_surat',null,['class'=>'form-control'],['id'=>'content'])}}
                                    <script>
                                        CKEDITOR.replace('isi_surat')

                                    </script>
                                    @if ($errors->has('isi_surat'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('isi_surat') }}</strong>
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

         
                       

                   

                   
                   
