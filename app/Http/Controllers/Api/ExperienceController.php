<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ExperienceResource;
use App\Models\Experience;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::with('technologies')->get();
        return ExperienceResource::collection($experiences);
    }

    public function show(Experience $experience)
    {
        return new ExperienceResource($experience);
    }
//    public function store(Request $request)
//    {
//        $data = $request->validate([
//            'title' => 'required|string|max:255',
//            'description' => 'nullable|string',
//            'link' => 'nullable|url',
//            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//        ]);
//
//        $data['image'] = $request->file('image')->store('images', 'public');
//
//        $project = Project::create($data);
//
//        return new ProjectResource($project);
//    }
}
