@extends('articles.layout')
@section('content')
<div class="row">

    <div class="col-lg-12 margin-tb">
        <div class="float-start">
            <h2>Liste des Reservation</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-outline-success" href="{{ 
route('article.create') }}"> +Nouvel Reservation</a>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
    <tr>
        <th>Numéro</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Sexe</th>
        <th>Adresse</th>
        <th>Telephone</th>
        <th>Compagnie</th>
        <th>Date Départ</th>
        <th>Heure Départ</th>
        <th>Source</th>
        <th>Destination</th>
        <th>Montant</th>
        <th>Date Reservation</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($reservation as $res)
    <tr>
        <td>{{ $res->numvoyageur }}</td>
        <td>{{ $res-> nom}}</td>
        <td>{{ $res-> prenom}}</td>
        <td>{{ $res-> sexe}}</td>
        <td>{{ $res-> adresse}}</td>
        <td>{{ $res-> telephone}}</td>
        <td>{{ $res-> compagnie}}</td>
        <td>{{ $res-> date_depart}}</td>
        <td>{{ $res-> heure_depart}}</td>
        <td>{{ $res-> source}}</td>
        <td>{{ $res-> destination}}</td>
        <td>{{ $res-> montant}}</td>
        <td>{{ $res-> date_reservation}}</td>
        <td>
            <form action="{{ route('article.destroy',$art->ida) }}" method="post">
                <a class="btn btn-outline-primary" href="{{ 
route('article.show',$art->ida) }}">Afficher</a>
                <a class="btn btn-outline-success" href="{{ 
route('article.edit',$art->ida) }}">Éditer</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger">Supprimer</button>
            </form>
        </td>

    </tr>
    @endforeach
</table>
<div class="d-flex justify-content-center pagination-lg">
    {!! $article->links('pagination::bootstrap-4') !!}
</div>
@endsection