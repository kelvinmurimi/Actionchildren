<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Support\Str;
use App\Http\Requests\staff\CreatestaffsRequest;
use Illuminate\Http\Request;
use App\Models\Department;
class StaffsController extends Controller
{
    public function index()
    {
        //
        $title = 'Add New Staff Member';
        $staffs=Staff::latest()->paginate(5);
        return view('admin.staffs.index', [
            'title' => $title,
             'staffs'=>$staffs
        ]);
    }

    public function create()
    {
        //
        $title = 'Add New Staff Member';
        $departments= Department::latest()->get();
        return view('admin.staffs.create', [
            'title' => $title,
            'departments'=>$departments

        ]);
    }

    public function store(CreatestaffsRequest $request)
    {
        //dd($request)
        ;
        $request->validated();
        $department=Str::slug($request->title,'-');
        $image ='staff/images'.'/'.time().$request->name.'.'.$request->image->extension();
        $request->image->move(public_path('staff/images'),$image);
        Staff::create([
             'name'=>$request->name,
             'position'=>$request->position,
             'bio'=>$request->bio,
             'department_id'=>$department,
             'image'=>$image,
        ]);
        return redirect(route('admin.staffs.index'))->with('success', 'Staff Created Successfully!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
        $title = 'Edit Staff Member';
        $departments= Department::latest()->get();
        $staff = Staff::findOrFail($id);
        return view('admin.staffs.edit', [
            'title' => $title,
            'staff' => $staff,
            'departments'=>$departments,
        ]);
    }

    public function update(CreatestaffsRequest $request, $id)
    {
        //
        $request->validated();

        $image ='staff/images'.'/'.time().$request->name.'.'.$request->image->extension();
        $request->image->move(public_path('staff/images'),$image);

        $staff = Staff::findOrFail($id);
        $staff->update([
            'name'=>$request->name,
            'position'=>$request->position,
            'bio'=>$request->bio,
            'department_id'=>$request->department,
            'image'=>$image,
       ]);
        return redirect(route('admin.staffs.index'))->with('success', 'Staff Updated Successfully!');
    }

    public function destroy($id)
    {
        //
        $staff = Staff::findOrFail($id);
        $staff->delete();
        return redirect(route('admin.staffs.index'))->with('danger', 'staff  Deleted!');
    }
}
