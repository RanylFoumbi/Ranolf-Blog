
 @extends('layouts.master')

@section('content')

 <div class="col-lg-12">
        <div class="card">
            <div class="card-header text-center">
                <strong >Make a Post</strong> 
            </div>
            <div class="card-body card-block">
                <form action="{{ route('posts.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">User</label></div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">{{auth::user()->name}}</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Title</label></div>
                        <div class="col-12 col-md-9"><input type="text" value="" name="title" placeholder="enter title..." class="form-control"></div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col-md-3"><label for="text-input" class=" form-control-label">Subtitle & Cathegory</label></div>
                        <div class="col-12 col-md-4"><input type="text" value="" name="subtitle" placeholder="enter subtitle..." class="form-control"></div>
                        <div class="col-12 col-md-5">
                                <select name="cathegory" id="select" class="form-control">
                                    <option value="">You want to chance cathegory...</option>
                                    @foreach($cathegories as $cathegory)
                                    <option value="{{$cathegory->id}}">{{$cathegory->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                    </div>
                    
                    <!-- <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Select cathegory</label></div>
                           
                        </div> -->

                    <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                            <div class="col-12 col-md-9"><input type="file" value="" name="image" class="form-control-file"></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                        <div class="col-12 col-md-9"><textarea name="description"  rows="12" placeholder="enter content..." class="form-control"></textarea></div>
                    </div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Create
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