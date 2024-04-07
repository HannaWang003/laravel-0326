<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::select('select * from dogs');
        // dd($data);
        return view('dog.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request = $request->except('_token');
        Dog::create($request);
        return redirect()->route('dogs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dog $dog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dog $dog)
    {
        $id = $dog->id;
        $data = DB::table('dogs')->where('id', $id)->first();
        return view('dog.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dog $dog)
    {
        $data = $request->except('_token', '_method');
        $dog->update($data);
        return redirect(route('dogs.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dog $dog)
    {
        $dog->delete();
        return redirect()->route('dogs.index');
    }
}
