<?php

namespace App\Http\Controllers;

use App\Models\Template04;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class Template04Controller extends Controller
{
    public function create()
    {
        return view('template04.create');
    }

    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'passport_number' => 'required',
            'full_name' => 'required',
            'nationality' => 'required',
            'dob' => 'required|date',
            'pvr_no' => 'required',
            'pvr_issue_date' => 'required|date',
            'pvr_name' => 'required',
            'pvr_address' => 'required',
            'pvr_place' => 'required',
            'pvr_report_date' => 'required|date',
            'signature1' => 'image|mimes:jpeg,png,jpg',
            'signature2' => 'image|mimes:jpeg,png,jpg',
            'signature3' => 'image|mimes:jpeg,png,jpg',
        ]);

        $data = $request->all();

        // Handle signature uploads
        foreach (['signature1', 'signature2', 'signature3'] as $signatureField) {
            if ($request->hasFile($signatureField)) {
                $data[$signatureField] = $request->file($signatureField)->store('signatures', 'public');
            }
        }

        $record = Template04::create($data);

        return redirect()->route('template04.show', $record->id)->with('success', 'Document saved successfully!');
    }

    public function show($id)
    {
        $data = Template04::findOrFail($id);
        return view('template04.show', compact('data'));
    }

    public function index()
    {
        $records = Template04::latest()->get();
        return view('template04.index', compact('records'));
    }

    public function destroy($id)
    {
        $data = Template04::findOrFail($id);
        foreach (['signature1', 'signature2', 'signature3'] as $signatureField) {
            if ($data->$signatureField) {
                \Storage::disk('public')->delete($data->$signatureField);
            }
        }
        $data->delete();
        return redirect()->route('template04.index')->with('success', 'Document deleted successfully.');
    }

    public function generatePdf($id)
    {
        $data = Template04::findOrFail($id);

        $pdf = Pdf::loadView('template04.full_document', compact('data'));
        return $pdf->stream('document_' . $id . '.pdf');
        // OR for download:
        // return $pdf->download('document_' . $id . '.pdf');
    }

}
