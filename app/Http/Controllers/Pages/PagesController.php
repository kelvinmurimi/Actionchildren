<?php

declare(strict_types=1);

namespace App\Http\Controllers\Pages;

use App\Http\Requests\ContactFormRequest;
use App\Http\Requests\VolunteerFormRequest;
use App\Models\Contact;
use App\Models\Staff;
use App\Models\Partner;

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
        $staff = Staff::latest()->paginate(4);
        return view('frontend.pages.index', [
            'title' => $title,
            'staff' => $staff,
        ]);
    }
    //Home Page
    public function aboutAfcic()
    {
        $title = "About Us";
        $staff = Staff::where('department', 'board')->latest()->paginate(4);
        return view('frontend.pages.about', [
            'title' => $title,
            'staff' => $staff,
        ]);
    }

    public function contactPage()
    {
        $title = "contact Us";
        return view('frontend.pages.contact', [
            'title' => $title,

        ]);
    }



    public function ourPartners()
    {
        $title = "Our  Partners";

        $partners = Partner::latest()->paginate(60);
        return view('frontend.partners.index', [
            'title' => $title,
            'partners' => $partners,
        ]);
    }


    public function teamAfcic()
    {
        $title = "Our Team";
        $staff = Staff::latest()->paginate(6);
        return view('frontend.pages.team', [
            'title' => $title,
            'staff' => $staff,
        ]);
    }

    public function teamDetails($id)
    {
        $title = "Our Team";
        $youngfriends = Staff::where('department', 'young')->latest()->paginate(4);
        $staff = Staff::findOrFail($id);
        $partners = Partner::latest()->paginate(5);
        $articles = Article::latest()->paginate(6);
        return view('frontend.staffs.show', [
            'title' => $title,
            'staff' => $staff,
            'partners' => $partners,
            'youngfriends' => $youngfriends,
            'articles' => $articles,
        ]);
    }
    //Contact Post Page

    public function sendContactInfo(ContactFormRequest $req)
    {
        $req->validated();
        Contact::create([
            'name' => $req->name,
            'phone' => $req->name,
            'email' => $req->name,
            'content' => $req->name,
        ]);
        return redirect(route('contact'))->with('success', 'message delivered successfully,we will be in touch soon');
    }



    public function blog()
    {
        $title = "Our Blog";

        $articles = Article::latest()->paginate(60);
        return view('frontend.articles.index', [
            'title' => $title,
            'articles' => $articles,
        ]);
    }


    public function showblog($id)
    {
        $title = "Blog Details";
        $youngfriends = Staff::where('department', 'young')->latest()->paginate(4);

        $partners = Partner::latest()->paginate(5);
        $articles = Article::latest()->paginate(6);
        $blogdetail = Article::findOrFail($id);

        return view('frontend.articles.show', [
            'title' => $title,
            'blogdetail' => $blogdetail,
            'partners' => $partners,
            'youngfriends' => $youngfriends,
            'articles' => $articles,
        ]);
    }

    public function volunteerToday(){
         $title = "Volunteer Thika";
        return view('frontend.pages.volunteer',[
            'title'=>$title,
        ]);
    }
    public function volunteerDetails(VolunteerFormRequest $req){
        $req->validated();
        Contact::create([
            'name' => $req->name,
            'phone' => $req->name,
            'email' => $req->name,
            'content' => $req->name,
        ]);
        return redirect(route('volunteer'))->with('success', 'message delivered successfully,we will be in touch soon');
   }
}
