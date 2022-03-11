<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TeamResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $this->project->load('team');
        return [
            'Batch'         =>$this->batch,
            'Members'       =>TeamUserResource::collection($this->teamUsers),
            'Project'       =>ProjectResource::collection($this->whenLoaded('project'))
        ];
    }
}
