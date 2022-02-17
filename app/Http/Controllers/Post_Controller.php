<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    function index(){
        $posts=[

[
"id"=>1,
"name"=>"Shaimaa",
"body"=>"hi ya shaimaa",
"title"=>"title el pos",
]
,

[
 "id"=>2,
"name"=>"NOur",
"body"=>"hi ya NOur",
"title"=>"title el pos",
]
,
[
 "id"=>3,
"name"=>"Haidy",
"body"=>"hi ya Haidy",
"title"=>"title el pos",
]


];
return view("posts.index",["posts"=>$posts]);
    }

    function show($id){ 
            $post=[

"id"=>$id,
"name"=>"Dina",
"body"=>"hi ya Dina",
"title"=>"title el pos",
    ];
    return view('posts.show',$post);
    }

    function edit($id){
            $post=[

"id"=>$id,
"name"=>"shaimaa",
"body"=>"hi ya shaimaa",
"title"=>"title el pos",
    ];
    return view('posts.edit',$post);
    }
    function update(){
        return "done";
    }
    function create(){
        return view('posts.create');
    }
    function store(){
        return "stored";
    }
}
