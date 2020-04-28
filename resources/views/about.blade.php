@extends('layout.app')

@section('content')
<h1>About</h1>
@endsection

@section('sidebar')
@parent
    <h5>this is appended section of about.blade.php</h5>

@endsection