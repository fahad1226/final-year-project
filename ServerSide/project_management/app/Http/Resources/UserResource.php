<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'Name'      =>$this->name,
            'Email'     =>$this->email,
            'Phone'     =>$this->phone,
            'Student_id'=>$this->uid?$this->uid:'N\A',
            'Notification'=>NotificationResource::collection($this->notifications),
            'Role'      =>$this->role,
            // 'Unread'      => $this->notifications()->unread() 
        ];
    }
}
