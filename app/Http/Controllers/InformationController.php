<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;

class InformationController extends Controller

{
    public function index()
    {
        $informations = Information::all(); // Fetch all records from the information table
        return view('index', compact('informations')); // Pass the data to the view
    }
    public function submit(Request $request)
    {
        {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required',
            ]);
    
            Information::create([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ]);
    
            return back()->with('success', 'Information submitted successfully.');
        }  // Logic to handle form submission
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Information::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return back()->with('success', 'Information submitted successfully.');
    }
}

