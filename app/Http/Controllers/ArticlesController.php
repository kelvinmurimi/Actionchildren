<?php

declare(strict_types=1);

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //
    public function index(){
        $pagetitle='Our Blog';
        $articles= Article::latest()->paginate(9);
        return view('frontend.articles.index',[
            'articles'=>$articles,
        ]);
    }
}
