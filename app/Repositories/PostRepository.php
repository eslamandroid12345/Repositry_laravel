<?php


namespace App\Repositories;


use App\Interfaces\PostInterface;
use App\Models\Post;
use Illuminate\Http\Request;
class PostRepository implements PostInterface
{

    public function index()
    {

         $posts =  Post::query()->with('user')->orderBy('id','DESC')->simplePaginate(10);
//            ->chunkMap(function ($post){
//
//                return [
//
//                    'id' => $post->id,
//                    'body' => $post->body,
//                    'description' => $post->description,
//                    'user_id'  => $post->user_id
//                ];
//
//            });

          return view('posts',compact('posts'));
    }

    public function create(array $post)
    {

        $post = Post::query()->create($post);

        return redirect()->back()->with('success','post create successfully');
    }

    public function show($id)
    {
        return Post::query()->findOrFail($id);
    }



    public function update($id,array $post)
    {

        return Post::query()->findOrFail($id)->update($post);
    }

    public function destroy($id)
    {
        $post = Post::query()->findOrFail($id)->delete();

        return redirect()->back()->with('success','post deleted successfully');

    }



    public function postWithUser()
    {
        return Post::query()->where('user_id',25)->chunkMap(function ($post){

            return [

                'id' => $post->id,
                'body' => $post->body,
                'description' => $post->description,
                'user_id'  => $post->user_id
            ];

        });
    }
}