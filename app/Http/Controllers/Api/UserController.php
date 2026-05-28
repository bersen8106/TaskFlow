<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ExperienceResource;
use App\Http\Resources\UserResource;
use App\Models\Experience;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return UserResource::collection(User::all());
    }

    public function show(User $user)
    {
        return new UserResource($user);
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
