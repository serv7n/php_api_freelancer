<?php

namespace App\Http\Controllers;

use App\Http\Resources\BaseApiResource;
use App\Models\FreelancerSkill;
use Faker\Provider\Base;
use Illuminate\Http\Request;

class FreelancerSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($limit)
    {
        return BaseApiResource::success(FreelancerSkill::paginate($limit));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        BaseApiResource::success(FreelancerSkill::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
