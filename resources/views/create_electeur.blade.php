@extends('base')

@section('title', 'electeurs')
@section('content')
    <h1 class="text-primary">Create electeur</h1>
    <form action="">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
@endsection
