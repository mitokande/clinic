<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileName = time().$request->file('bImg')->getClientOriginalName();
        $blog = new Blog;
        $blog->title = $request->bTitle;
        $blog->slug = $blog->slugName();
        $blog->content = $request->bContent;
        $blog->category = json_encode($request->bCategories);
        $blog->thumbnail_url = $fileName;
        $blog->banner_url = $fileName;
        $blog->author_id = Auth::guard('doctors')->user()->id;
        $blog->save();
        $request->file('bImg')->move(public_path("/images/blogs/thumbnails"), $fileName);
        return redirect('/doctor/dashboard/blogs');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    #public function show(Blog $blog)
//    public function index($id)
//    {
//        $blog = Blog::find($id);
//        if($blog == null){
//            abort(404);
//        }else{
//            return view('doctors.blogs', ['blog'=>$blog]);
//        }
//    }
    public function index($blogname){
        $blog = Blog::query()->where('slug','=',$blogname)->firstOrFail();

        return view('single-blog',[
            'blog'=>$blog,
            'doctor'=> Auth::guard('doctors')->user(),
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('doctors.add-blog');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);

        return view('doctors.edit-blog', [
            'blog'=>$blog,
            'doctor'=> Auth::guard('doctors')->user(),
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->title = $request->bTitle;
        $blog->content = $request->bContent;
        $blog->category = json_encode($request->bCategories);
        if($request->file('bImg') != null){
            $fileName = time().$request->file('bImg')->getClientOriginalName();
            $blog->banner_url = $fileName;
            $blog->thumbnail_url = $fileName;
            $request->file('bImg')->move(public_path("/images/blogs/thumbnails"), $fileName);

        }
        // $blog->banner_path = $fileName;
        // $blog->thumb_path = $fileName;
        $blog->save();
        return redirect('/doctor/dashboard/blogs');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::findOrFail($id)->delete();

        return redirect('/doctor/dashboard/blogs');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $blogs = Blog::orderByDesc('id')->get();
        return view('doctors.blogs', [
            'blogs'=>$blogs,
            'doctor'=> Auth::guard('doctors')->user(),
        ]);
    }


}
