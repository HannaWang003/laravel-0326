<?php

namespace App\Http\Controllers;

use App\Models\Fish;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::select('select * from fish');
        // dd($data);
        return view('fish.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fish.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request = $request->except('_token');
        Fish::create($request);
        return redirect()->route('fish.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fish $fish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fish $fish)
    {
        $id = $fish->id;
        $data = DB::table('fish')->where('id', $id)->first();
        return view('fish.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fish $fish)
    {
        $data = $request->except('_token', '_method');
        $fish->update($data);
        return redirect(route('fish.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fish $fish)
    {
        $fish->delete();
        return redirect()->route('fish.index');
    }
}
