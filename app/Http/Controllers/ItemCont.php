<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemCont extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item=Item::all();
        return response()->json($item);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = Item::create($request->all());
        return response()->json($item, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Item::find($id);
        return response()->json($item);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Item::find($id);
        $item->update($request->all());
        return response()->json($item, 200);   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Item::destroy($id);
        return response()->json(null, 204);
    }
}
