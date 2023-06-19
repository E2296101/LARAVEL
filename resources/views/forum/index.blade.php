@extends('layouts.app')
@section('title', "Forum")
@section('content')
  <div class="container">
    <h1 class="text-center mb-4">Forum</h1>

    <!-- Bouton Ajouter un article -->
    <div class="text-end mb-4">
      <a href="{{route('forum.create')}}" class="btn btn-primary">@lang('forum.text_btn_ajouter')</a>
    </div>

    <!-- Liste des articles -->
    @forelse($articles as $article)
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{$article->titre}}</h5>
        <p class="card-text mb-1">{{$article->contenu_fr}}</p>
        <p class="card-text mb-0"><strong>@lang('forum.text_creation') :</strong> {{$article->nom_etudiant}} | <strong> @lang('forum.text_date') : </strong> {{$article->date_publication}}</p>
        @if ($article->etudiant_id == Auth::user()->etudiant->id)
        <div class="text-end mt-3">
          <a href="#" class="btn btn-danger me-2">@lang('forum.text_btn_supprimer')</a>
          <a href="#" class="btn btn-secondary">@lang('forum.text_btn_modifier')</a>
        </div>
        @endif
      </div>
    </div>
      @empty
     <div class="card-body">
      <p class="card-text mb-1">Aucun article</p>
     </div>
    </div>
     @endforelse
  </div>
  @endsection
