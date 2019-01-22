
@extends('layouts.master')

@section('content')
        <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title text-center">posts</strong>                        
                             </div>


                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Title</th>
                                            <th class="text-center">image</th>
                                            <th class="text-center">Date post</th>
                                            <th class="text-center">cathegory name</th>
                                            <th class="text-center">Edit</th>
                                            <th class="text-center">Delete</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                    @foreach($postList as $post)
                                        <tr>
                                            <td class="text-center">{{$post->title}}</td>
                                            <td class="text-center"><img withd="50" height="50" src="/upload/post/{{$post->image}}"></td>
                                            <td class="text-center">{{$post->created_at->format('F d, Y \a\t g:i A') }}</td>
                                            <td class="text-center">{{$post->cathegory->name}}</td>
                                            <td class="text-center"> <a href="{{  route('posts.edit', $post->id)}}"><button class = "btn btn-warning " >edit</button></a> </td>
                                            <td class="text-center"><a href="{{ route('posts.destroy', $post->id)}}"><button class = "btn btn-danger " onclick="return confirm('Are you sure you want to delete {{$post->title}} ?')">delete</button></a></td>
                                        </tr>
                                        @endforeach  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection

 

