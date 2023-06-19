@extends('layouts.app')
@section('title', __('create_article.text_titre_page_modif'))
@section('titleHeader', __('create_article.text_titre_page_modif'))
@section('content')
<div class="row justify-content-center">
    <div class="col-6">
        <div class="card">
            <form action="" method="post">
                @csrf
                @method('put')
                <div class="card-body">
                    <input type="text" class="form-control mt-3" name="titre" placeholder="@lang('create_article.text_titre')" required value="{{ $article->titre ?? old('titre') }}">
                    @error('titre')
                    <div class="text-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror

                    <textarea class="form-control mt-3" name="contenu_fr" placeholder="@lang('create_article.text_contenu_fr')" required>{{ $article->contenu_fr ?? old('contenu_fr') }}</textarea>
                    @error('contenu_fr')
                    <div class="text-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror

                    <textarea class="form-control mt-3" name="contenu_en" placeholder="@lang('create_article.text_contenu_en')" required>{{ $article->contenu_en ?? old('contenu_en') }}</textarea>
                    @error('contenu_en')
                    <div class="text-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="card-footer d-grid mx-auto">
                    <input type="submit" value="@lang('create_article.text_bouton_modifier')" class="btn btn-dark btn-block">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection