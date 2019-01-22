
 @extends('layouts.master')

@section('content')

 <div class="col-lg-12">
        <div class="card">
            <div class="card-header text-center">
                <strong >Create a cathegory</strong> 
            </div>
            <div class="card-body card-block">
                <form action="{{ route('updatecathegory',$cathegoryList->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <input type="hidden" name="cathegoryId" value="{{ ($cathegoryList) ? $cathegoryList->id : '' }}">
                       {!! csrf_field() !!}

                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">User</label></div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">{{auth::user()->name}}</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Title</label></div>
                        <div class="col-12 col-md-9"><input type="text" value="{{ ($cathegoryList) ? $cathegoryList->name : '' }}" name="name" placeholder="cathegory name" class="form-control"></div>
                    </div>
                  
                    <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                            <div class="col-12 col-md-9"><input type="file" name="image" class="form-control-file"></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                        <div class="col-12 col-md-9"><textarea name="detail" id="textarea-input" rows="12" placeholder="Content..." class="form-control">"{{ ($cathegoryList) ? $cathegoryList->detail : '' }}"</textarea></div>
                    </div>
                              <input type="hidden" name="_token" value="{{csrf_token()}}">

                              <div class="text-center">
                                <button type="submit" class="btn btn-info btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Update
                                </button>
                            </div>
                </form>
            </div>
            
        </div>
    </div>

@stop