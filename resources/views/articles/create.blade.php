@extends('articles.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-start">
            <h2>Ajouter Une Reservation</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-outline-primary" href="{{ route('reservation.index') 
}}"> Retour</a>
        </div>
    </div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Oups! </strong> Il y a eu des problèmes avec votre
    entrée.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('reservation.store') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Nom:</strong>
                <input type="text" name="nom" class="form-control" placeholder="Saisir le nom">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Prenom:</strong>
                <input type="text" name="prenom" class="form-control" placeholder="Saisir le prenom">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Sexe:</strong>
                <input type="text" name="sexe" class="form-control" placeholder="Saisir le sexe">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Adresse:</strong>
                <input type="text" name="adresse" class="form-control" placeholder="Saisir l'adresse">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Telephone:</strong>
                <input type="text" name="telephone" class="form-control" placeholder="Saisir le numero telephonique">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Compagnie:</strong>
                <input type="text" name="compagnie" class="form-control" placeholder="Saisir la compagnie">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Date de Départ:</strong>
                <input type="text" name="date_depart" class="form-control" placeholder="Saisir le sexe">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Heure de Départ:</strong>
                <input type="text" name="heure_depart" class="form-control" placeholder="Saisir l'heure">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Source:</strong>
                <input type="text" name="source" class="form-control" placeholder="Saisir la source">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Destination:</strong>
                <input type="text" name="destination" class="form-control" placeholder="Saisir la destination">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Montant:</strong>
                <input type="text" name="montant" class="form-control" placeholder="Saisir le montant du billet">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Date de Reservation:</strong>
                <input type="text" name="date_depart" class="form-control" placeholder="Saisir le sexe">
            </div>
        </div>
    </div>
    <div class="row">
        <p></p>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btnprimary">Enregistrer</button>
        </div>
    </div>
</form>
@endsection