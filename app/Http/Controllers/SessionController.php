<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "page de creation";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function addData(Request $request)
    {
        $request->session()->put('name','erritali');
        echo "valeur ajouté";
    }

    public function showData(Request $request)
    {
        if($request->session()->has('name'))
        echo $request->session()->get('name');
    else
        echo 'Pas de valeur dans la session';
    }

    public function deleteData(Request $request)
    {
        $request->session()->forget('name');
        echo "Données supprimé de la session";
    }

}
