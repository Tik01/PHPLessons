<?php
namespace App\Services\Post;

use App\Models\Post;
use App\Models\Tag;
use App\Models\University;
use Illuminate\Support\Facades\DB;

class Service{

    public function store($data){
        try {
            Db::beginTransaction();
            $tags = $data['tags'];
            $university = $data['university'];
            unset($data['tags'],$data['university']);

            $tagsIds = $this->getTagId($tags);
            $data['uname_id'] = $this->getUniversityId($university);

            $post = Post::create($data);

            $post->tags()->attach($tagsIds);
            DB::commit();
        }catch (\Exception $exception){

            DB::rollBack();
            return $exception->getMessage();
        }

        return $post;
    }
private function getTagId($tags){
        $tagsIds = [];
    foreach ($tags as $tag){
        $tag = !isset($tag['id']) ? Tag::create($tag) : Tag::find($tag['id']);
        $tagsIds[] = $tag->id;
    }
    return $tagsIds;
}
private function getUniversityId($item){
     $university  = !isset($item['id']) ? University::create($item) : University::find($item['id']);
     return $university->id;
  }

    public function update($post,$data){
        $tags = $data['tags'];
        unset($data['tags']);

       $post->update($data);
       $post->tags()->sync($tags);
       return $post->fresh();
    }
}
