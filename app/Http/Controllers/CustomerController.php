<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{

    // Display a listing of the customers
    public function index()
    {
        $customers = Customer::all();
        return view('AdminDashboard.customer.index', compact('customers'));
    }

    // Show the form for creating a new customer
    public function create()
    {
        return view('AdminDashboard.customer.create');
    }


    // Store Customer Data
    public function store(Request $request)
    {
       // dd($request);
        $validated = $request->validate([
            'name' => 'required|string',
            'nationality' => 'required|string',
            'passport_number' => 'required|string|unique:customers',
            'password' => 'required|string',
            'passport_expiry_date' => 'nullable|date',
            'work_permit_duration' => 'nullable|integer',
            'reference_no' => 'nullable|string',
            'file1' => 'nullable|file',
            'file2' => 'nullable|file',
            'file3' => 'nullable|file',
            'file4' => 'nullable|file',
            'file5' => 'nullable|file',
            'file6' => 'nullable|file',
            'file7' => 'nullable|file',
            'file8' => 'nullable|file',
            'file9' => 'nullable|file'
        ]);

        // Handle file uploads
        for ($i = 1; $i <= 9; $i++) {
            if ($request->hasFile('file'.$i)) {
                $validated['file'.$i] = $request->file('file'.$i)->store('customer_files');
            }
        }

        // Save the customer record
        Customer::create($validated);

        return redirect()->route('customers.index')->with('success', 'Customer created successfully!');
    }

    // Show a single customer
    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return response()->json($customer);
    }

    // Show the edit form
    public function edit($id)
    {
        $workPermit = WorkPermit::findOrFail($id);
        return view('AdminDashboard.work_permits.edit', compact('workPermit'));
    }

    // Update Customer Data
    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string',
            'nationality' => 'required|string',
            'passport_number' => 'required|string|unique:customers,passport_number,' . $id,
            'password' => 'nullable|string',
            'passport_expiry_date' => 'nullable|date',
            'work_permit_duration' => 'nullable|integer',
            'reference_no' => 'nullable|string',
            'file1' => 'nullable|file',
            'file2' => 'nullable|file',
            'file3' => 'nullable|file',
            'file4' => 'nullable|file',
            'file5' => 'nullable|file',
            'file6' => 'nullable|file',
            'file7' => 'nullable|file',
            'file8' => 'nullable|file',
            'file9' => 'nullable|file'
        ]);

        // Handle file uploads
        for ($i = 1; $i <= 9; $i++) {
            if ($request->hasFile('file'.$i)) {
                $validated['file'.$i] = $request->file('file'.$i)->store('customer_files');
            }
        }

        if (!empty($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        }

        $customer->update($validated);

        return response()->json(['message' => 'Customer updated successfully!']);
    }

    // Delete Customer Data
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return response()->json(['message' => 'Customer deleted successfully!']);
    }
}

