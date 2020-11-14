<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $articles = new Article($request->all());

        $articles->save();
        return redirect('/articles')->with('success', 'Article saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $articles
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articles =Article::find($id);
        $comments = $articles->comments;
        
        return view('articles.show',compact('articles'));
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $articles
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articles =Article::find($id);
        return view('articles.edit',compact('articles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $articles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $articles = Article::find($id);
        $articles ->title=$request->get('title');
        $articles ->description =$request->get('description');
        $articles->save();

        return redirect('articles')->with('success', 'Article edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articles = Article::find($id);
        $articles->delete();

        return redirect('articles')->with('success', 'Article deleted!');
    }
}
