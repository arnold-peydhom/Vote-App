@extends('base')

@section('title', 'Edition')
@section('content')
    <div class=" my-5 row">
        <div class="col-0 col-lg-3"></div>
        <div class="col-12 col-lg-6">
            <form action="{{ route('region.update', ['region' => $region]) }}" method="post">
                <h4>Editer la region</h4>
                @include('region.creation_form')
            </form>
        </div>
        <div class="col-0 col-lg-3"></div>
    </div>

@endsection
