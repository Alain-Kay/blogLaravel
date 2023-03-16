<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function index()
    {
      
        return view('articles',
        [
            'articles' => Article::paginate(6),
            'categories' =>Category::all()
        ]);
    }

    public function show(Article $article)
    {
        
        return view('article',[
            'article' => $article
        ]);

    }
}
