@extends('layouts.app')
@section('title', __('file.text_titre_page_modif'))
@section('titleHeader', __('file.text_titre_page_modif'))
@section('content')
<div class="row justify-content-center">
    <div class="col-6">
        <div class="card">
            <form  method="post" enctype="multipart/form-data">
                @csrf
                 @method('put')
                <div class="card-body">
                    <div class="mb-3">
                        <label for="titre_fr" class="form-label">@lang('file.text_titre_fr')</label>
                        <input type="text" class="form-control"name="titre_fr" required value="{{  $fichier->titre_fr ?? old('titre_fr') }}">
                    </div>
                   @error('titre_fr')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror                    
                    <div class="mb-3">
                        <label for="titre_en" class="form-label">@lang('file.text_titre_en')</label>
                        <input type="text" class="form-control"name="titre_en" required value="{{ $fichier->titre_en ?? old('titre_en') }}">
                    </div>                    
                    @error('titre_en')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="mb-3">
                    <label for="fichier" class="form-label">@lang('file.text_selec_fichier')</label>
                     <input type="file" class="form-control" name="chemin">
                    </div>
                    @error('chemin')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror                    
                </div>

                <div class="card-footer d-grid mx-auto">
                    <input type="submit" value="@lang('file.text_bouton_modifier')" class="btn btn-dark btn-block">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection