<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Company;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegFormController extends Controller
{
    /**
     * Display form page.
     * 
     * @return Renderable
     */
    public function show()
    {

        $companies = Company::all();
        $departments = Department::all();
        return view('reg.form', compact('companies', 'departments'));
    }

    public function showupdate($id){
        $companies = Company::all();
        $departments = Department::all();
        $employees = Employee::find($id);
       // dd($employees->toArray());
        return view('reg.update', compact('employees', 'departments', 'companies'));
    }

    public function registration(Request $request)
    {
        $formData = new Employee();
        $formData->lastname = $request->input('last_name');
        $formData->firstname = $request->input('first_name');
        $formData->patronymic = $request->input('patronymic');
        $formData->company = $request->input('company');
        $formData->department = $request->input('department');
        $formData->save();
            return redirect()->route('index');

     /*   $validator = Validator::make($request->all(), [
            'last_name' => 'required',
            'first_name' => 'required',
            'patronymic' => 'required',
            'company' => 'required',
            'department' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $formData->save();
            return redirect()->route('index');
        }*/
        /*
        if (empty($request->input('last_name'))) {
            echo '<p style="color: red">Field Last name is empty</p>';
        } elseif (empty($request->input('first_name'))) {
            echo '<p style="color: red">Field First name is empty</p>';
        } elseif (empty($request->input('patronymic'))) {
            echo '<p style="color: red">Field Patronymic is empty</p>';
        } elseif (empty($request->input('company'))) {
            echo '<p style="color: red">Field Company is empty</p>';
        } elseif (empty($request->input('department'))) {
            echo '<p style="color: red">Field Department is empty</p>';
        } else {
            $formData->save();
            return redirect()->back()->with('success', 'Form data added successfully!');
        }*/

        //$formData->save();

        //return redirect()->back()->with('success', 'Form data added successfully!');
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        if ($employee) {
            $employee->lastname = $request->input('last_name');
            $employee->firstname = $request->input('first_name');
            $employee->patronymic = $request->input('patronymic');
            $employee->company = $request->input('company');
            $employee->department = $request->input('department');

            $validator = Validator::make($request->all(), [
                'last_name' => 'required',
                'first_name' => 'required',
                'patronymic' => 'required',
                'company' => 'required',
                'department' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            } else {
                $employee->save();
                //return redirect()->route('form.index')->with('success', 'Employee record updated successfully.');
                return redirect()->route('index');
            }

            //return redirect()->route('reg.form');
        } else {
            return redirect()->route('form.index')->with('error', 'Employee record updated fails.');
        }
    }
}
