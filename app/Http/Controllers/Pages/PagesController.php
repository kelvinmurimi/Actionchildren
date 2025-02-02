<?php

declare(strict_types=1);

namespace App\Http\Controllers\Pages;

use App\Http\Requests\ContactFormRequest;
use App\Http\Requests\VolunteerFormRequest;
use App\Http\Requests\DonationFormRequest;
use App\Http\Requests\VFest;
use App\Models\Contact;
use App\Models\Staff;
use App\Models\Partner;
use App\Models\Career;
use App\Models\Article;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Donation;
use App\Models\Project;
use App\Models\Volunteer;

class PagesController extends Controller
{
    /*
    This Controller Displays Most Of Frontend Ui
     */
    //Home Page
    public function index()
    {
        $title = "homepage";
        $staff = Staff::latest()->paginate(3);
        return view('frontend.pages.index', [
            'title' => $title,
            'staff' => $staff,
        ]);
    }
    //Home About Page
    public function aboutAfcic()
    {
        $title = "About Us";
        $staff = Staff::where('department', 'DA')->latest()->paginate(3);
        return view('frontend.pages.about', [
            'title' => $title,
            'staff' => $staff,
        ]);
    }
    //contact Page
    public function contactPage()
    {
        $title = "contact Us";
        return view('frontend.pages.contact', [
            'title' => $title,

        ]);
    }


    //Partners
    public function ourPartners()
    {
        $title = "Our  Partners";

        $partners = Partner::latest()->paginate(9);
        return view('frontend.partners.index', [
            'title' => $title,
            'partners' => $partners,
        ]);
    }
    //partner data
    public function partnerdata(ContactFormRequest $req)
    {
        $req->validated();
        Contact::create([
            'name' => $req->name,
            'phone' => $req->name,
            'email' => $req->name,
            'content' => $req->name,
        ]);
        return redirect(route('partners'))->with('success', 'message delivered successfully,we will be in touch soon');
    }
    //Team page
    public function teamAfcic()
    {
        $title = "Our Team";
        $staff = Staff::latest()->paginate(18);
        return view('frontend.pages.team', [
            'title' => $title,
            'staff' => $staff,
        ]);
    }
    // Team Details
    public function teamDetails($id)
    {
        $title = "Our Team";
        $youngfriends = Staff::where('department', 'DA')->latest()->paginate(4);
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


//blog page #depreciated
    public function blog()
    {
        $title = "Our Blog";

        $articles = Article::latest()->paginate(60);
        return view('frontend.articles.index', [
            'title' => $title,
            'articles' => $articles,
        ]);
    }

  //Show Single Resource
    public function showblog($id)
    {
        $title = "Details";
        $youngfriends = Staff::where('department', 'DA')->latest()->paginate(4);

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
  //volunteer form page
    public function volunteerToday()
    {
        $title = "Volunteer Thika";
        return view('frontend.pages.volunteer', [
            'title' => $title,
        ]);
    }

    /// coleetc  form volunteer data
    public function volunteerDetails(VolunteerFormRequest $req)
    {
        $req->validated();
        Volunteer::create([
            'name' => $req->name,
            'phone' => $req->name,
            'email' => $req->name,
            'content' => $req->name,
        ]);
        return redirect(route('volunteer'))->with('success', 'message delivered successfully,we will be in touch soon');
    }

    //donation form
    public function donationform()
    {
        $title = "Donate ";


        return view('frontend.pages.donationform', [
            'title' => $title,
        ]);
    }
    //donation form data
    public function donate(DonationFormRequest $req)
    {
        $title = "Donate ";

        Donation::create([
            'name' => $req->name,
            'phone' => $req->phone,
            'email' => $req->email,

        ]);
        return redirect(route('donation'))->with('success', 'thank you');
    }
    //Paypal donations
    public function paypaldonation()
    {
        $title = 'paypal donation';
        return view('frontend.pages.donation', [
            'title' => $title,
        ]);
    } 
    //careers page
    public function careers()
    {
        $title = 'Available Jobs';
        $careers = Career::latest()->paginate(6);
        return view('frontend.pages.careers', [
            'title' => $title,
            'careers' => $careers
        ]);
    }
    //show career details
    public function careersDetails($id)
    {
        $title = 'Job Details';
        $career = Career::findOrFail($id);
        $youngfriends = Staff::where('department', 'DA')->latest()->paginate(4);

        $partners = Partner::latest()->paginate(5);
        $articles = Article::latest()->paginate(6);
        return view('frontend.careers.show', [
            'title' => $title,
            'job' => $career,
            'partners' => $partners,
            'youngfriends' => $youngfriends,
            'articles' => $articles,
        ]);
    }

    //projects index
    public function projects()
    {
        $title = 'Our Projects';
        $projects = Project::latest()->paginate(6);
        return view('frontend.pages.projects.index', [
            'title' => $title,
            'projects' => $projects
        ]);
    }
   //projects Details
    public function projectDetail($id)
    {
        // dd($slug);
        $title = 'Project  Details';
        $project = Project::findOrFail($id);
        $youngfriends = Staff::where('department', 'DA')->latest()->paginate(4);

        $partners = Partner::latest()->paginate(5);
        $articles = Article::latest()->paginate(6);
        return view('frontend.pages.projects.show', [
            'title' => $title,
            'project' => $project,
            'partners' => $partners,
            'youngfriends' => $youngfriends,
            'articles' => $articles,
        ]);
    }

    //resource Pages
    public function resourcetDetail($id)
    {
        // dd($slug);
        $ourteam = Staff::where('department', 'DA')->latest()->paginate(4);
        $articles = Article::where('category_id', $id)->latest()->paginate(6);
        $title = 'Resources';
        $resourcePageTitle = Category::findOrFail($id);
        return view('frontend.articles.index', [
            'title' => $title,
            'resourcePageTitle' => $resourcePageTitle,
            'articles' => $articles,
            'youngfriends' => $ourteam,
        ]);
    }




    /**end of functions

     */
}
