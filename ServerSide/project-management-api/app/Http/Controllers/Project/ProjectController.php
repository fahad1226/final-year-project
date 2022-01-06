<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $project=Project::get();
        return response($project);
    }
    public function store(ProjectRequest $request)
    {
        $input=$request->validated();
        $input['slug']= Str::slug($request->name,"-");
        
    }
}
