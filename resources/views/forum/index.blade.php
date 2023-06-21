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
      <p class="card-text mb-1">
        @if(session('locale') == 'fr')
        {{$article->contenu_fr}}
        @else
        {{$article->contenu_en}}
        @endif
      </p>
      <p class="card-text mb-0"><strong>@lang('forum.text_creation') :</strong> {{$article->nom_etudiant}} | <strong> @lang('forum.text_date') : </strong> {{$article->date_publication}}</p>
      @if ($article->etudiant_id == Auth::user()->etudiant->id)
      <div class="text-end mt-3">
        <a href="#" class="btn btn-danger me-2" data-id="{{$article->id}}" data-titre="{{$article->titre}}" data-lng="{{session('locale')}}" data-bs-toggle="modal" data-bs-target="#staticBackdrop">@lang('forum.text_btn_supprimer')</a>
        <a href="{{route('forum.edit',$article->id)}}" class="btn btn-secondary">@lang('forum.text_btn_modifier')</a>
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
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">@lang('forum.text_title_modal')</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body modal-dialog-centered">

        <span class="articleInfoSpan bold"></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('forum.text_btn_close_modal')</button>
        <a href="" id="boutonSupprimer" class="btn btn-primary btn-sm">@lang('forum.text_btn_sup_modal')</a>
      </div>
    </div>
  </div>
</div>
<script src="{{asset('js/script.js')}}"></script>
@endsection