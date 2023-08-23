<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reservation = Reservation::latest()->paginate(4);
        return view('articles.index',compact('reservation'))->with('i', (request()->input('page', 1) - 1) * 4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'sexe' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'compagnie' => 'required',
            'date_depart' => 'required',
            'heure_depart' => 'required',
            'source' => 'required',
            'destination' => 'required',
            'montant' => 'required',
            'date_reservation' => 'required',
            ]);
            Reservation::create($request->all());
            return redirect()->route('articles.index')
            ->with('success','Reservation créé avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
        return view('articles.show',compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
        return view('articles.edit',compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'sexe' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'compagnie' => 'required',
            'date_depart' => 'required',
            'heure_depart' => 'required',
            'source' => 'required',
            'destination' => 'required',
            'montant' => 'required',
            'date_reservation' => 'required',
            ]);
            $reservation->update($request->all());
            return redirect()->route('articles.index')->with('success','Reservation mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
        $reservation->delete();
        return redirect()->route('articles.index')->with('success','Reservation supprimé avec succès');
    }
}
