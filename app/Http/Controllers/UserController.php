<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class UserController extends Controller
{
    public function index()
    {
        $postnum = Post::with('categories')->get();
        $catnum = Category::all();
        $tagnum = Tag::all();
        $usernum = User::all();
        return view ('layouts.admin.index',compact('postnum','catnum','tagnum','usernum'));
    }
}
