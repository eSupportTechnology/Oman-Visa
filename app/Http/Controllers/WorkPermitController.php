<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkPermit;

class WorkPermitController extends Controller
{
    // Show the form to create a new work permit
    public function create()
    {
        return view('AdminDashboard.work_permits.create');
    }

    // Store the submitted work permit data
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'reference_no' => 'required|unique:work_permits',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'place_of_birth' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'nationality' => 'required|string|max:255',
            'passport_number' => 'required|string|max:20',
            'passport_issue_date' => 'required|date',
            'passport_expiry_date' => 'required|date',
            'work_permit_type' => 'required|string|max:50',
            'work_permit_validity_start' => 'required|date',
            'work_permit_validity_end' => 'required|date',
            'number_of_entries' => 'required|integer',
            'validity_date' => 'required|date',
            'expiry_date' => 'required|date',
            'residence_duration' => 'required|integer',
        ]);

        WorkPermit::create($request->all());

        return redirect()->route('work_permits.index')->with('success', 'Work Permit Created Successfully!');
    }

    // Display all work permits
    public function index()
    {
        $workPermits = WorkPermit::all();
        return view('AdminDashboard.work_permits.index', compact('workPermits'));
    }

    // Show a single work permit
    public function show($id)
    {
        $workPermit = WorkPermit::findOrFail($id);
        return view('AdminDashboard.work_permits.show', compact('workPermit'));
    }

    // Show the edit form
    public function edit($id)
    {
        $workPermit = WorkPermit::findOrFail($id);
        return view('AdminDashboard.work_permits.edit', compact('workPermit'));
    }

    // Update work permit details
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'place_of_birth' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'nationality' => 'required|string|max:255',
            'passport_number' => 'required|string|max:20',
            'passport_issue_date' => 'required|date',
            'passport_expiry_date' => 'required|date',
            'work_permit_type' => 'required|string|max:50',
            'work_permit_validity_start' => 'required|date',
            'work_permit_validity_end' => 'required|date',
            'number_of_entries' => 'required|string',
            'validity_date' => 'required|date',
            'expiry_date' => 'required|date',
            'residence_duration' => 'required|integer',
            'additional_visa_info' => 'nullable|string',
            'conditions' => 'nullable|string',
        ]);

        $workPermit = WorkPermit::findOrFail($id);
        $workPermit->update($request->all());

        return redirect()->route('work_permits.index')->with('success', 'Work Permit Updated Successfully!');
    }

    // Delete a work permit
    public function destroy($id)
    {
        $workPermit = WorkPermit::findOrFail($id);
        $workPermit->delete();

        return redirect()->route('work_permits.index')->with('success', 'Work Permit Deleted Successfully!');
    }

    // Show the work permit in the redesigned template
    public function template($id)
    {
        $workPermit = WorkPermit::findOrFail($id);
        return view('AdminDashboard.work_permits.template', compact('workPermit'));
    }
}
