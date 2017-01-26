@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Users</h4>
                </div>

    <table class="table table-condensed">

        <thead>
        <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>

        @if($users)

            @foreach($users as $user)

        <tr>
            <td>{{$user->id}}</td>
            <!--Simplified IF LOOP-->
            <td><img height="50" src="{{$user->photo ? $user->photo->file :'http://placehold.it/200x200'}}" alt=""></td>
            <td><a href="{{url('admin/users/'.$user->id.'/edit')}}"> {{$user->name}}</a></td>

            <td>{{$user->email}}</td>
            <td>{{$user->role->name}}</td>
            <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>
        </tr>

        @endforeach

        @endif

        </tbody>
    </table>
            </div>
        </div>
    </div>


@stop