<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::select('select * from cats');
        // dd($data);
        return view('cat.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request = $request->except('_token');
        // dd($request);
        Cat::create($request);
        // DB::table('cats')->insert($request);
        return redirect()->route('cats.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cat $cat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cat $cat)
    {
        $id = $cat->id;
        $data = DB::table('cats')->where('id', $id)->first();
        return view('cat.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cat $cat)
    {
        $data = $request->except('_token', '_method');
        $cat->update($data);
        return redirect(route('cats.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cat $cat)
    {
        // dd("$cat del ok");
        $cat->delete();
        return redirect()->route('cats.index');
    }
}
