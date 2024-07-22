<?php

declare(strict_types=1);

namespace App\Http\Controllers\careers;

use App\Http\Controllers\Controller;
use App\Http\Requests\careers\CreateCareersRequest;
use App\Http\Requests\careers\UpdateCareersRequest;
use App\Models\Career;
use Illuminate\Http\Request;

class CareersController extends Controller
{
    public function index()
    {
        //
        $careers=Career::latest()->paginate(5);
        $title='careers-Jobs';
        return view('admin.careers.index',[
            'title'=>$title,
            'careers'=>$careers,
        ]);
    }

    public function create()
    {
        //
        $title='careers-Jobs';
        return view('admin.careers.create',[
            'title'=>$title
        ]);
    }

    public function store(CreateCareersRequest $request)
    {
        //
        $request->validated();
        $document='jobs/documents'.'/'.time().'AfcicJobs'.'.'.$request->document->extension();
        $request->document->move(public_path('jobs/documents'),$document);
       Career::create([
        'title'=>$request->title,
        'content'=>$request->content,
        'description'=>$request->description,
        'document'=>$document,
       ]);
       return redirect(route('admin.careers.index'))->with('success', 'Job  created successfully!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
        $career=Career::findOrFail($id);
        $title='careers-Edit Job';
        return view('admin.careers.edit',[
            'title'=>$title,
            'career'=>$career,
        ]);
    }

    public function update(UpdateCareersRequest $request, $id)
    {
        //
        $request->validated();
        $career=Career::findOrFail($id);

        $document ='jobs/documents'.'/'.time().'AfcicJobs'.'.'.$request->document->extension();

        $request->document->move(public_path('jobs/documents'),$document);

       $career->update([
        'title'=>$request->title,
        'content'=>$request->content,
        'description'=>$request->description,
        'document'=>$document,
       ]);
       return redirect(route('admin.careers.index'))->with('success', 'Job  Updated successfully!');
    }

    public function destroy($id)
    {
        //
        $career=Career::findOrFail($id);
        $career->delete();
        return redirect(route('admin.careers.index'))->with('danger', 'Career  Deleted!');
    }
}
