<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\CareTaker;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\TextUI\XmlConfiguration\Logging\TeamCity;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        $city = Auth::user()->getNearbyCaretakers();

        // $user = Auth::user();
        // $city = $user->address->city;
        // $user=;

        $city = Auth::user()->address->city;

        $users = User::whereHas('address', function ($query) use ($city) {
            $query->where('city', $city);
        })->get();

        // return $users->pluck('id');

        // return $users->map->name;

        // return $users->map(function ($user) {
        //     return $user->name;
        // });
        
        return view('patient.booking', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        //
    }


}
