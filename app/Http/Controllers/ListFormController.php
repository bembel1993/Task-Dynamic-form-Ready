<?php

namespace App\Http\Controllers;
use App\Models\Forms;
use App\Models\Field;
use App\Models\Employee;
use App\Models\Company;
use App\Models\Department;
use Illuminate\Http\Request;

class ListFormController extends Controller
{
    public function index()
    {

        $employees = Employee::all();
        
        return view('index', ['employees' => $employees]);
    }

    public function showeditform(){
      return view('reg.editform');
    }

    public function showallform(){
      $companies = Company::all();
      $departments = Department::all();
      $forms = Forms::all(); 
      $data = array(); 
      foreach($forms as $form){ 
        $fields = Field::where('form_id', $form->id)->get();
        $data[] = array('form' => $form, 'fields' => $fields);
    }
    return view('reg.seeform', compact('data', 'companies', 'departments', 'forms')); // pass data to view
    }

    public function createdform(){
      return view('reg.seeform');
    }
}
