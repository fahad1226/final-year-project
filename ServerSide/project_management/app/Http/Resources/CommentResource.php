<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {$this->load('user');
        return [
            'Comment' =>$this->comment,
            'Commented_at'  =>$this->created_at->diffForHumans() ,
            'Commented_by'  =>$this->user->name
        ];
    }
}
