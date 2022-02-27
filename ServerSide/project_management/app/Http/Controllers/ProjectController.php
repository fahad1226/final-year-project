<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
         $projects=Project::with('team','tag')->paginate(10);
      //  dd($projectProposal);
        return $this->apiResponseResourceCollection(200,'All Project Proposals ',ProjectResource::collection($projects));
    }
    public function store(ProjectRequest $request)
    {
        $request->validated(); 
        $input['name']  =$request->name;
        $input['details' ]  =$request->details;
         if ($request->hasFile('avatar')) {
            $fileName = Rand() . '.' . $request->file('avatar')->getClientOriginalExtension();
            $logo = $request->file('avatar')->storeAs('Project', $fileName, 'public');
            $input['avatar']=$logo;
        }
        $input['team_id']=auth()->user()->teamUser->team_id;
        $input['deadline']=Carbon::parse($request->deadline)->format('Y-m-d');
        $project= Project::create($input);
        $tags=$request->tag;
        foreach($tags as $tag)
       {
           
           Tag::create(['name'=>$tag,'project_id'=>$project->id]);
       }
       return $this->apiResponse(200, 'Project Proposal Submitted');
    }
}
