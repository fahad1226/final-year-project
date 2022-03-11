<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TeamUserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $this->load('user');
        return [
            'User'        =>UserResource::make($this->user),
            'Member_Type' =>$this->user_type == 1 ? 'Student' : 'Supervisor'
        ];
    }
}
