<?php

declare(strict_types=1);

namespace App\Http\Controllers\Pages;

use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;
use App\Models\Staff;


use App\Models\Article;
use App\Http\Controllers\Controller;
use App\Models\Category;

class PagesController extends Controller
{
    //
    //Home Page
    public function index()
    {
        $title = "homepage";
        $staff=Staff::latest()->paginate(4);
        return view('frontend.pages.index', [
            'title' => $title,
            'staff'=>$staff,
        ]);
    }
    //Home Page
    public function aboutAfcic()
    {
        $title = "About Us";
        return view('frontend.pages.about', [
            'title' => $title,
        ]);
    }

    public function teamAfcic()
    {
        $title = "Our Team";
        $staff=Staff::latest()->paginate(6);
        return view('frontend.pages.team', [
            'title' => $title,
            'staff'=>$staff,
        ]);
    }

    public function teamDetails($id){
         $title = "Our Team";
         $staff=Staff::findOrFail($id);
         return view('frontend.staffs.show', [
            'title' => $title,
            'staff'=>$staff,
        ]);
    }
    //Contact Post Page

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
