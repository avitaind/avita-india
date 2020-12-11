<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    //
    public function showArticleList(){

        $country = 'in';
        $feature_article = Article::latest()->orderBy('id', 'desc')->published()->featured()->get();
    
        return view('article.index', compact('feature_article','country'));

    }

    public function showArticleDetail($slug){

        $country = 'in';
        $article_detail = Article::where('id', $slug)->get()->first();
        return view('article.detail', compact('article_detail','country'));

    }
}
