<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function store(Request $request)
    {
        //חפש ואם אין צור
        Article::firstOrCreate(['titlt' => $request->title], ['article_text' => $request->article_text]);

        // חפש ואם אין צור והחזר 
        $article = Article::firstOrNew(['titlt' => $request->title], ['article_text' => $request->article_text]);

        // חפש ואם יש עדכן אם לא צור
        $article = Article::updateOrCreate(['titlt' => $request->title], ['article_text' => $request->article_text]);
    }
}
