<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\Staff;
use App\Models\Article;


class FocusAreasController extends Controller
{
    //
    public function focusAreas(){
        $title='Our Foucus Areas';
        return view ('frontend.focusareas.index',[
            'title'=>$title,
        ]);
    }

    public function economic(){
        $title='Economic Empowerment';
        $youngfriends = Staff::where('department', 'young')->latest()->paginate(4);

        $partners = Partner::latest()->paginate(5);
        $articles = Article::latest()->paginate(6);
        return view ('frontend.focusareas.economic ',[
            'title'=>$title,
            'partners' => $partners,
            'youngfriends' => $youngfriends,
            'articles' => $articles,
        ]);
    }

    public function rehab(){
        $title=' Rehabilitation';
        $youngfriends = Staff::where('department', 'young')->latest()->paginate(4);

        $partners = Partner::latest()->paginate(5);
        $articles = Article::latest()->paginate(6);
        return view ('frontend.focusareas.rehab',[
            'title'=>$title,
            'partners' => $partners,
            'youngfriends' => $youngfriends,
            'articles' => $articles,
        ]);
    }

    public function education(){
        $title=' Education Empowerment';
        $youngfriends = Staff::where('department', 'young')->latest()->paginate(4);

        $partners = Partner::latest()->paginate(5);
        $articles = Article::latest()->paginate(6);
        return view ('frontend.focusareas.education',[
            'title'=>$title,
            'partners' => $partners,
            'youngfriends' => $youngfriends,
            'articles' => $articles,
        ]);
    }
    public function climate(){
        $title=' Rehabilitation';
        $youngfriends = Staff::where('department', 'young')->latest()->paginate(4);

        $partners = Partner::latest()->paginate(5);
        $articles = Article::latest()->paginate(6);
        return view ('frontend.focusareas.climate',[
            'title'=>$title,
            'partners' => $partners,
            'youngfriends' => $youngfriends,
            'articles' => $articles,
        ]);
    }
    public function legal(){
        $title=' Legal Aid $ Advocacy';
        $youngfriends = Staff::where('department', 'young')->latest()->paginate(4);

        $partners = Partner::latest()->paginate(5);
        $articles = Article::latest()->paginate(6);
        return view ('frontend.focusareas.legal',[
            'title'=>$title,
            'partners' => $partners,
            'youngfriends' => $youngfriends,
            'articles' => $articles,
        ]);
    }
}
