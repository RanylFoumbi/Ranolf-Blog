

@extends('layouts.master')

@section('content')
        <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>                        
                             </div>


                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Sub-Title</th>
                                            <th>Content</th>
                                            <th>image</th>
                                            <th>Date Message</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ()
                                        <tr>
                                            <td>{{$post->title}}</td>
                                            <td>{{$post->sub-title}}</td>
                                            <td>{{$post->content}}</td>
                                            <td>{{$post->image}}</td>
                                            <td>{{$post->created_at->format('F d, Y \a\t g:i A') }}</td>
                                            <td> <a href="{{ route('') }}"><button class = "btn btn-warning " >edit</button></a> </td>
                                            <td><a href="{{ route('') }}"><button class = "btn btn-danger " onclick="return confirm('Are you sure you want to delete ?')">delete</button></a></td>
                                        </tr>
                                        @endforeach  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection

 

