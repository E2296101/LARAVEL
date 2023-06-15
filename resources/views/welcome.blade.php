@extends('layouts.app')
@section('title', config('app.name'))

@section('content')
<div class="d-flex justify-content-center align-items-center ">
    <div class="row bg-custom">
        <div class="col-12 position-relative text-center">
            <img src="{{asset('img/maisonneuve.webp')}}" class="img-fluid" style="width:1200px;" alt="Description de l'image">
            <div class="position-absolute top-50 start-50 translate-middle" style="background-color: rgba(200, 200, 200, 0.5); padding: 20px;">
                <h1>@lang('index.test_titre')</h1>
                <p>
                    @lang('index.text_paragraphe')
                </p>
                <a href="{{route('etudiants.index')}}" class="btn btn-primary">@lang('index.text_bouton')</a>
            </div>
        </div>
    </div>
</div>
@endsection
