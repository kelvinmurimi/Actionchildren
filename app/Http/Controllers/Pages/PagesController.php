<?php

declare(strict_types=1);

namespace App\Http\Controllers\Pages;

use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;


use App\Models\Article;
use App\Http\Controllers\Controller;
use App\Models\Category;

class PagesController extends Controller
{
    //
    //Home Page
    public function index()
    {
       $title="homepage";
        return view('frontend.pages.index', [

        ]);
    }

    //Contact Page
    public function careers()
    {
        return view('frontend.pages.careers');
    }

    public function store(ContactFormRequest $req)
    {
        $req->validated();
        Contact::create([
            'name' => $req->name,
            'phone' => $req->name,
            'email' => $req->name,
            'content' => $req->name,
        ]);
        return redirect(route('pages.contact'))->with('success', 'message delivered successfully,we will be in touch soon');
    }


}
