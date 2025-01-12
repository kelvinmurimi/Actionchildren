<?php

declare(strict_types=1);

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Partner;
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




    /** end */
}