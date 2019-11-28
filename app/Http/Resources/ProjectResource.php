<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Project;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        self::withoutWrapping();

        return [
            'id'                => $this->id,
            'exhibition_name'   => $this->exhibition_name,
            'start_exhibition'  => $this->start_exhibition,
            'end_exhibition'    => $this->end_exhibition
        ];
    }
}