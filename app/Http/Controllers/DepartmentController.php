<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DepartmentController extends Controller
{
    public function index()
    {
       
        $departments= Department::latest()->paginate(5);
        $title = "Staff Departments";
        return view('admin.departments.index', [
            'departments' => $departments,
            'title' => $title,
        ]);
    }

    public function create()
    {
        //
        return view('admin.departments.create');
    }

    public function store(StoreDepartmentRequest $request)
    {
        //

        $request->validated();
        $slug = Str::slug($request->department_name, '-');
        Department::create([
            'department_name' => $request->department_name,
            'slug' => $slug

        ]);

        return redirect(route('departments.index'))->with('success', 'Department Created successfully!');
    }

    public function show(Department $department)
    {
        //
    }

    public function edit( $id)
    {
        //
        $department=Department::findOrFail($id);
        $title = "Edit  Staff Departments";
      return view('admin.departments.edit',[
          'department'=>$department,
          'title'=>$title,
      ]);
    }

    public function update(UpdateDepartmentRequest $request, $id)
    {
        //
        $department=Department::findOrFail($id);

        $request->validated();
        $slug = Str::slug($request->department_name, '-');
          $department->update([
            'department_name' => $request->department_name,
            'slug' => $slug
        ]);

        return redirect(route('departments.index'))->with('success', 'Department Updated successfully!');
    }

    public function destroy($id)
    {
        //
        $department=Department::findOrFail($id);
        $department->delete();
        return redirect(route('departments.index'))->with('danger', 'department deleted successfully!');
    }
}
