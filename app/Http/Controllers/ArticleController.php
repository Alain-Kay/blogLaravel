<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Manager\ArticleManager;
use App\Http\Requests\ArticleResquest;


class ArticleController extends Controller
{
    private $articleManager;

    public function __construct(ArticleManager $articleManager)
    {
        $this->articleManager = $articleManager;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(5);
        return view('article.index', [
            'articles' => $articles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('article.create', [
            'categories' => Category::all()
       ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\ArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleResquest $request)
    {
        $validated = $request->validated();

       Article::create([
            'title' =>$request->input('title'),
            'subtitle' =>$request->input('subtitle'),
            'content' =>$request->input('content')
       ]);

       return redirect()->route('articles.index')->with('success', "L'article a été bien posté");
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
    public function edit(Article $article)
    {
        return view('article.edit',[
            'article' => $article,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleResquest $request, Article $article)
    {
        $this->articleManager->build($article, $request);
        
        return redirect()->route('articles.index')->with('success', "L'article a bien été modifié");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $idte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index')->with('success', "L'article a bien été supprimé");

    }
}
