<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class PostController extends Controller
{

    protected $postRepository;//Model post

    public function __construct(PostRepository $postRepository)
    {

        $this->postRepository = $postRepository;

    }

    public function all(){

       return $this->postRepository->index();


    }

    public function createPost(Request $request){

        $createPostByUser = [

            'body' => $request['body'] ,
            'description' => $request['description'],
            'user_id' => auth()->id()

        ];

        return $this->postRepository->create($createPostByUser);
    }


    public function updatePost($id,Request $request){


        $createPostByUser = [

            'body' => $request['body'] ,
            'description' => $request['description'],
            'user_id' => auth()->id()

        ];

        return $this->postRepository->update($id,$createPostByUser);

    }

    public function showPost($id){

        return $this->postRepository->show($id);
    }


    public function delete($id){

        return $this->postRepository->destroy($id);


    }


    public function showPosts(){

        return $this->postRepository->postWithUser();


    }
}
