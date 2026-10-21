<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::orderBy('id')->get();

        return view('employee.index')->with('employees', $employees);
    }

    public function create(Request $request)
    {
        if ($request->isMethod('POST')) {
            $validated = $request->validate([
                'name' => 'required|string',
                'surname' => 'required|string',
                'age' => 'required|integer|min:18|max:70',
                'salary' => 'required|integer',
            ]);

            Employee::create($validated);
        }

        return view('employee.create');
    }

    public function edit(int $id, Request $request)
    {
        $employee = Employee::findOrFail($id);

        if ($request->isMethod('POST')) {
            $validated = $request->validate([
                'name' => 'required|string',
                'surname' => 'required|string',
                'age' => 'required|integer|min:18|max:70',
                'salary' => 'required|integer',
            ]);

            $employee->update($validated);

            return redirect('/employees');
        }

        return view('employee.edit')->with('employee', $employee);
    }

    public function delete(int $id)
    {
        $employee = Employee::findOrFail($id);

        $employee->delete($id);

        return redirect('/employees')->with('success', 'Успешное удаление');
    }
}
