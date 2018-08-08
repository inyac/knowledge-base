<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Services\ArticleService;

class ArticleController extends Controller
{
    protected $articlesService;

    public function __construct(ArticleService $articlesService)
    {
        $this->articlesService = $articlesService;
    }

  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = $this->articlesService->all();

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
        $article = $this->articlesService->make($request->input('title'),
                                                $request->input('author'),
                                                $request->input('body'));
        return redirect()->route('show', ['article' => $article->id]);
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
        $this->articlesService->update($article,
                                $request->input('title'),
                                $request->input('author'),
                                $request->input('body'));

        return redirect()->route('show', ['article' => $article->id]);
    }

  /**
   * Remove the specified resource from storage.
   *
   * @param  Article $article
   * @return \Illuminate\Http\Response
   *
   */
    public function destroy(Article $article)
    {
        try {
          $this->articlesService->delete($article);
        } catch (\Exception $e) {
          return redirect()->route('show', ['article' => $article->id]);
        }

        return redirect()->route('home');
    }
}
