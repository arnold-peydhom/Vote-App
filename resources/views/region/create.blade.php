@extends('base')

@section('title', 'inscription')
@section('content')
    <div class=" my-5 row">
        <div class="col-0 col-lg-3"></div>
        <div class="col-12 col-lg-6">
            <h4>Créer une nouvelle région</h4>
            <form action="{{ route('region.store') }}" method="post">
                @include('region.creation_form')
            </form>
        </div>
        <div class="col-0 col-lg-3"></div>

    </div>

@endsection
