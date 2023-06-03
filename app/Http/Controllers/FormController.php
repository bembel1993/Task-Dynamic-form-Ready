<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Company;
use App\Models\Field;
use App\Models\Forms;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $forms = Forms::all();

        return view('forms.index', compact('forms'));
    }

    public function create()
    {
        return view('forms.create');
    }

    public function store(Request $request)
    {
        $form = new Forms();
        $form->name = $request->input('name');
        $form->save();

        foreach ($request->input('fields') as $fieldData) {
            $field = new Field();
            $field->name = $fieldData['name'];
            $field->type = $fieldData['type'];
            $field->atribut = $fieldData['atribut'];
            $field->required = isset($fieldData['required']);
            $field->form_id = $form->id;
            $field->save();
        }

        return redirect()->route('forms.show', $form->id);
    }

    public function show($id)
    {
        $companies = Company::all();
        $departments = Department::all();
        $fields = Field::where('form_id', $id)->get();
        $form = Forms::find($id);

        return view('forms.show', compact('form', 'fields', 'companies', 'departments'));
    }

    public function submit(Request $request, $id)
    {
        $form = Forms::find($id);

        foreach ($form->fields as $field) {
            $value = $request->input($field->name);
            if (!$value && $field->required) {
                return back()->withErrors([$field->name . ' is required']);
            }
            $field->values()->create(['value' => $value]);
        }

        return redirect()->route('forms.show', $form->id)->with('success', 'Form submitted successfully');
    }
}
