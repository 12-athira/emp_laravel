<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class AddController extends Controller
{
    public function index(){
        $employee=Employee::all();
        return view('index',compact('employee'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|unique:users',
            'phone'=>'required|min:10',
            'address'=>'required|max:255',
            'dob'=>'required|date',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'state' => 'required|max:255',
            'city' => 'required|max:255',
            'gender' => 'required|in:male,female,other',
            'designation' => 'required|max:255',
          ]);

          if ($request->hasFile('photo')) {
            $imageName = time() . '_' . $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('images', $imageName, 'public');
            $photoPath = '/storage/' . $path;
        } else {
            $photoPath = null;
        }

        
        Employee::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'dob' => $request->input('dob'),
            'photo' => $photoPath,
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'gender' => $request->input('gender'),
            'designation' => $request->input('designation'),
    ]);
       return redirect('/')->with('message', 'Employee created successfully.');
   }




    public function show($id){
        $employee=Employee::find($id);
        return view('show',compact('employee'));
    }

    public function edit($id){
        $employee=Employee::find($id);
        return view('edit',compact('employee'));
    }

    public function update(Request $request,$id){
        $employee=Employee::find($id);

        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->address = $request->input('address');
        $employee->dob = $request->input('dob');
        $employee->photo = $request->input('photo');
        $employee->state = $request->input('state');
        $employee->city = $request->input('city');
        $employee->gender = $request->input('gender');
        $employee->designation = $request->input('designation');

        $employee->save();

        return redirect('/')->with('message','successfully updated');

    }


    public function delete($id){
        $employee=Employee::find($id);
        $employee->delete();
        return redirect('/')->with('message','deleted successfully');
    }


}
