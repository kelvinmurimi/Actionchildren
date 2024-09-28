<?php

declare(strict_types=1);

namespace App\Http\Controllers;
use App\Models\Partner;
use App\Models\Staff;
use App\Models\Article;
use Illuminate\Http\Request;

class CentersController extends Controller
{
    //

    public function workingChildren()
    {
        $title = 'Working Children Center';
        $youngfriends = Staff::where('department', 'young')->latest()->paginate(4);
        
        $partners = Partner::latest()->paginate(5);
        $articles = Article::latest()->paginate(6);
        return view('frontend.centers.workingChildren', [
            'title' => $title,
           
            'partners' => $partners,
            'youngfriends' => $youngfriends,
            'articles' => $articles,
        ]);
    }
    public function temporaryRescue()
    {
        $title = 'Temporary Rescue Center';
        $youngfriends = Staff::where('department', 'young')->latest()->paginate(4);
        
        $partners = Partner::latest()->paginate(5);
        $articles = Article::latest()->paginate(6);
        return view('frontend.centers.rescue', [
            'title' => $title,
            'partners' => $partners,
            'youngfriends' => $youngfriends,
            'articles' => $articles,
        ]);
    }

    public function schoolFeeding()
    {
        $title = 'School Feeding Programme';
        $youngfriends = Staff::where('department', 'young')->latest()->paginate(4);
        
        $partners = Partner::latest()->paginate(5);
        $articles = Article::latest()->paginate(6);
        return view('frontend.centers.schoolfeeding', [
            'title' => $title,
            'partners' => $partners,
            'youngfriends' => $youngfriends,
            'articles' => $articles,
        ]);
    }
}
