<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Project_uas;
use Illuminate\View\View;

class Project_uasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $konser = Project_uas::all();
        return view ('konser.index')->with('konser',$konser);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('konser.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Project_uas::create($input);
        return redirect('konser');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $konser = Project_uas::find($id);
        return view('konser.show')->with('konser', $konser);
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $konser = Project_uas::find($id);
        return view('konser.edit')->with('konser', $konser);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $konser = Project_uas::find($id);
        $input = $request->all();
        $konser->update($input);
        return redirect('konser');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Project_uas::destroy($id);
        return redirect('konser');
    }
}
