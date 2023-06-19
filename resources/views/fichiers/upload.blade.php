@extends('layouts.app')
@section('title', __('create_article.text_titre_page'))
@section('titleHeader', __('create_article.text_titre_page'))
@section('content')
<div class="row justify-content-center">
    <div class="col-6">
        <div class="card">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="titre" class="form-label">Titre du fichier</label>
                        <input type="text" class="form-control" id="titre" name="titre" required>
                    </div>
                    <div class="mb-3">
                        <label for="fichier" class="form-label">Sélectionner un fichier</label>
                        <input type="file" class="form-control" id="fichier" name="fichier" required>
                    </div>
                </div>

                <div class="card-footer d-grid mx-auto">
                    <input type="submit" value="@lang('create_article.text_bouton')" class="btn btn-dark btn-block">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection