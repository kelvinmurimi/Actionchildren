<?php

declare(strict_types=1);

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Partner;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    //
    public function index()
    {
        $title='admin contacts';
        $contact = Contact::latest()->paginate(6);
        return view('admin.contact.index', [
            'contacts' => $contact,
            'title'=>$title,
    ]);
    }

    public function contactdetails($id){

        $title='admin contacts';
         $contact=Contact::findOrFail($id); 
        return view('admin.contact.show', [
            'contact' => $contact,
            'title'=>$title,
    ]);
    }

    public function partnersindex(){
         $title='admin partners';
         $partner = Contact::latest()->paginate(6);
        return view('admin.contact.partnersindex', [
            'partners' => $partner,
            'title'=>$title,
    ]);
    }

    public function partnersdetails($id){

        $title='admin contacts';
         $partner=Partner::findOrFail($id); 
        return view('admin.contact.show', [
            'contact' => $partner,
            'title'=>$title,
    ]);
    }
///volunteers
public function volunteerindex()
{
    $title='admin volunteers';
    $volunteers = Volunteer::latest()->paginate(6);
    return view('admin.volunteer.index', [
        'volunteers' => $volunteers,
        'title'=>$title,
]);
}

public function volunteercontactdetails($id){

    $title='admin volunteers';
     $volunteer=Volunteer::findOrFail($id); 
    return view('admin.volunteer.show', [
        'volunteer' => $volunteer,
        'title'=>$title,
]);
}





    /** end */
}