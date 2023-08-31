<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
            $postnum = Post::Omar()->Paginate(4);
       

       
        $catnum = Category::all();
        $tagnum = Tag::all();
        $usernum = User::all();
   // dd($p);
    //      return view ('layouts.app',['p'=>$p,'user'=>$user]);
    return view ('welcome',compact('postnum','catnum','tagnum','usernum'));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = Category::all();
        $tags = Tag::all();
        $postnum = Post::with('categories')->get();
        $catnum = Category::all();
        $tagnum = Tag::all();
        $usernum = User::all();
        return view ('posts.create',['cate'=>$cate,'tags'=>$tags],compact('postnum','catnum','tagnum','usernum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        if($request->hasFile('photo')){
            $image1=$request->file('photo');
            $reThumbImage=time().'.'.$image1->getClientOriginalExtension();
            $dest1=public_path('/posts');
            $image1->move($dest1,$reThumbImage);
        }
        $reThumbImage=time().'.'.$request->file('photo')->getClientOriginalExtension();
        $post = Post::create([
            'title' => $request->title,
            'photo' => '/posts/'.$reThumbImage,
            'content' => $request->desc,
            'category_id' => $request->category_id,
            'slug' => Str::slug($request->title, "-"),
            'user_id' => auth()->user()->id
        ]);
      
      if($request->tags) {
          $post->tags()->attach($request->tags);
          
      }

     

        return redirect()->route('posts.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $cats = Post::all();
        return view ('layouts.app',['cats'=>$cats]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::find($id);
        $posts->delete();
        return redirect()->route('posts');
    }

    public function info()
    {
        $posts = Post::all();
        $postnum = Post::with('categories')->get();
        $catnum = Category::all();
        $tagnum = Tag::all();
        $usernum = User::all();
         return view ('posts.show',['poost'=>$posts],compact('postnum','catnum','tagnum','usernum'));
    }
    public function trush()
    {
        $posts = Post::onlyTrashed()->get();
        $postnum = Post::with('categories')->get();
        $catnum = Category::all();
        $tagnum = Tag::all();
        $usernum = User::all();
       
         return view ('posts.deleted',['poost'=>$posts],compact('postnum','catnum','tagnum','usernum'));
    }

    public function forcedeleted($id)
    {
        $posts = Post::withTrashed()->where('id',$id)->first();
        Storage::delete($posts->photo);
        $posts->forceDelete();
        return redirect()->route('deleted.posts');
    }
    public function restoredeleted($id)
    {
        $posts = Post::withTrashed()->where('id',$id)->first();
        $posts->restore();
        return redirect()->route('deleted.posts');
    }

    public function single($id)
    {
        $post = Post::where('id',$id)->first();
        $cat = Category::find($id);
        return view ('single',compact('post','cat'));
    }

    public function tag($tag)
    {
        $tagfind = Tag::where('id',$tag)->get();
        dd($tagfind);
        return view ('blog.tag')
        ->with('tag',$tag)
        ->with('tagnum',Tag::all())
        ->with('catnum',Category::all())
        ->with('postnum',$tagfind->posts()->paginate(3));
    }

    public function category($category)
    {
        $catfind = Post::where('category_id',$category)->paginate(3);
        return view ('blog.category')
        ->with('category',Category::where('id',$category)->get())
        ->with('catnum',Category::all())
        ->with('tagnum',Tag::all())
        ->with('postnum',$catfind);
    }


}
