<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\TeamResource;
use App\Http\Resources\TeamSupervisorResource;
use App\Models\Comment;
use App\Models\Project;
use App\Models\SupervisorProject;
use App\Models\Tag;
use App\Models\Team;
use App\Models\TeamUser;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
         $projects=Project::with('team','tag','assignment','comment')->paginate(10);
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
       // $input['deadline']=Carbon::parse($request->deadline)->format('Y-m-d');
        $project= Project::create($input);
        $tags=$request->tag;
        foreach($tags as $tag)
       {
           Tag::create(['name'=>$tag,'project_id'=>$project->id]);
       }
       return $this->apiResponse(200, 'Project Proposal Submitted');
    }
    public function show(Project $project)
    {
        return $this->apiResponse(200,'Project Details',ProjectResource::make($project));
    }
    public function update(ProjectRequest $request,Project $project)
    {
        $input=$request->validated();
        $project->update($input);
        return $this->apiResponse(200,'Project Details Updated Successfully');
    }
    public function status(Request $request,Project $project)
    {
       // dd($project);
       if($request->status== Project::APPROVED)
       {
           SupervisorProject::create(['user_id'=>auth()->id(),'project_id'=>$project->id]);
           $message='Project Request Accepted';
       }
       else if($request->status== Project::REJECTED)
       {
           $message='Project Request Rejected';
       }
        else if($request->status== Project::COMPLETED)
       {
           $message='Congratulations!! Project Completed';
       }
       $project->update(['status'=>$request->status]);
       return $this->apiResponse(200,$message);

    }
    public function userProjectList()
    {
       return $this->apiResponseResourceCollection(200,'Project List',ProjectResource::collection(auth()->user()->teamUser->team->project->load('tag','team')));
    }
    public function comment(Request $request)
    {
        $input=$request->validate([
            'project_id'    =>'required|exists:projects,id',
            'comment'       =>'required|string'
        ]);
        $input['user_id']=auth()->id();
            Comment::create($input);
        return $this->apiResponse(200,'New Comment Added');
    }
}
