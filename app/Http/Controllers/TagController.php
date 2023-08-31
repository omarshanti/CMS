<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
class TagController extends Controller
{
    public function index()
    {
        $postnum = Post::with('categories')->get();
        $catnum = Category::all();
        $tagnum = Tag::all();
        $usernum = User::all();
        $cats = Tag::all();
        return view ('tags.show',['cats'=>$cats],compact('postnum','catnum','tagnum','usernum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $postnum = Post::with('categories')->get();
        $catnum = Category::all();
        $tagnum = Tag::all();
        $usernum = User::all();
        return view ('tags.create',compact('postnum','catnum','tagnum','usernum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = new Tag;
        $cat->tag = $request->name;
        $cat->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cats = Tag::find($id);
        $postnum = Post::with('categories')->get();
        $catnum = Category::all();
        $tagnum = Tag::all();
        $usernum = User::all();
        return view ('tags.edit',['cats'=>$cats],compact('postnum','catnum','tagnum','usernum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $cat = Tag::find($id);
       $cat->tag = $request->name;
       $cat->save();
       return redirect()->route('tag');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Tag::find($id);
        if($cat->posts->count() > 0) {
            session()->flash('error','Cant deleted '.$cat->tag.' Tag because Is had Posts');
            return redirect()->back();
            
        }
        $cat->delete();
        return redirect()->route('tag');
    }
}