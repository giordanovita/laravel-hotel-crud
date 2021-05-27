<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class MainController extends Controller
{
    public function home(){
        $employees= Employee::all();
        return view('pages.home', compact('employees'));
    }

    public function employee($id){
        $employee= Employee::findOrFail($id);
        return view('pages.employee', compact('employee'));
    }

    public function create(){
        
        return view('pages.create');
    }

    public function store(Request $request){
        
      $validate= $request -> validate([

          'firstname' => 'required|max:128',
          'lastname' => 'required|max:128',
          'role' => 'required|max:255',
          'ral' => 'nullable|integer',
      ]);

      $employee=Employee::create($validate);
      return redirect() -> route('employee', $employee -> id);
    }


    public function delete($id){
        
        $employee = Employee::findOrFail($id);
        $employee -> delete();
        return redirect() -> route('home');
    }

    public function edit($id){
        
        $employee = Employee::findOrFail($id);
        return view('pages.edit', compact('employee'));
    }

    public function update(Request $request, $id){

        $validate= $request -> validate([

            'firstname' => 'required|max:128',
            'lastname' => 'required|max:128',
            'role' => 'required|max:255',
            'ral' => 'nullable|integer',
        ]);
        $employee = Employee::findOrFail($id);
        $employee ->update($validate);
        return redirect() ->route('employee', $employee -> id);
        
    }
}
