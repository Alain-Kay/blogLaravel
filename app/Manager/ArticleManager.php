<?php
namespace App\Manager;

use App\Models\Article;
use App\Http\Requests\ArticleResquest;

class ArticleManager
{

    public function build(Article $article, ArticleResquest $request)
    {
        $article->title = $request->input('title');
        $article->subtitle = $request->input('subtitle');
        $article->content = $request->input('content');
        $article->save();

        return $article;
    }
}