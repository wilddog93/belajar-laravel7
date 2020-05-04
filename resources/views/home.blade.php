@extends('layouts.master')

@section('title', 'Home')

@section('content')
	<div class="container">
		My name is {!! $name !!}
	</div>
@endsection