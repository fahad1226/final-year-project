<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AssignmentResource extends JsonResource
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
            'Id'    =>$this->id,
            'Details' =>$this->details,
            'Status'  =>$this->status==0 ? 'Incomplete' : 'Completed',
            'Assigned At' =>$this->created_at->diffForHumans() 
        ];
    }
}
