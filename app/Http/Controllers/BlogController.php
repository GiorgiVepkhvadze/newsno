<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userData = Page::getuserData();
        return view('index')->with("userData",$userData);


        
    }




    public function show_current_blog($id)
    {
    $cBlog = Blog::getBlogDetails($id);
    $lang = app()->getLocale();
    $blog_text = "blog_text_".$lang;
    $blog_title = "blog_title_".$lang;
    
    return view('blog_details')->with(compact('cBlog', 'lang', 'blog_text', 'blog_title'));

    }


    public function all()
    {
        $BlogData = Blog::getBlogData_all();
        $lang = app()->getLocale();
        $blog_text = "blog_text_".$lang;
        $blog_title = "blog_title_".$lang;
        return view('blog')->with(compact('BlogData', 'lang', 'blog_text', 'blog_title'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
