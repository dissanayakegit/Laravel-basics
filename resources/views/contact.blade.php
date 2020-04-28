@extends('layout.app')

@section('content')
<h1>Contact</h1>
    {{ Form::open(array('url' => 'contact/submit')) }}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class'=>'form-control', 'paceholder'=>'Enter name'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'E-Mail Address')}}
            {{Form::text('email', '', ['class'=>'form-control', 'paceholder'=>'Enter email'])}}
        </div>
        <div class="form-group">
            {{Form::label('message', 'Message')}}
            {{Form::textarea('message', '', ['class'=>'form-control', 'paceholder'=>'Enter massge'])}}
        </div>
        <div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        </div>
    {{ Form::close() }}

@endsection

@section('sidebar')
@parent
<h5>this is the content of the contact.blade.php file</h5>

@endsection