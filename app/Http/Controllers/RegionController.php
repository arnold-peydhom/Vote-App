<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostFormRequest;
use App\Models\Region;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regions=Region::select("id", "label")->orderBy("id")->get();
        return view("region.index", ["regions"=>$regions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $region=new Region();
        return view("region.create", ["region"=>$region]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostFormRequest $request)
    {

        Region::create($request->validated());
        return redirect(route('region.index'))->with("success", "Region supprimée avec success.");
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
    public function edit(Region $region)
    {

        return view("region.edit",["region"=>$region]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostFormRequest $request, Region $region)
    {   //dd($request->validated());
        //$region->label=$request->validated()->label;
        $region->update($request->validated());
        return redirect(route("region.index"))->with("success", "Modification réussie");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Region $region)
    {
        $region->delete();
        return redirect(route("region.index"))->with("success", "Region supprimée avec success.");
    }
}
