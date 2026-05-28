<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TrainingResource;
use App\Models\Experience;
use App\Models\Training;

class TrainingController extends Controller
{
    public function index()
    {
        return TrainingResource::collection(Experience::all());
    }

    public function show(Training $training)
    {
        return new TrainingResource($training);
    }
}
