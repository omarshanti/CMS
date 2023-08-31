<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Category::all();
        $postnum = Post::with('categories')->get();
        $catnum = Category::all();
        $tagnum = Tag::all();
        $usernum = User::all();
        return view ('category.show',['cats'=>$cats],compact('postnum','catnum','tagnum','usernum'));
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
        return view ('category.create',compact('postnum','catnum','tagnum','usernum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $cat = new Category;
        $cat->name = $request->name;
        $cat->save();
        session()->flash('success','Category Has Created Successfully!');
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
        $cats = Category::find($id);
        $postnum = Post::with('categories')->get();
        $catnum = Category::all();
        $tagnum = Tag::all();
        $usernum = User::all();
        return view ('category.edit',compact('postnum','catnum','tagnum','usernum'))->with('cats',$cats);
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
       $cat = Category::find($id);
       $cat->name = $request->name;
       $cat->save();
       return redirect()->route('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Category::find($id);
        if($cat->posts->count() > 0) {
            session()->flash('error','Cant deleted '.$cat->name.' Category because Is had Posts');
            return redirect()->back();
            
        }
        $cat->delete();
        session()->flash('success','Category Has Deleted Successfully!');
        return redirect()->route('category');
    }

  
}
