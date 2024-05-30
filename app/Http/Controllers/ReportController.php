<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function predict(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'photo' => 'required|image',
        ]);

        // Store the uploaded image
        $imagePath = $request->file('photo')->store('skin');
        $absolutePath = Storage::path($imagePath);

        // Execute the Python script
        $pythonScriptPath = base_path('python_scripts/py.py');
        $output = exec("python {$pythonScriptPath} {$absolutePath}");

        // Return the prediction result
        // return view('backend.report.index', ['output' => $output]);
        // return $output;
        dd($pythonScriptPath);
        return $output;
    }


    // public function index()
    // {
    //   return view('backend.report.index');
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     return view('backend.report.create');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
