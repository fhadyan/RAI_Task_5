<?php use App\User; ?>
@extends('layouts.master')

@section('content')

    <h1>Users <a href="{{ url('/user/create') }}" class="btn btn-primary pull-right btn-sm">Add New User</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>SL.</th><th>Name</th><th>Email</th><th>Password</th><th>Actions</th>
                </tr>
            </thead>                
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($users as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/user', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->email }}</td><td>{{ $item->password }}</td>
                    <td>
                        <a href="{{ url('/user/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a>
                        / 
                        {!! Form::open(['method'=>'delete','action'=>['UserController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection