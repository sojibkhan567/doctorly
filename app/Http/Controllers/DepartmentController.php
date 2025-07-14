<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index() {
        $departments = Department::all();
        return view('welcome', compact('departments'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request) {
        Department::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect('/');
    }
}
