@extends('layouts.app')
@section('title', "Fichiers")
@section('content')
<div class="container">
    <h1 class="mt-4">@lang('file.text_titre_tableau')</h1>
    <div class="mt-4 mb-2">
        <a href="{{route('fichier.upload')}}" class="btn btn-success">@lang('file.text_titre_bouton')</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>@lang('file.text_titre_td')</th>
                <th>@lang('file.text_date_td')</th>
                <th>@lang('file.text_author_td')</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse($fichiers as $fichier)
            <tr>
                <td><a href="{{ route('fichier.download',$fichier->id)}}">
                    @if(session('locale') == 'fr')
                        {{$fichier->titre_fr}}
                    @else
                        {{$fichier->titre_en}}
                    @endif
                    </a>
                </td>
                <td>{{$fichier->date_upload}}</td>
                <td>{{$fichier->nom_etudiant}}</td>
                <td class="text-right">
                    <div class="d-flex justify-content-end">
                    @if ($fichier->etudiant_id == Auth::user()->etudiant->id)
                    <a href="#" class="btn btn-danger  me-2" data-id="{{$fichier->id}}" data-titre="{{$fichier->titre}}" data-lng="{{session('locale')}}" data-bs-toggle="modal" data-bs-target="#staticBackdrop">@lang('forum.text_btn_supprimer')</a>
                    <a href="{{route('fichier.edit',$fichier->id)}}" class="btn btn-secondary">@lang('forum.text_btn_modifier')</a>                        
                    @endif
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4"> Aucun fichier</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    {{$fichiers}}
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
<script src="{{asset('js/scriptModal.js')}}"></script>
@endsection
