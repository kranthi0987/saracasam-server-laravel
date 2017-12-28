@extends('layout.master')
@section('content')
{!! Form::open(['method'=>'post','action'=>'saracasamcontroller@store','files'=>true]) !!}
{!! Form::submit('Click Me!')!!}
{!! Form::close() !!}
@stop