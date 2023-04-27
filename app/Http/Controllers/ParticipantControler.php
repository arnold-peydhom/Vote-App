<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\Region;
use App\Http\Requests\ParticipantFormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ParticipantControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $participants=Participant::with("region")->latest()->get();
        return view("participant.index", ["participants"=>$participants]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   $regions=Region::select("id", "label")->get();
        return view("participant.create", ["regions"=>$regions, "participant"=>new Participant()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ParticipantFormRequest $request)
    {


        $password=Str::password(12);
        //$password=Hash::make($password);
        $validated=$request->validated();
        $validated["pwd"]=$password;
        try{
            DB::beginTransaction();
            $participant=Participant::create($validated);
            $participant->login="participant_".$participant->id;
            $participant->save();
            DB::commit();
        }
        catch(\Throwable $th){
            DB::rollback();
        }

        return redirect(route("participants.index"))->with("success", "Participant ajouté avec succès!");
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
    public function edit(Participant $participant)
    {   $regions=Region::select("id", "label")->get();
        return view("participant.edit", ["regions"=>$regions,"participant"=>$participant]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ParticipantFormRequest $request, Participant $participant)
    {
        $participant->update($request->validated());
        return redirect(route("participants.index"))->with("success", "Participant modifié avec succès!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Participant $participant)
    {
        $participant->delete();
        return redirect(route("participants.index"))->with("success", "Participant supprimé avec succès!");
    }
}
