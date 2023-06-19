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
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="#">Fichier 1</a></td>
                <td>2021-10-01</td>
                <td>
                    <button class="btn btn-primary btn-sm float-right">Modifier</button>
                    <button class="btn btn-danger btn-sm float-right">Supprimer</button>
                </td>
            </tr>
            <tr>
                <td><a href="#">Fichier 2</a></td>
                <td>2021-10-05</td>
                <td>
                    <button class="btn btn-primary btn-sm float-right">Modifier</button>
                    <button class="btn btn-danger btn-sm float-right">Supprimer</button>
                </td>
            </tr>
            <tr>
                <td><a href="#">Fichier 3</a></td>
                <td>2021-10-10</td>
                <td>
                    <button class="btn btn-primary btn-sm float-right">Modifier</button>
                    <button class="btn btn-danger btn-sm float-right">Supprimer</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection