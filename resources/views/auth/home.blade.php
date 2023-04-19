@extends('layouts.app')

@section('content')
    <div style="padding:10px">
            Home Page

            @foreach($users as $user)
                <pre>
                    <span>Full Name:</span> {{$user->first_name}} {{$user->last_name}}
                    <span>Email:</span> {{$user->email}}
                    @if($user->actingAs('Admin', 'SuperAdmin'))<span>Password:</span> {{$user->password}} @endif
                </pre>
            @endforeach
    </div>
@endsection