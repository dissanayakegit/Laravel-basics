@extends('layout.app')

@section('content')
    @if(count($messages)>0)
        @foreach($messages as $message)
            <ul class="list-group">
                <li class="list-group-item">Name:{{$message->name}}</li>
                <li class="list-group-item">Email:{{$message->email}}</li>
                <li class="list-group-item">Message:{{$message->Message}}</li>
            </ul>
        @endforeach
    @endif
@endsection

@section('sidebar')
@parent
    <h5>this is the appended sidebar</h5>
@endsection