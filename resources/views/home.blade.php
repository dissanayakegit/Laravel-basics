@extends('layout.app')

@section('content')
<h1>home</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi facilis dolore hic molestiae aperiam voluptate perferendis corporis odit reiciendis aliquam illum eligendi dolorum omnis ea, animi odio earum in nemo.</p>
@endsection

@section('sidebar')
@parent
    <h5>this is the appended sidebar</h5>
@endsection