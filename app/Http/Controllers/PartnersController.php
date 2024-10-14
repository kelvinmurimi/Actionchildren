<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\partners\CreatePartnersRequest;
use App\Http\Requests\partners\UpdatePartnersRequest;
use App\models\Partner;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    public function index()
    {
        //
        $title='Partners';
        $partners=partner::latest()->paginate(5);
        return view('admin.partners.index',[
            'title'=>$title,
            'partners'=>$partners
        ]);
    }

    public function create()
    {
        //
        return view('admin.partners.create',[
            'title'=>'Add New Partner'
        ]);
    }

    public function store(CreatePartnersRequest $request)
    {
        //
        $request->validated();
        $partnerimage ='partners/images'.'/'.time().$request->name.'.'.$request->image->extension();
        $request->image->move(public_path('partners/images'),$partnerimage);
        Partner::create([
             'name'=>$request->name,
             'linkurl'=>$request->linkurl,
             'description'=>$request->description,
             'image'=>$partnerimage,
        ]);
        return redirect(route('admin.partners.index'))->with('success', 'Partner created Successfully!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
        $title='Edit Partner Details';
        $partner=Partner::findOrFail($id);
        return view('admin.partners.edit',[
            'title'=>$title,
            'partner'=>$partner
        ]);
    }

    public function update(UpdatePartnersRequest $request, $id)
    {
        //
        $request->validated();
        $partner=Partner::findOrFail($id);

        $partnerimage ='partners/images'.'/'.time().$request->name.'.'.$request->image->extension();

        $request->image->move(public_path('partners/images'),$partnerimage);

        $partner->update([
            'name'=>$request->name,
            'linkurl'=>$request->linkurl,
            'description'=>$request->description,
            'image'=>$partnerimage,
        ]);
        return redirect(route('admin.partners.index'))->with('success', 'Partner Updated Successfully!');
    }

    public function destroy($id)
    {
        //
        $partner=Partner::findOrFail($id);

        $partner->delete();
        return redirect(route('admin.partners.index'))->with('danger', 'partner  Deleted!');
    }
}
