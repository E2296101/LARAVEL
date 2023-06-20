@extends('layouts.app')
@section('title', "Forum")
@section('content')
<div class="container">
    <h1 class="mt-4">Liste des fichiers</h1>
    <div class="mt-4 mb-2">
        <a href="{{route('fichier.upload')}}" class="btn btn-success">Ajouter un fichier</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Date de publication</th>
                <th>Publié par</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse($fichiers as $fichier)
            <tr>
                <td><a href="{{ route('fichier.download',$fichier->id)}}">{{$fichier->titre}}</a></td>
                <td>{{$fichier->date_upload}}</td>
                <td>{{$fichier->nom_etudiant}}</td>
                <td class="text-right">
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-primary btn-sm me-2">Modifier</button>
                        <button class="btn btn-danger btn-sm ">Supprimer</button>
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
</div>
@endsection
