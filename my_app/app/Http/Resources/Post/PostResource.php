<?php

namespace App\Http\Resources\Post;

use App\Http\Resources\Tag\TagResource;
use App\Http\Resources\University\UniversityResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'lastname'=>$this->lastname,
            'age'=>$this->age,
            'university'=>new UniversityResource($this->university),
            'tags'=>TagResource::collection($this->tags),
        ];
    }
}
