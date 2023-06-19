@extends('layouts.app')
@section('title', 'Ajouter étudiant')
@section('titleHeader', 'Ajouter étudiant')
@section('content')
    <div class="row mt-4 justify-content-center">
        <div class="col-6">
            <div class="card">
                <form method="post">
                    @csrf
                    <div class="card-header">
                        <div class="row">
                            <div class="col">informations personnelles</div>
                            <div class="col text-end">
                                <a href="{{route('etudiants.index')}}" class="btn btn-close" aria-label="Close"></a>
                            </div> 
                        </div>
                        
                    </div>
                    <div class="card-body">
                        <label for="title">Nom</label>
                        <input type="text" id="nom" name="nom" class="form-control">                        
                        <label for="date_naissance">Date de naissance</label>
                        <input type="date" class="form-control" id="date_naissance" name="date_naissance">
                        <label for="phone">Téléphome</label>
                        <input type="text" class="form-control" id="phone" name="phone">
                        <label for="email">Courriel</label>
                        <input type="text" class="form-control" id="email" name="email">
                        <label for="adresse">Adresse</label>                                                
                        <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Saisissez votre adresse">                        
                        <label for="category">Ville</label>
                       <select name="ville_id" id="ville" class="form-control">
                            @foreach($villes as $ville)
                            <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                            @endforeach
                        </select> 
                    </div>
                    <div class="card-footer text-center">
                        <input type="submit" class="btn btn-success" value="Ajouter">
                    </div>
                </form> 
            </div>
        </div>
    </div>
@endsection