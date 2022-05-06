<?php


namespace App\Interfaces;
use Illuminate\Http\Request;

interface PostInterface
{

    public function index();
    public function create(array $post);
    public function show($id);
    public function update($id,array $post);
    public function destroy($id);
    public function postWithUser();

}