<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserListingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        \Log::info('sad1');
        return [ 
                 'id' => $this->id,
                 'name' => $this->name,
                 'role_name' => $this->roles->role
               ];
    }
}
