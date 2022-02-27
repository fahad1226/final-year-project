<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectProposalRequest;
use App\Http\Resources\ProjectProposalResource;
use App\Models\Project;
use App\Models\ProjectProposal;
use Illuminate\Http\Request;

class ProjectProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projectProposal=ProjectProposal::with('team')->paginate(10);
      //  dd($projectProposal);
        return $this->apiResponseResourceCollection(200,'All Project Proposals ',ProjectProposalResource::collection($projectProposal));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectProposalRequest $request)
    {
        $input=$request->validated();
        $tag=$request->tag;
        dd($tag);
        $input['team_id']=auth()->user()->teamUser->team_id;
        ProjectProposal::create($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectProposal  $projectProposal
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectProposal $projectProposal)
    {
        return $this->apiResponse(200,'Project Proposal Details', ProjectProposalResource::make($projectProposal));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectProposal  $projectProposal
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProjectProposal  $projectProposal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectProposal $projectProposal)
    {
        $projectProposal->update($request->all());
        if($request->status==ProjectProposal::APPROVED)
        {
            Project::create([
                'name'      =>$projectProposal->title,
                'team_id'   =>$projectProposal->team->id,
                'tag'       =>$projectProposal->tag
            ]);
        }
        return $this->apiResponse(200,'Project Proposal Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectProposal  $projectProposal
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectProposal $projectProposal)
    {
        $projectProposal->delete();
         return $this->apiResponse(200,'Project Proposal Deleted');
    }
}
