<?php

namespace App\Http\Resources;

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
        return [
            'Title'         =>$this->name,
            'Details'       =>$this->details,
            'Avatar'        =>$this->avatar?$this->avatar:'N\A',
            'Tag'           =>TagResource::collection($this->tag),
            'Status'        =>$this->status==0 ?'Pending' : ($this->status==1 ? 'Accepted' :'Rejected'),
            'Team'          =>TeamResource::make($this->team)   
        ];
    }
}
