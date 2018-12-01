
@extends('layouts.master')

@section('content')
        <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                                        <div class="float-right">                              
                                                 <a href="{{ route('new-visitor') }}"><button class="btn btn-success">New visitor</button></a>
                                        </div>                         
                             </div>


                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Message</th>
                                            <th>Date Message</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($visitorList as $visitor)
                                        <tr>
                                            <td>{{$visitor->name}}</td>
                                            <td>{{$visitor->email}}</td>
                                            <td>{{$visitor->message}}</td>
                                            <td>{{$visitor->created_at}}</td>
                                            <td> <a href="{{ route('editvisitor', $visitor->id) }}"><button class = "btn btn-warning " >edit</button></a> </td>
                                            <td><a href="{{ route('deletevisitor',$visitor->id) }}"><button class = "btn btn-danger " onclick="return confirm('Are you sure you want to delete {{ $visitor->name }} ?')">delete</button></a></td>
                                        </tr>
                                        @endforeach  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection

 

