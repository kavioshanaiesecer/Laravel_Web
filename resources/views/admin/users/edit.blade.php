@extends('layouts.app')

@section('content')


    
    <div class="row">

       <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3>Edit Users</h3>
                </div>
                <div> <br>
                    <img height="200" src="{{$user->photo ? $user->photo->file :'http://placehold.it/200x200'}}" alt="" class="center-block">
                </div>

                <div class="panel-body">
                    {!! Form::model($user,['method'=>'PATCH', 'action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}

                    <div class="form-group">
                        {!! Form::label('name','Name:') !!}
                        {!! Form::text('name',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('email','Email:') !!}
                        {!! Form::email('email',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('role_id','Role:') !!}
                        {!! Form::select('role_id',$roles ,null,['class'=>'form-control']) !!}
                    </div>


                    <div class="form-group">
                        {!! Form::label('is_active','Status:') !!}
                        {!! Form::select('is_active',array(1 =>'Active',0=>'Not Active'),null,['class'=>'form-control']) !!}
                    </div>


                    <div class="form-group">
                        {!! Form::label('photo_id','File:') !!}
                        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
                    </div>


                    <div class="form-group">
                        {!! Form::label('password','Password:') !!}
                        {!! Form::password('password',['class'=>'form-control']) !!}
                    </div>


                    <div class="form-group">
                        {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
                    </div>

                    {!! Form::close() !!}

                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@stop