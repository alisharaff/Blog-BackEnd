<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
public function index(){
    $PostsList = [
        ['id' => 1 , 'title' => "Post 1" ,'posted_by' => 'Ali', 'created_at' => '2023-01-01'],
        ['id' => 2 , 'title' => "Post 2" ,'posted_by' => 'Admin', 'created_at' => '2023-03-01']];
    return view('posts.index',['PostsList' => $PostsList]);
}    
}
