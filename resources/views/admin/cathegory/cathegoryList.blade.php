
@extends('layouts.master')

@section('content')
        <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title text-center">Cathegory</strong>                        
                             </div>


                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">detail</th>
                                            <th class="text-center">image</th>
                                            <th class="text-center">Number of post</th>
                                            <th class="text-center">Date Message</th>
                                            <th class="text-center">Edit</th>
                                            <th class="text-center">Delete</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                    @foreach($cathegoryList as $cathegory)
                                        <tr>
                                            <td class="text-center">{{$cathegory->name}}</td>
                                            <td class="text-center">{!!$cathegory->detail!!}</td>
                                            <td class="text-center"><img withd="50" height="50" src="/upload/cathegory/{{$cathegory->image}}"></td>
                                            <td class="text-center">{{$cathegory->post->count()}}</td>
                                            <td class="text-center">{{$cathegory->created_at->format('F d, Y \a\t g:i A') }}</td>
                                            <td class="text-center"> <a href="{{ route('editcathegory' , $cathegory->id)}}"><button class = "btn btn-warning " >edit</button></a> </td>
                                            <td class="text-center"><a href="{{ route('deletecathegory' , $cathegory->id)}}"><button class = "btn btn-danger " onclick="return confirm('Are you sure you want to delete {{$cathegory->name}} ?')">delete</button></a></td>
                                        </tr>
                                        @endforeach  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection

 

