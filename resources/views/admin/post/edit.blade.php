
 @extends('layouts.master')

@section('content')

 <div class="col-lg-12">
        <div class="card">
            <div class="card-header text-center">
                <strong >Edit a Post</strong> 
            </div>
            <div class="card-body card-block">
                <form action="{{ route('posts.update', $post->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">

                @csrf
                @method('PUT')

                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">User</label></div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">{{auth::user()->name}}</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Title</label></div>
                        <div class="col-12 col-md-9"><input type="text" value="{{$post->title}}" name="title" placeholder="post title" class="form-control"></div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Sub Title</label></div>
                        <div class="col-12 col-md-9"><input type="text" value="{{$post->subtitle}}" name="subtitle" placeholder="subtitle.." class="form-control"></div>
                    </div>
                    
                    <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Select cathegory</label></div>
                            <div class="col-12 col-md-9">
                                <select name="cathegory" id="select" class="form-control">
                                    <option value="">You want to chance...</option>
                                    @foreach($cathegories as $cathegory)
                                    <option  {{$cathegory->id == $post->cathegory->id ? 'selected' : ''}} 
                                    value="{{$cathegory->id}}"> {{$cathegory->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="image"  class="form-control-file"></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                        <div class="col-12 col-md-9"><textarea name="description" id="textarea-input" rows="12" placeholder="Content..." class="form-control">{{$post->description}}</textarea></div>
                    </div>
                          <input type="hidden" name="_token" value="{{csrf_token()}}">

                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-info btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Update
                                </button>
                           </div>
                </form>
            </div>
            
        </div>
    </div>

@stop