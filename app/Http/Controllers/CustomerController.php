<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'dob' => 'nullable|date',
            'passport_number' => 'required|string|max:255',
            'passport_expiry_date' => 'nullable|date',
            'work_permit_duration' => 'nullable|numeric',
            'work_permit_status' => 'nullable|string|max:100',
            'reference_no' => 'nullable|string|max:255',
            'visa_type' => 'nullable|string|max:100',
            'password' => 'required|string|min:6',
        ]);

        // 🚫 Password is saved as plain text (not hashed) — use with caution!
        $validated['password'] = $request->input('password');

        // Handle file uploads
        for ($i = 1; $i <= 9; $i++) {
            $fileField = 'file' . $i;
            if ($request->hasFile($fileField)) {
                $validated[$fileField] = $request->file($fileField)->store('customer_files', 'public');
            }
        }

        // Create the customer record
        Customer::create($validated);

        return redirect()->route('customers.index')->with('success', 'Customer created successfully.');
    }


    // Show a single customer
    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return view('AdminDashboard.customer.show', compact('customer'));
    }




    // Show edit form
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('AdminDashboard.customer.edit', compact('customer'));
    }

    // Update customer
    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'dob' => 'nullable|date',
            'passport_number' => 'required|string|max:255',
            'passport_expiry_date' => 'nullable|date',
            'work_permit_duration' => 'nullable|numeric',
            'work_permit_status' => 'nullable|string|max:100',
            'reference_no' => 'nullable|string|max:255',
            'visa_type' => 'nullable|string|max:100',
        ]);

        // Handle file uploads
        for ($i = 1; $i <= 9; $i++) {
            $fileField = 'file' . $i;
            if ($request->hasFile($fileField)) {
                $validated[$fileField] = $request->file($fileField)->store('customer_files', 'public');
            }
        }

        $customer->update($validated);

        return redirect()->route('customers.index')->with('success', 'Customer updated successfully.');
    }


    // Delete Customer Data
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);

        // Optionally delete uploaded files as well
        for ($i = 1; $i <= 9; $i++) {
            $fileField = 'file' . $i;
            if ($customer->$fileField && Storage::disk('public')->exists($customer->$fileField)) {
                Storage::disk('public')->delete($customer->$fileField);
            }
        }

        $customer->delete();

        return redirect()->route('customers.index')->with('success', 'Customer deleted successfully!');
    }

    public function login(Request $request)
    {
        $request->validate([
            'application_id' => 'required', // passport_number
            'verification_code' => 'required', // password
        ]);

        $customer = Customer::where('passport_number', $request->application_id)
            ->where('password', $request->verification_code) // ⚠️ plain-text password
            ->first();

        if ($customer) {
            return redirect()->route('customer.details', $customer->id);
        } else {
            return back()->withErrors([
                'login' => 'Invalid passport number or password.',
            ])->withInput();
        }
    }

    public function showDetails($id)
    {
        $customer = Customer::findOrFail($id);
        return view('AdminDashboard.customer.details', compact('customer'));
    }

    

    public function logout(Request $request)
    {
        Auth::logout(); // Logs out the currently authenticated customer

        $request->session()->invalidate(); // Clears session data
        $request->session()->regenerateToken(); // Prevents CSRF reuse

        return redirect()->route('homepage')->with('success', 'You have been logged out.');
    }


}

