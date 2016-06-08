                     <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                        <div class="row">
                            <label class="col-md-4 control-label">Judul Berita</label>

                            <div class="col-md-6">
                                {{Form::text('judul',null,['class'=>'form-control'])}}

                                @if ($errors->has('judul'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('judul') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        </div>
                 
                        <div class="form-group{{ $errors->has('img') ? ' has-error' : '' }}">
                        <div class="row">
                            <label class="col-md-4 control-label">Gambar</label>

                            <div class="col-md-6">
                               {{Form::file('img')}}

                                @if ($errors->has('img'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('img') }}</strong>
                                    </span>
                                @endif

                            </div>
                            @if (isset($model) && $model->img !== '')
                                <div class="row">
                                    <div class="col-md-6">
                                         <p>Gambar Sebelumnya:</p>
                                            <div class="thumbnail">
                                              <img src="{{ url('/img/' . $model->img) }}" class="img-rounded">
                                            </div>
                                    </div>
                                </div>
                             @endif
                        </div>  
                    </div>

                         <div class="form-group{{ $errors->has('isi') ? ' has-error' : '' }}">
                            <div class="row">
                                <label class="col-md-4 control-label">Deskripsi Event</label>

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

         
                       

                   

                   
                   

                    