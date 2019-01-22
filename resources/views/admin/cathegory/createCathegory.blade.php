
 @extends('layouts.master')

@section('content')

 <div class="col-lg-12">
        <div class="card">
            <div class="card-header text-center">
                <strong >Create a cathegory</strong> 
            </div>
            <div class="card-body card-block">
                <form action="store" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">User</label></div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">{{auth::user()->name}}</p>
                        </div>
                    </div>
                    <div class="row form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Title</label></div>
                        <div class="col-12 col-md-9"> 
                              <input type="text" value="{{ old('name') }}" name="name" placeholder="cathegory title" class="form-control">
                       @if ($errors->has('name')) 
                        <span class="text-danger">
                            <small> a cathegory name is required!</small>
                        </span>
                       @endif
                        </div>
                    </div>
                  
                    <div class="row form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                            <div class="col-12 col-md-9"><input type="file" value="{{ old('image') }}" name="image" class="form-control-file" accept = 'image/jpeg , image/bmp , image/jpg, image/gif, image/png'>
                            @if ($errors->has('image')) 
                                <span class="text-danger">
                                    <small>a cathegory image is required!</small>
                                </span>
                            @endif
                       </div>
                    </div>

                    <div class="row form-group{{ $errors->has('detail') ? ' has-error' : '' }}">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                        <div class="col-12 col-md-9"><textarea name="detail" value="{{ old('detail') }}" rows="12" placeholder="Content..." class="form-control"></textarea>
                        @if ($errors->has('detail')) 
                                <span class="text-danger">
                                    <small>a cathegory description is required!</small>
                                </span>
                            @endif</div>
                    </div>
                        
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                     </div>

                </form>
            </div>
            
        </div>
    </div>

@stop