@extends('layouts.app')
@section('title', 'Liste des étudiants')
@section('titleHeader', 'Liste des étudiants')
@section('content')
        <div class="row justify-content-end">
            <div class="col-auto mb-2">
                <a href="{{route('etudiant.create')}}" class="btn btn-primary btn-sm">Saisir étudiant</a>
            </div>
        </div>
        <div class="row mt-8">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <table class="table  table-striped table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Date de naissaince</th>
                                    <th scope="col">Adresse</th>
                                    <th scope="col">Ville</th>
                                    <th scope="col">Courriel</th>
                                    <th scope="col">Téléphone</th>
                                    <th scope="col">Supression</th>
                                </tr>
                            </thead>
                            <tbody>
                        
                                @forelse($etudiants as $etudiant)
                                
                                    <tr class="table-row-hover">
                                        <td scope="col"><a href="{{ route('etudiant.edit', $etudiant->id)}}" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">{{$etudiant->id}}</a></td>
                                        <td scope="col">{{$etudiant->nom}}</td>
                                        <td scope="col">{{$etudiant->date_naissance}}</td>
                                        <td scope="col">{{$etudiant->adresse}}</td>
                                        <td scope="col">{{$etudiant->ville}}</td>
                                        <td scope="col">{{$etudiant->email}}</td>
                                        <td scope="col">{{$etudiant->phone}}</td>
                                        <td scope="col"><a href="#" class="btn btn-outline-danger" data-id="{{$etudiant->id}}" data-nom="{{$etudiant->nom}}" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Supprimer</a></td>
                
                                    </tr>
                               
                           
                                    
                                @empty
                                    <p class="text-danger">Aucun étudiant trouvé</p>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $etudiants }}
                    </div>
                </div>
            </div>
        </div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Supression</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body modal-dialog-centered">
         
        <span class="etudiantInfoSpan bold"></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
       <a href="" id="boutonSupprimer" class="btn btn-primary btn-sm">Supprimer</a>
      </div>
    </div>
  </div>
</div>
<script src="{{asset('js/script.js')}}" ></script>
@endsection



