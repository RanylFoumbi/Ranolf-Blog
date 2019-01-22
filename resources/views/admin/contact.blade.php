

@extends('layouts.master')

@section('content')
        <div class="col-md-12">
                        <div class="card">
                            <div class="card-header text-center">
                                <strong class="card-title">Contact message</strong>                        
                             </div>


                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Fullname</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Phone</th>
                                            <th class="text-center">Compagny</th>
                                            <th class="text-center">Message</th>
                                            <th class="text-center">Date</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                    @foreach($contactList as $contact)
                                        <tr>
                                            <td class="text-center">{{$contact->fullname}}</td>
                                            <td class="text-center">{{$contact->email}}</td>
                                            <td class="text-center">{{$contact->phone}}</td>
                                            <td class="text-center">{{$contact->compagny}}</td>
                                            <td class="text-center">{!!$contact->message!!}</td>
                                            <td class="text-center">{{$contact->created_at}}</td>
                                        </tr>
                                        @endforeach  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection

 

