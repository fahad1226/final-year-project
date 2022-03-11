<?php

namespace App\Http\Resources;

use App\Models\Project;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $total=$this->load('assignment')->assignment()->count();
        $progress=$this->assignment;
        $done=0;
        foreach($progress as $assignment)
        {
            if($assignment->status==1) $done++;
        }
       // dd($progress);
        return [
            'Title'         =>$this->name,
            'Details'       =>$this->details,
            'Avatar'        =>$this->avatar?$this->avatar:'N\A', 
            'Progress'      =>($done*100)/$total.'%',
            'Comment'       =>CommentResource::collection($this->whenLoaded('comment')),
            'Tag'           =>TagResource::collection($this->whenLoaded('tag')),
            'Status'        =>$this->status==Project::PENDING ?'Pending' : ($this->status==1 ? 'Accepted' :($this->status==Project::COMPLETED ? 'Completed':'Rejected')),
            'Batch'         =>$this->team->batch,
            'Assignment'    =>$this->status==1 ? AssignmentResource::collection($this->whenLoaded('assignment')): 'N\A',
           
           // 'Team'          =>TeamResource::make($this->whenLoaded('team'))   
        ];
    }
}
