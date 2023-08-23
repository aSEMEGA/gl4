@extends('articles.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-start">
            <h2>Modifier la Reservation</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-outline-primary" href="{{ route('reservation.index') }}"> Retour</a>
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
<form action="{{ route('reservation.update',$reservation->numerovoyageur) }}" method="post">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Nom:</strong>
                <input type="text" name="nom" value="{{ $reservation->nom }}" class="form-control" placeholder="Saisir le nom">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Prenom:</strong>
                <input type="text" name="prenom" value="{{ $reservation->prenom }}" class="form-control" placeholder="Saisir le prenom">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Sexe:</strong>
                <input type="text" name="sexe" value="{{ $reservation->sexe }}" class="form-control" placeholder="Saisir le sexe">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Adresse:</strong>
                <input type="text" name="adresse" value="{{ $reservation->adresse }}" class="form-control" placeholder="Saisir l'adresse">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Telephone:</strong>
                <input type="text" name="telephone" value="{{ $reservation->telephone }}" class="form-control" placeholder="Saisir le numero telephonique">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Compagnie:</strong>
                <input type="text" name="compagnie" value="{{ $reservation->comagnie }}" class="form-control" placeholder="Saisir la compagnie">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Date_Depart:</strong>
                <input type="text" name="date_depart" value="{{ $reservation->date_depart }}" class="form-control" placeholder="Saisir la date depart">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Heure_Depart:</strong>
                <input type="text" name="heure_depart" value="{{ $reservation->heure_depart }}" class="form-control" placeholder="Saisir l'heure de depart">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Source:</strong>
                <input type="text" name="source" value="{{ $reservation->source }}" class="form-control" placeholder="Saisir la source">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Destination:</strong>
                <input type="text" name="sexe" value="{{ $reservation->destination }}" class="form-control" placeholder="Saisir la destination">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Montant du billet:</strong>
                <input type="text" name="montant" value="{{ $reservation->montant }}" class="form-control" placeholder="Saisir le montant">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Date_Reservation:</strong>
                <input type="text" name="date_reservation" value="{{ $reservation->date_reservation }}" class="form-control" placeholder="Saisir la date de reservation">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center pt-4">
            <button type="submit" class="btn btn-primary">Modifier</button>
        </div>
    </div>
</form>
@endsection