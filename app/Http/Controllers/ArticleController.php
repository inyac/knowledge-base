<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Ramsey\Uuid;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all()->sortByDesc('created_at')
                                  ->values()
                                  ->all();


        return view('index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   * @throws \Exception
   */
    public function store(Request $request)
    {
        $this->validate($request, [
          'title' => 'required|string',
          'author' => 'required|string',
          'body' => 'required|string'
        ]);
        $article = new Article();
        $article->id = Uuid\Uuid::uuid4()->toString();
        $article->title = $request->input('title');
        $article->author = $request->input('author');
        $article->body = $request->input('body');
        $article->save();

        return redirect("/articles/$article->id");
    }

    /**
     * Display the specified resource.
     *
     * @param  Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {

        return view('edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $this->validate($request, [
          'title' => 'required|string',
          'author' => 'required|string',
          'body' => 'required|string'
        ]);

        $article->title = $request->input('title');
        $article->author = $request->input('author');
        $article->body = $request->input('body');
        $article->save();

        return redirect("/articles/$article->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        try {
          $article->delete();
        } catch (\Exception $e) {
          return redirect("/articles/$article->id");
        }

        return redirect('/');
    }
}
