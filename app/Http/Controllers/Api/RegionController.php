<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Region;


class RegionController extends Controller
{

    public function index(Request $request){
        $regions=Region::select("id", "label")->orderBy("id")->get();
        return $regions;
    }
    public function store(PostFormRequest $request)
    {

        $region=Region::create($request->validated());
        return $region;
    }


    public function show(string $id)
    {
        $regions=Region::select("id", "label")->orderBy("id")->get();
        return $regions;
    }

    public function update(PostFormRequest $request, Region $region){
        $region->update($request->validated());
        return $region;
    }


    public function destroy(Region $region)
    {
        $region->delete();
        return $region;
    }
}
