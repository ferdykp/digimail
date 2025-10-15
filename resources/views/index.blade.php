@extends('layout.master')
@section('content')
    @include('home.index')
    @include('feature.index')
    @include('order.index')
    @include('package.index')
    {{-- @include('clientWed.index') --}}
@endsection
