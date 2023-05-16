<?php

namespace App\Http\Controllers;


use App\Http\Requests\UpdateCasesRequest;
use App\Models\Cases;
use Illuminate\Http\Request;

class CasesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cases = Cases::all();
        return view('cases', ['cases' => $cases]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('create-case');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'caseid' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
    
        $case = new Cases;
        $case->caseid = $request['caseid'];
        $case->description = $request['description'];
        $case->save();
    
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cases $cases)
    {
        return view('case', ['case' => $cases]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cases $cases)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCasesRequest $request, Cases $cases)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cases $cases)
    {
        //
    }
}
