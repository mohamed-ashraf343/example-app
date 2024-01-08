<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller  //StudlyCase
{
    public function index()  // camelCase
     {
        $allposts = [
            ['id' => 1, 'titel' => 'PHP', 'postedby' => 'ahmed', 'created_at' => '2022-10-10 09:00:00' ],
            ['id' => 2, 'titel' => 'js', 'postedby' => 'mohamed', 'created_at' => '2022-10-10 09:00:00' ],
            ['id' => 3, 'titel' => 'bootstrap', 'postedby' => 'Ali', 'created_at' => '2022-10-10 09:00:00' ],
            ['id' => 4, 'titel' => 'HTML', 'postedby' => 'Aser', 'created_at' => '2022-10-10 09:00:00' ],

        ];

        return view('post.posts.index', ['posts'=> $allposts]);
    }

    public function postShow($postId)
    {
        $singelPost = [
           'id' => 1, 'titel' => 'PHP', 'Description' => 'this is Description', 'postedby' => 'ahmed', 'created_at' => '2022-10-10 09:00:00'
        ];
                $postinfo = [
           'name' => 'ahmed', 'Email' => 'mohamed_ashraf@unv.tanta.edu.eg', 'created_at' => '2022-10-10 09:00:00'
        ];
                return view('post.posts.show', ['post' => $singelPost], ['postinfo' => $postinfo]);

    }


    public function dashAction()
    {
        return view('dashbord');
    }
}
