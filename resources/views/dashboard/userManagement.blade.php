@extends('layouts.app')

@section('content')

    <div class="wrapper">
        <div id="content">

            <div class="row">
                <div class="col-md-12">

                    <div class="container">
                        <div class="card bg-light mt-3">
                            <div class="card-header">
                                All System User
                            </div>
                            <div class="card-body" >

                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>password</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->password}}</td>
                                            <td><a href="{{url('editUser/'.$user->id)}}"  class="btn btn-info" role="button">Edit</a></td>
{{--                                            <td><button id="modal" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button></td>--}}


                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>


                                <div id="myModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
{{--                                                <button type="button" class="close" data-dismiss="modal">&times;</button>--}}
                                                <h4 class="modal-title">Modal Header</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p id="text">Some text in the modal.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    @endsection