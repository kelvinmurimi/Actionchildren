<?php

declare(strict_types=1);

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Project;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;

class ProjectController extends Controller
{
    public function index()
    {
        //
        $title='Admin Projects';
        $projects=Project::latest()->paginate(10);
        return view('admin.projects.index',[
            'title'=>$title,
            'projects'=>$projects,
        ]);
    }

    public function create()
    {
        //
        $title='Add New Project';

        return view('admin.projects.create',[
            'title'=>$title,

        ]);
    }

    public function store(StoreProjectRequest $request)
    {
        //
        $request->validated();
        $cover_image='images/projects'.'/'.time().'.'.$request->image->extension();
        $request->image->move(public_path('images/projects'),$cover_image);

          $slug=Str::slug($request->title,'-');
          Project::create([
             'title'=>$request->title,
             'slug'=>$slug,
             'image'=>$cover_image,

             'description'=>$request->description,
             'details'=>$request->details,

         ]);
         return redirect(route('admin.projects.index'))->with('success', 'Project created successfully!');
    }

    public function show(Project $project)
    {
        //
    }

    public function edit($id)
    {
        //
        $title='Edit Project';
        $project=Project::findOrFail($id);
        return view('admin.projects.edit',[
            'title'=>$title,
            'project'=>$project,

        ]);
    }

    public function update(UpdateProjectRequest $request, $id)
    {
        //
        $project=Project::findOrFail($id);
        $request->validated();
        $current_cover_image=$project->image;

        if ($request->hasFile('image')) {
                //check if image exists then delete it
            if(File::exists($current_cover_image)){
                     File::delete($current_cover_image);
            }
            //save new image
         $cover_image='images/projects'.'/'.time().'.'.$request->image->extension();
         $request->image->move(public_path('images/projects'),$cover_image);
        }else{
            $cover_image=$project->image;
        }

          $slug=Str::slug($request->title,'-');
          $project->update([
             'title'=>$request->title,
             'slug'=>$slug,
             'image'=>$cover_image,
             'description'=>$request->description,
             'details'=>$request->details,

         ]);
         return redirect(route('admin.projects.index'))->with('success', 'Project updated successfully!');
    }

    public function destroy($id)
    {
        //
        $project=Project::findOrFail($id);
        $project->delete();
        return redirect(route('admin.projects.index'))->with('danger', 'Project deleted successfully!');

    }
}
